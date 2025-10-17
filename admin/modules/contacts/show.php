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

$_val = $db->getRow("select * from contacts where id='1' LIMIT 1");


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
        'tel'
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Заголовок и телефон';
    } else {
        $title = $exe->quote_smart($_POST['title']);
        $title2 = $exe->quote_smart($_POST['title2']);
        $tel = $exe->quote_smart($_POST['tel']);
        $mail = $exe->quote_smart($_POST['mail']);
        $address = $exe->quote_smart($_POST['address']);
        $shema = $exe->quote_smart($_POST['shema']);
        $data=array(
            'title' => $title,
            'title2' => $title2,
            'tel' => $tel,
            'mail' => $mail,
            'address' => $address,
            'shema' => $shema
        );
        if ($_adminka->UpdateBase("contacts", $data, "id='1'")) {
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
