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
$_val=$db->getRow("select * from news where id='".$id."'");
$_val['main_content'] = $_val['main_text'];
$_val['recDate'] = $exe->MysqlDateToText($_val['regdate'], 4);

$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Изменить новость',
    'submitName' => 'edit_news',
    'submitValue' => 'Изменить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
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
        $url = $_adminka->generateUrl('news', mb_strtolower($title, 'UTF-8'), '', 0, $_POST['url']);
        $data=array(
            'url' => $url,
            'title' => $title,
            'main_text' => $main_text,
            'regdate' => $recDateMySql,
        );
        if ($_adminka->UpdateBase("news", $data, "id=" . $id)) {
            $successText ='Информация успешно добавлена';
            Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
        } else {
            $errorText ='Ошибка базы данных!!!';
        }
    }
}


$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';
$hiddenInputs .= '<input type="hidden" name="id" value="' . $id . '">';
$hiddenInputs .= '<input type="hidden" name="url" value="' . $_val['url'] . '">';


$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('formDetails', $formDetails);
