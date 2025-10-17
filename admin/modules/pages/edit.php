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
$_val=$db->getRow("select * from pages where id='" . $id . "'");
$_val['title'] = htmlspecialchars($_val['title']);
$_val['main_content'] = $_val['main_text'];
$seo = $db->getRow("SELECT *FROM seo WHERE sec='pages' AND url='" . $_val['url'] . "'");
if ($seo) {
    $_val['stitle'] = $seo['title'];
    $_val['keywords'] = $seo['keywords'];
    $_val['description'] = $seo['description'];
    $_val['seoid'] = $seo['id'];
} else {
    $db->exec("INSERT INTO seo SET sec='pages', url='" . $_val['url'] . "'");
    $lastSeoId = $db->id;
    $_val['stitle'] = '';
    $_val['keywords'] = '';
    $_val['description'] = '';
    $_val['seoid'] = $lastSeoId;
}

$errorText = '';
$successText = '';
$dbtable = 'pagescats';
$activeCats = 1;

$formDetails = array('formTitle' => 'Изменить данные страницы',
    'submitName' => 'edit_page',
    'submitValue' => 'Изменить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data = array(
        'cid',
        'title',
        'main_content'
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Категория, Заголовок, Основной текст';
    } else {
        $title = $exe->quote_smart($_POST['title']);
        $main_text = $exe->quote_smart($_POST['main_content']);
        $url = $_adminka->generateUrl('pages', mb_strtolower($title, 'UTF-8'), '', 0, $_POST['url']);
        $cid = intval($_POST['cid']);
        $data=array(
            'cid' => $cid,
            'url' => $url,
            'title' => $title,
            'main_text' => $main_text
        );
        if ($_adminka->UpdateBase("pages", $data, "id=" . $id)) {

            $stitle = $exe->quote_smart($_POST['stitle']);
            $skeywords = $exe->quote_smart($_POST['keywords']);
            $sdesc = $exe->quote_smart($_POST['description']);
            $seoid = intval($_POST['seoid']);

            $seoData = array(
                'url' => $url,
                'title' => $stitle,
                'keywords' => $skeywords,
                'description' => $sdesc
            );
            $_adminka->UpdateBase("seo", $seoData, "id=" . $seoid);

            $successText ='Информация успешно исправлена';
            if ($subid) {
                Header ("Location: " . _ADMIN_URL . "/pages/show/" . $subid . "/");
            } else {
                Header ("Location: " . _ADMIN_URL . "/pages/");
            }
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
    'msort'
);

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';
$hiddenInputs .= '<input type="hidden" name="id" value="' . $id . '">'
    . '<input type="hidden" name="url" value="' . $_val['url'] . '">'
    . '<input type="hidden" name="seoid" value="' . $_val['seoid'] . '">';
if ($subid) {
    $hiddenInputs .= '<input type="hidden" name="subid" value="' . $subid . '">';
}

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('parentCategory', $categorySelect);
$smarty->assign('formDetails', $formDetails);