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

$_val=$db->getRow("select * from projects where id='" . $id . "'");
$_val['title'] = htmlspecialchars($_val['title']);
$_val['main_content'] = $_val['main_text'];

$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Изменить данные объекта',
    'submitName' => 'edit_page',
    'submitValue' => 'Изменить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data=array(
        'title',
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Заголовок';
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
        $url = $_adminka->generateUrl('news', mb_strtolower($title, 'UTF-8'), '', 0, $_POST['url']);
        $data=array(
            'url' => $url,
            'title' => $title,
            'pid' => $pid,
            'short_text' => $short_text,
            'main_text' => $main_text,
            'main' => $main
        );
        if ($_adminka->UpdateBase("projects", $data, "id=" . $id)) {
            if ($_FILES['project']['tmp_name'])
            {
                $oldImage = $db->getOne("SELECT image FROM projects WHERE id='" . $id . "'");
                if ($oldImage) {
                    unlink(_SERVER_ROOT . "/content/img/photos/" . $oldImage);
                }
                $fileIn = $exe->translit($_FILES['project']['name']);
                $_img = $exe->generatePassword(6);
                $filename = _SERVER_ROOT . "/content/img/photos/main_" . $id . "_" . $_img . "_" . $fileIn;
                $dbName = "main_" . $id . "_" . $_img . "_" . $fileIn;
                if ($_adminka->SaveResizeImage ($__image, $_FILES['project']['tmp_name'], $filename, 'width', '1600', '')) {
                    $data = array(
                        'image' => $dbName,
                    );
                    if ($_adminka->UpdateBase("projects", $data, "id=" . $id)) {
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
$hiddenInputs .= '<input type="hidden" name="id" value="' . $id . '">';
$hiddenInputs .= '<input type="hidden" name="url" value="' . $_val['url'] . '">';

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('parentCategory', $categorySelect);
$smarty->assign('formDetails', $formDetails);