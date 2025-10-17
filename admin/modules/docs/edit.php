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
$_val=$db->getRow("select * from docs where id='" . $id . "'");
$_val['title'] = htmlspecialchars($_val['title']);

$errorText = '';
$successText = '';
$activeCats = 1;

$formDetails = array('formTitle' => 'Изменить документ',
    'submitName' => 'edit_page',
    'submitValue' => 'Изменить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data=array(
        'title',
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Заголовок, Файл';
    } else {
        $title = $exe->quote_smart($_POST['title']);
        $data=array(
            'title' => $title,
        );
        if ($_adminka->UpdateBase("docs", $data, "id=" . $id)) {

            if ($_FILES['docs']['tmp_name'])
            {
                if ($_val['file'] != '') {
                    unlink(_SERVER_ROOT . "/content/files/" . $_val['file']);
                }
                $fileIn = $exe->translit($_FILES['docs']['name']);
                $_dopName = $exe->generatePassword(6);
                $filename = _SERVER_ROOT . "/content/files/" . $id . "_" . $_dopName . "_" . $fileIn;
                $dbName = $id . "_" . $_dopName . "_" . $fileIn;
                if (move_uploaded_file($_FILES['docs']['tmp_name'], $filename)) {
                    $data = array(
                        'file' => $dbName,
                        'filesize' => $_FILES['docs']['size']
                    );
                    if ($_adminka->UpdateBase("docs", $data, "id=" . $id)) {
                        $successText ='Информация успешно добавлена';
                        if ($subid) {
                            Header ("Location: " . _ADMIN_URL . "/docs/show/" . $subid . "/");
                        } else {
                            Header ("Location: " . _ADMIN_URL . "/docs/");
                        }
                    } else {
                        $errorText ='Ошибка базы данных!!!';
                    }
                } else {
                    $errorText ='Файл не может быть записан';
                }
            } else {
                $successText ='Информация успешно добавлена';
                if ($subid) {
                    Header ("Location: " . _ADMIN_URL . "/docs/show/" . $subid . "/");
                } else {
                    Header ("Location: " . _ADMIN_URL . "/docs/");
                }
            }
        } else {
            $errorText ='Ошибка базы данных!!!';
        }
    }
}

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';
$hiddenInputs .= '<input type="hidden" name="id" value="' . $id . '">';
if ($subid) {
    $hiddenInputs .= '<input type="hidden" name="subid" value="' . $subid . '">';
}

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('formDetails', $formDetails);