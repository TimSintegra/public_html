<?php
/**
 * Admin add module
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 03.04.13
 * @time 0:29
 * @version 1.1
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
$_val = array(
    'title' => '',
);
$errorText = '';
$successText = '';
$activeCats = 1;

$formDetails = array('formTitle' => 'Добавить документ',
    'submitName' => 'add_page',
    'submitValue' => 'Добавить документ');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data=array(
        'title',
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Заголовок, Файл';
    } else {
        if (!$_FILES['docs']['tmp_name']) {
            $errorText ='Обязательные поля для заполнения: Заголовок, Файл';
        } else {
            $title = $exe->quote_smart($_POST['title']);
            $data=array(
                'title' => $title,
                'file' => '',
                'filesize' => '',
                'regdate'=>'NOW()',
                'active'=>'1'
            );
            if ($_adminka->InsertBase("docs", $data)) {
                $lastFId = $db->id;
                if ($_FILES['docs']['tmp_name'])
                {
                    $fileIn = $exe->translit($_FILES['docs']['name']);
                    $_dopName = $exe->generatePassword(6);
                    $filename = _SERVER_ROOT . "/content/files/" . $lastFId . "_" . $_dopName . "_" . $fileIn;
                    $dbName = $lastFId . "_" . $_dopName . "_" . $fileIn;
                    if (move_uploaded_file($_FILES['docs']['tmp_name'], $filename)) {
                        $data = array(
                            'file' => $dbName,
                            'filesize' => $_FILES['docs']['size']
                        );
                        if ($_adminka->UpdateBase("docs", $data, "id=" . $lastFId)) {
                            $successText ='Информация успешно добавлена';
                            Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
                        } else {
                            $errorText ='Ошибка базы данных!!!';
                        }
                    } else {
                        $errorText ='Файл не может быть записан';
                    }
                } else {
                    $errorText ='Обязательные поля для заполнения: Заголовок, Файл';
                }
            } else {
                $errorText ='Ошибка базы данных!!!';
            }
        }
    }
}

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('formDetails', $formDetails);
