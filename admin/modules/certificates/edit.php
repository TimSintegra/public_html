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
$_val=$db->getRow("select * from certificates where id='".$id."'");

$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Изменить сертификат',
    'submitName' => 'edit_slider',
    'submitValue' => 'Изменить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $title = $exe->quote_smart($_POST['title']);
    $data = array(
        'title' => $title,
    );
    if ($_adminka->UpdateBase("certificates", $data, "id=" . $id)) {
        if ($_FILES['cert']['tmp_name'])
        {
            if ($_val['image'] != '') {
                unlink(_SERVER_ROOT . "/content/img/cert/" . $_val['image']);
                unlink(_SERVER_ROOT . "/content/img/cert/sm" . $_val['image']);
            }
            $fileIn = $exe->translit($_FILES['cert']['name']);
            $_dopName = $exe->generatePassword(6);
            $_img = $exe->generatePassword(6);
            $filename = _SERVER_ROOT . "/content/img/cert/" . $id . "_" . $_img . "_" . $fileIn;
            $filename_sm = _SERVER_ROOT . "/content/img/cert/sm/" . $id . "_" . $_img . "_" . $fileIn;
            $dbName = $id . "_" . $_img . "_" . $fileIn;
            if ($_adminka->SaveResizeImage ($__image, $_FILES['cert']['tmp_name'], $filename, 'best_fit_original', '800', '800') && $_adminka->SaveResizeImage ($__image, $_FILES['cert']['tmp_name'], $filename_sm, 'best_fit', '228', '325')) {
                $data = array(
                    'image' => $dbName,
                );
                if ($_adminka->UpdateBase("certificates", $data, "id=" . $id)) {
                    $successText ='Информация успешно добавлена';
                    Header ("Location: " . _ADMIN_URL . "/certificates/");
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

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';
$hiddenInputs .= '<input type="hidden" name="id" value="' . $id . '">';


$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('formDetails', $formDetails);
