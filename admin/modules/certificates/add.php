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
    'title' => ''
);
$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Добавить сертификат',
    'submitName' => 'add_slider',
    'submitValue' => 'Добавить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    if (!$_FILES['cert']['tmp_name']) {
        $errorText ='Обязательные поля для заполнения: Изображение';
    } else {
        $title = $exe->quote_smart($_POST['title']);
        $data=array(
            'title' => $title,
            'image' => '',
            'msort' => '0',
            'regdate' => 'NOW()',
            'active' => '1'
        );
        if ($_adminka->InsertBase("certificates", $data)) {
            $lastNId = $db->id;
            if ($_FILES['cert']['tmp_name'])
            {
                $fileIn = $exe->translit($_FILES['cert']['name']);
                $_dopName = $exe->generatePassword(6);
                $_img = $exe->generatePassword(6);
                $filename = _SERVER_ROOT . "/content/img/cert/" . $lastNId . "_" . $_img . "_" . $fileIn;
                $filename_sm = _SERVER_ROOT . "/content/img/cert/sm/" . $lastNId . "_" . $_img . "_" . $fileIn;
                $dbName = $lastNId . "_" . $_img . "_" . $fileIn;
                if ($_adminka->SaveResizeImage ($__image, $_FILES['cert']['tmp_name'], $filename, 'best_fit_original', '800', '800') && $_adminka->SaveResizeImage ($__image, $_FILES['cert']['tmp_name'], $filename_sm, 'best_fit', '228', '325')) {
                    $data = array(
                        'image' => $dbName,
                    );
                    if ($_adminka->UpdateBase("certificates", $data, "id=" . $lastNId)) {
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
