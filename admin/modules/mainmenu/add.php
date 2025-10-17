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
    'pid' => 0,
    'title' => '',
    'module' => ''
);
$moduleNames = array(
    'pages' => 'Страницы',
    'services' => 'Услуги',
    'projects'  => 'Проекты',
    'partners'  => 'Партнеры',
    'contacts'  => 'Контакты',
    'certificates'  => 'Сертификаты',
    'docs'  => 'Документы',
    'news'  => 'Новости',
    'link' => 'Ссылка',
);
$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Добавить пункт меню',
    'submitName' => 'add_mainmenu',
    'submitValue' => 'Добавить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;

    $check_data=array(
        'title',
        'module'
    );
    $title = $exe->quote_smart($_POST['title']);
    $module = $exe->quote_smart($_POST['module']);
    $cid = intval($_POST['cid']);
    $pid = intval($_POST['pid']);
    $link = $exe->quote_smart($_POST['link']);

    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Название пункта меню и минимум модуль';
    } else {
        $data=array(
            'title' => $title,
            'cid' => $cid,
            'pid' => $pid,
            'module' => $module,
            'link' => $link,
            'msort'=>'',
            'regdate'=>'NOW()',
            'active'=>'1'
        );
        if ($_adminka->InsertBase('mainmenu', $data, 1)) {
            $successText ='Информация успешно добавлена';
            Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
        } else {
            $errorText ='Ошибка базы данных!!!';
        }
    }
}

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';

$moduleSelect = '<select name="module" id="module"><option value="">Выберите модуль</option>';
foreach ($moduleNames as $moduleName => $moduleTitle) {
    $moduleSelect .= '<option value="' . $moduleName . '">' . $moduleTitle . '</option>';
}
$moduleSelect .= '</select>';
$subcatSelect = '<input type="hidden" name="pid" value="0">';
$itemSelect = '<input type="hidden" name="cid" value="0">';
$linkText = '<input type="hidden" name="link" value="">';

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('subcatSelect', $subcatSelect);
$smarty->assign('itemSelect', $itemSelect);
$smarty->assign('linkText', $linkText);
$smarty->assign('moduleSelect', $moduleSelect);
$smarty->assign('formDetails', $formDetails);
