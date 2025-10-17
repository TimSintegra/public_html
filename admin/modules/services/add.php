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
    'cid' => 0,
    'title' => '',
    'main' => '0',
    'main_content' => '',
    'stitle' => '',
    'keywords' => '',
    'description' => ''
);
$errorText = '';
$successText = '';
$dbtable = 'servicescats';
$activeCats = 1;

$formDetails = array('formTitle' => 'Добавить услугу',
    'submitName' => 'add_page',
    'submitValue' => 'Добавить услугу');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data=array(
        'cid',
        'title',
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Категория, Заголовок';
    } else {
        if (isset($_POST['main']) && $_POST['main'] == '1') {
            $main = 1;
        } else {
            $main = 0;
        }
        $title = $exe->quote_smart($_POST['title']);
        $main_text = $exe->quote_smart($_POST['main_content']);
        $url = $_adminka->generateUrl('services', mb_strtolower($title, 'UTF-8'));
        $cid = intval($_POST['cid']);
        $data = array(
            'url' => $url,
            'cid' => $cid,
            'title' => $title,
            'image' => '',
            'main_text' => $main_text,
            'main' => $main,
            'msort' => '0',
            'regdate'=>'NOW()',
            'active'=>'1'
        );
        if ($_adminka->InsertBase("services", $data)) {
            $lastNId = $db->id;

            $stitle = $exe->quote_smart($_POST['stitle']);
            $skeywords = $exe->quote_smart($_POST['keywords']);
            $sdesc = $exe->quote_smart($_POST['description']);

            $seoData = array(
                'sec' => 'services',
                'url' => $url,
                'title' => $stitle,
                'keywords' => $skeywords,
                'description' => $sdesc
            );
            $_adminka->InsertBase("seo", $seoData);
            if ($_FILES['service']['tmp_name'])
            {
                $fileIn = $exe->translit($_FILES['service']['name']);
                $_img = $exe->generatePassword(6);
                $filename = _SERVER_ROOT . "/content/img/pages/" . $lastNId . "_" . $_img . "_" . $fileIn;
                $dbName = $lastNId . "_" . $_img . "_" . $fileIn;
                if ($_adminka->SaveResizeImage ($__image, $_FILES['service']['tmp_name'], $filename, 'best_fit', '400', '300')) {
                    $data = array(
                        'image' => $dbName,
                    );
                    if ($_adminka->UpdateBase("services", $data, "id=" . $lastNId)) {
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
    'cid',
    'servicescats',
    'id',
    'title',
    1,
    'Выберите категорию',
    $_val['cid'],
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
