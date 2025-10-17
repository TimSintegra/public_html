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
    'recDate' => date('d.m.Y H:i'),
    'main_content' => ''
);
$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Добавить новость',
    'submitName' => 'add_news',
    'submitValue' => 'Добавить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data=array(
        'title',
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Заголовок';
    } else {
        $title = $exe->quote_smart($_POST['title']);
        $main_text = $exe->quote_smart($_POST['main_content']);
        $recdate = $exe->quote_smart($_POST['recDate']);
        $recdate2 = explode(" ", $recdate);
        $recDateMySql = $exe->postDateToMysql($recdate2[0], '.', $recdate2[1] . ":00", 0, 0);
       // echo $recDateMySql;
        $url = $_adminka->generateUrl('news', mb_strtolower($title, 'UTF-8'));
        $data = array(
            'url' => $url,
            'title' => $title,
            'main_text' => $main_text,
            'regdate' => $recDateMySql,
            'active' => '1'
        );
        if ($_adminka->InsertBase("news", $data)) {
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
