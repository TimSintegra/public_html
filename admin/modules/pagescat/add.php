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
    'main_content' => '',
);
$errorText = '';
$successText = '';
$dbtable = 'pagescats';

$formDetails = array('formTitle' => 'Добавить категорию',
    'submitName' => 'add_cat',
    'submitValue' => 'Добавить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{

    $_val = $_POST;
    $check_data=array(
        'title',
    );
    $title=$exe->quote_smart($_POST['title']);
    if ($_adminka->ControlForm($_POST, $check_data)===true)
    {
        $errorText ='Обязательные поля для заполнения: Название категории';
    }
    else
    {
        $url = $_adminka->generateUrl($dbtable, mb_strtolower($title, 'UTF-8'));
        $main_text = $exe->quote_smart($_POST['main_content']);
        $data=array(
            'title' => $title,
            'url' => $url,
            'main_text' => $main_text,
            'msort' => '0',
            'regdate'=>'NOW()',
            'active'=>'1'
        );
        if ($_adminka->InsertBase($dbtable, $data)) {
            $successText ='Информация успешно добавлена';
            Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
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
