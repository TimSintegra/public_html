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
$_val=$db->getRow("select * from admins where id='".$id."'");
$_val['admin_email'] = $_val['email'];
$_val['admin_username'] = $_val['username'];
$_Val['admin_type'] = $_val['role'];

$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Изменить данные администратора',
    'submitName' => 'edit_admin',
    'submitValue' => 'Изменить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data = array(
        'admin_type',
        'admin_username',
        'admin_email'
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Тип администратора, Логин, Email';
    } else {
        $admin_type = intval($_POST['admin']);
        $admin_username=$exe->quote_smart($_POST['admin_username']);
        $admin_email=$exe->quote_smart($_POST['admin_email']);

        $data=array(
            'username'=>$admin_username,
            'email'=>$admin_email,
            'role' => $admin_type
        );
        if ($_adminka->UpdateBase("admins", $data, "id='$id'")) {
            $successText ='Информация успешно добавлена';
            Header ("Location: " . _ADMIN_URL . "/admins/");
        } else {
            $errorText ='Ошибка базы данных!!!';
        }
    }
}


$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';
$hiddenInputs .= '<input type="hidden" name="id" value="' . $id . '">';

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('formDetails', $formDetails);