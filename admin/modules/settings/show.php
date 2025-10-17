<?php
/**
 * Settings module. This is main settings module. It is in 0.1 version and can be changed
 *
 * TODO: module settings must be in db
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 01.10.13
 * @time 19:51
 * @project ColibrixCMS
 * @version 0.1
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Изменить информацию',
    'submitName' => 'edit_content',
    'submitValue' => 'Изменить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $check_data=array(
        'tel',
        'main_email'
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Телефон, Основная почта';
    } else {
        foreach($_POST as $key => $value) {
            if (preg_match('/^hidden_/', $key)) {
                if (isset($_POST[$value]) && $_POST[$value] == '1') {
                    $db->exec("UPDATE settings SET `value`='1' WHERE setname='" . $value . "'");
                } else {
                    $db->exec("UPDATE settings SET `value`='0' WHERE setname='" . $value . "'");
                }
            } elseif (preg_match('/^image_/', $key)) {
                if ($_FILES[$value]['tmp_name'])
                {
                    $old_image = $db->getOne("SELECT `value` FROM settings WHERE setname='" . $value . "'");
                    if ($old_image && is_file(_SERVER_ROOT . "/content/img/main/" . $old_image)) {
                        unlink(_SERVER_ROOT . "/content/img/main/" . $old_image);
                    }
                    if ($value == 'main_image') {
                        $resizeType = 'best_fit';
                        $width = '1920';
                        $height = '787';
                    } elseif ($value == 'header_image') {
                        $resizeType = 'best_fit';
                        $width = '1920';
                        $height = '429';
                    } else {
                        $resizeType = 'best_fit';
                        $width = '65';
                        $height = '62';
                    }
                    $fileIn = $exe->translit($_FILES[$value]['name']);
                    $_dopName = $exe->generatePassword(6);
                    $_img = $exe->generatePassword(6);
                    $filename = _SERVER_ROOT . "/content/img/main/" . $value . "_" . $_img . "_" . $_dopName . "_" . $fileIn;
                    $dbName = $value . "_" . $_img . "_" . $_dopName . "_" . $fileIn;
                    if ($_adminka->SaveResizeImage ($__image, $_FILES[$value]['tmp_name'], $filename, $resizeType, $width, $height)) {
                        $query = "UPDATE settings SET `value`='" . $dbName . "' WHERE setname='" . $value . "'";
                        $db->exec($query);
                    }
                }
            } else {
                $value = $exe->quote_smart($value);
                $key = $exe->quote_smart($key);
                $db->exec("UPDATE settings SET `value`='" . $value . "' WHERE setname='" . $key . "'");
            }
        }
        $stitle = $exe->quote_smart($_POST['title']);
        $skeywords = $exe->quote_smart($_POST['keywords']);
        $sdesc = $exe->quote_smart($_POST['description']);

        $db->exec("UPDATE seo SET title='" . $stitle . "', keywords='" . $skeywords . "', description='" . $sdesc
            . "' WHERE sec='index'");
        $successText ='Информация успешно изменена';
    }
}

$seo = $db->getRow("SELECT * FROM seo WHERE sec='index'");
if ($seo) {
    foreach($seo as $seoKey=>$seoValue) {
        $seo[$seoKey] = htmlspecialchars($seoValue);
    }
}

$_sets = $db->getAll("select * from settings order by id");
$_val = array();
if ($_sets) {
    foreach ($_sets as $setVal) {
        $_val[$setVal['id']] = array (
            'setname' => $setVal['setname'],
            'setname_title' => $setVal['setname_title'],
            'setvalue' => $setVal['value'],
            'settype' => $setVal['type'],
        );
        if ($setVal['type'] == 'select') {
            $fOptions = explode(",", $setVal['type2']);
            foreach ($fOptions as $oneOption) {
                $sOptions = explode("|", $oneOption);
                if ($sOptions[0] == $setVal['value']) {
                    $selected = 'SELECTED';
                } else {
                    $selected = '';
                }
                $_val[$setVal['id']]['options'][] = array(
                    'value' => $sOptions[0],
                    'title' => $sOptions[1],
                    'selected' => $selected
                );
            }
        }
    }
}
$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';

$smarty->assign('_val', $_val);

$smarty->assign('seo', $seo);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('formDetails', $formDetails);
