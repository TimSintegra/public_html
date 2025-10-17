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
    'main' => '0',
    'title' => ''
);
$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Добавить партнера',
    'submitName' => 'add_news',
    'submitValue' => 'Добавить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    if (!$_FILES['partners']['tmp_name']) {
        $errorText ='Обязательные поля для заполнения: Логотип';
    } else {
        $title = $exe->quote_smart($_POST['title']);

        if (isset($_POST['main']) && $_POST['main'] == '1') {
            $main = 1;
        } else {
            $main = 0;
        }

        $data = array(
            'title' => $title,
            'image' => '',
            'main' => $main,
            'msort' => '0',
            'regdate' => 'NOW()',
            'active' => '1'
        );
        if ($_adminka->InsertBase("partners", $data)) {
            $lastNId = $db->id;
            if ($_FILES['partners']['tmp_name'])
            {
                $fileIn = $exe->translit($_FILES['partners']['name']);
                $_img = $exe->generatePassword(6);
                $filename = _SERVER_ROOT . "/content/img/partners/" . $lastNId . "_" . $_img . "_" . $fileIn;
                $dbName = $lastNId . "_" . $_img . "_" . $fileIn;
                if ($_adminka->SaveResizeImage ($__image, $_FILES['partners']['tmp_name'], $filename, 'width', '240', '')) {
                    $data = array(
                        'image' => $dbName,
                    );
                    if ($_adminka->UpdateBase("partners", $data, "id=" . $lastNId)) {
                        $successText ='Информация успешно добавлена';
                        Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
                    } else {
                        $errorText ='Ошибка базы данных!!!';
                    }
                } else {
                    $errorText ='Файл не может быть записан';
                }
            } else {
                $successText ='Информация успешно добавлена';
                Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
            }
        } else {
            $errorText ='Ошибка базы данных!!!';
        }
    }
}

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('formDetails', $formDetails);
