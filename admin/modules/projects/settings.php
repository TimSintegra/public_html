<?php
/**
 * About module
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

$_val = $db->getRow("select * from project_settings where id='1' LIMIT 1");
$_val['main_content'] = $_val['main_text'];

$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Изменить информацию',
    'submitName' => 'edit_content',
    'submitValue' => 'Изменить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data=array(
        'title',
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Заголовок страницы';
    } else {
        $title = $exe->quote_smart($_POST['title']);
        $count = intval($_POST['count']);
        $main_text = $exe->quote_smart($_POST['main_content']);
        $data=array(
            'count' => $count,
            'title' => $title,
            'main_text' => $main_text,
        );
        if ($_adminka->UpdateBase("project_settings", $data, "id='1'")) {
            $successText ='Информация успешно изменена';
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
