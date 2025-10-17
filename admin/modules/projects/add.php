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
    'pid' => 0,
    'main' => '0',
    'main_content' => '',
    'short_text' => ''
);
$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Добавить проект',
    'submitName' => 'add_product',
    'submitValue' => 'Добавить объект');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data=array(
        'title',
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Название';
    } else {
        if (isset($_POST['main']) && $_POST['main'] == '1') {
            $main = 1;
        } else {
            $main = 0;
        }
        $title = $exe->quote_smart($_POST['title']);
        $main_text = $exe->quote_smart($_POST['main_content']);
        $short_text = $exe->quote_smart($_POST['short_text']);
        $pid = intval($_POST['pid']);
        $url = $_adminka->generateUrl('news', mb_strtolower($title, 'UTF-8'));

        $data = array(
            'url' => $url,
            'title' => $title,
            'pid' => $pid,
            'image' => '',
            'short_text' => $short_text,
            'main_text' => $main_text,
            'main' => $main,
            'msort' => '0',
            'regdate'=>'NOW()',
            'active'=>'1'
        );
        if ($_adminka->InsertBase("projects", $data)) {
            $lastNId = $db->id;
            if ($_FILES['project']['tmp_name']) {
                $fileIn = $exe->translit($_FILES['project']['name']);
                $_img = $exe->generatePassword(6);
                $filename = _SERVER_ROOT . "/content/img/photos/main_" . $lastNId . "_" . $_img . "_" . $fileIn;
                $dbName = "main_" . $lastNId . "_" . $_img . "_" . $fileIn;
                if ($_adminka->SaveResizeImage ($__image, $_FILES['project']['tmp_name'], $filename, 'width', '1600', '')) {
                    $data = array(
                        'image' => $dbName,
                    );
                    if ($_adminka->UpdateBase("projects", $data, "id=" . $lastNId)) {
                        $successText ='Информация успешно добавлена';
                    } else {
                        $errorText ='Ошибка базы данных!!!';
                    }
                } else {
                    $errorText ='Файл не может быть записан';
                }
            } else {
                $successText = 'Информация успешно добавлена';
            }
            if (is_array($_POST['ax-uploaded-files'])) {
                foreach ($_POST['ax-uploaded-files'] as $_file) {
                    $dataImage = array(
                        'pid' => $lastNId,
                        'module' => 'projects',
                        'image' => '',
                        'msort' => '0',
                        'active'=>'0'
                    );
                    if ($_adminka->InsertBase("media", $dataImage)) {
                        $lastMediaID = $db->id;
                        $srcImage = _ADMIN_PATH . '/' . $_file;
                        $fileInfo = pathinfo($srcImage);
                        $fileIn = preg_replace('/[^a-zA-Z0-9_\.]/', '', $exe->translit($fileInfo['basename']));
                        $randomTitle = $exe->generatePassword(6);
                        $filename = _SERVER_ROOT . "/content/img/photos/" . $lastMediaID . "_" . $randomTitle . "_" . $fileIn;
                        $dbName = $lastMediaID . "_" . $randomTitle . "_" . $fileIn;
                        if ($_adminka->SaveResizeImage ($__image, $srcImage, $filename, 'width', '1600', '')) {
                            $data = array('image' => $dbName, 'active' => '1');
                            if ($_adminka->UpdateBase("media", $data, "id='" . $lastMediaID . "'")) {
                                unlink($srcImage);
                                $errorType = 'OK';
                            } else {
                                $errorType = 'DB';
                                break;
                            }
                        } else {
                            $errorType = "FILE";
                            break;
                        }
                    } else {
                        $errorType = 'DB';
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
                }
            }
            $successText ='Информация успешно добавлена';
            Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
        } else {
            $errorText ='Ошибка базы данных!!!';
        }
    }
}

$categorySelect = $_forms->_selectForm (
    'pid',
    'partners',
    'id',
    'title',
    1,
    'Выберите партнера',
    $_val['pid'],
    'active="1"',
    'msort'
);

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('parentCategory', $categorySelect);
$smarty->assign('formDetails', $formDetails);

