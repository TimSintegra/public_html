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

$_val = array();
$errorText = '';
$successText = '';

if ($id) {
    $formDetails = array('formTitle' => 'Добавить дополнительные фотографии',
        'submitName' => 'add_photos',
        'submitValue' => 'Добавить');

    if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
    {
        $_val = $_POST;
        $errorType = '';
        if (is_array($_POST['ax-uploaded-files'])) {
            foreach ($_POST['ax-uploaded-files'] as $_file) {
                $realFileName = str_replace("uploads/", "", $_file);
                $dataIm=array(
                    'pid' => $id,
                    'module' => 'projects',
                    'image' => '',
                    'msort' => '0',
                    'active'=>'0'
                );
                if ($_adminka->InsertBase("media", $dataIm)) {
                    $lastMediaID = $db->id;
                } else {
                    $errorType = 'DB';
                    break;
                }
                $srcImage = _ADMIN_PATH . '/' . $_file;
                $fileInfo = pathinfo($srcImage);
                $fileIn = preg_replace('/[^a-zA-Z0-9_\.]/', '', $exe->translit($realFileName));
                $randomTitle = $exe->generatePassword(6);
                $filename = _MAIN_PATH . "/content/img/photos/" . $lastMediaID . "_" . $randomTitle . "_" . $fileIn;
                $filenameSm = _MAIN_PATH . '/content/img/photos/sm/' . $lastMediaID . "_" . $randomTitle . "_" . $fileIn;
                $dbName = $lastMediaID . "_" . $randomTitle . "_" . $fileIn;
                if ($_adminka->SaveResizeImage ($__image, $srcImage, $filename, 'width', '1600', '')) {
                    $dataIm2=array('image' => $dbName, 'active' => '1');
                    if ($_adminka->UpdateBase("media", $dataIm2, "id='" . $lastMediaID . "'")) {
                        //unlink($srcImage);
                        $errorType = 'OK';
                    } else {
                        $errorType = 'DB';
                        break;
                    }
                } else {
                    $errorType = "FILE";
                    break;
                }
            }
            switch ($errorType) {
                case 'DB':
                    $errorText = 'Ошибка Базы Данных!';
                    break;
                case 'FILE':
                    $errorText = 'Файл не может быть записан';
                    break;
                default:
                    Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
                    break;
            }
        } else {
            $errorText ='Обязательные поля для заполнения: Фотография.';
        }
    }

    $hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">'
        . '<input type="hidden" name="id" value="' . $id . '">';


    $smarty->assign('_val', $_val);
    $smarty->assign('UPLOAD_PATH', '../content/img/' . $id . '/');
    $smarty->assign('errorText', $errorText);
    $smarty->assign('successText', $successText);
    $smarty->assign('hiddenInputs', $hiddenInputs);
    $smarty->assign('formDetails', $formDetails);
} else {
    Header("Location:" . _ADMIN_URL . "/projects/");
}

