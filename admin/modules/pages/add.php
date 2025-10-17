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
    'main_content' => '',
    'stitle' => '',
    'keywords' => '',
    'description' => ''
);
$errorText = '';
$successText = '';
$dbtable = 'pagescats';
$activeCats = 1;

$formDetails = array('formTitle' => 'Добавить страницу',
    'submitName' => 'add_page',
    'submitValue' => 'Добавить страницу');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data=array(
        'cid',
        'title',
        'main_content'
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Категория, Заголовок, Основной текст';
    } else {
        $title = $exe->quote_smart($_POST['title']);
        $main_text = $exe->quote_smart($_POST['main_content']);
        $url = $_adminka->generateUrl('pages', mb_strtolower($title, 'UTF-8'));
        $cid = intval($_POST['cid']);
        $data = array(
            'url' => $url,
            'cid' => $cid,
            'title' => $title,
            'main_text' => $main_text,
            'msort' => '0',
            'regdate'=>'NOW()',
            'active'=>'1'
        );
        if ($_adminka->InsertBase("pages", $data)) {

            $stitle = $exe->quote_smart($_POST['stitle']);
            $skeywords = $exe->quote_smart($_POST['keywords']);
            $sdesc = $exe->quote_smart($_POST['description']);

            $seoData = array(
                'sec' => 'pages',
                'url' => $url,
                'title' => $stitle,
                'keywords' => $skeywords,
                'description' => $sdesc
            );
            $_adminka->InsertBase("seo", $seoData);
            $successText ='Информация успешно добавлена';
            Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
        } else {
            $errorText ='Ошибка базы данных!!!';
        }
    }
}

$categorySelect = $_forms->_selectForm (
    'cid',
    'pagescats',
    'id',
    'title',
    1,
    'Выберите категорию',
    $_val['cid'],
    'active="1"',
    'title'
);

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('parentCategory', $categorySelect);
$smarty->assign('formDetails', $formDetails);
