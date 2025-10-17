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
    'admin_type' => 0,
    'admin_username' => '',
    'admin_email' => '',
);
$errorText = '';
$successText = '';
$formDetails = array('formTitle' => 'Добавить администратора',
    'submitName' => 'add_admin',
    'submitValue' => 'Добавить администратора');
if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data = array(
        'admin_type',
        'admin_username',
        'admin_email'
    );
    if ($_adminka->ControlForm($_POST, $check_data)===true)
    {
        $errorText ='Обязательные поля для заполнения: Тип администратора, Логин, Email';
    }
    else
    {
        $admin_type = intval($_POST['admin_type']);
        $admin_username=$exe->quote_smart($_POST['admin_username']);
        $check_username = $db->getOne("SELECT username FROM admins WHERE username='". $admin_username ."'");
        if (!$check_username) {

            $admin_email=$exe->quote_smart($_POST['admin_email']);
            $password = $exe->generatePassword(8);
            $data=array(
                'username'=>$admin_username,
                'password'=>md5($password),
                'email'=>$admin_email,
                'lastlogin'=>'NOW()',
                'lastip'=>'',
                'work_city' => '1',
                'role'=>$admin_type,
                'eid'=>'0',
                'active'=>'1'
            );
            if ($_adminka->InsertBase("admins", $data)) {
                $messageToSend = "Уважаемый пользователь! \n\nВаши данные для входа в административный раздел\n"
                    . "Логин: " . $admin_username . "\nПароль: " . $password . "\n\n"
                    . "Это письмо было отправлено автоматически. Пожалуйста не отвечайте на него\n\n"
                    . "С наилучшими пожеланиями.";
                $subjectSend = "Данные административного раздела";
                $mailFrom = array($mailConfig['mailFrom']);
                $mailTo = array($admin_email);
                $_adminka->_sendMail($messageToSend, $subjectSend, $mailFrom, $mailTo);
                $successText ='Информация успешно добавлена';
                Header ("Location: " . _ADMIN_URL . "/admins/");
            } else {
                $errorText ='Ошибка базы данных!!!';
            }
        } else {
            $errorText ='Такой логин уже существует в базе!';
        }
    }
}

$roleSelect = '<select name="admin_type">';
$roleSelect .= '<option value="0">Выберите тип администратора</option>';
if ($_val['admin_type'] == '2') {
    $roleSelect .= '<option value="1">Администратор</option>';
    $roleSelect .= '<option value="2" SELECTED>Модератор</option>';
} elseif ($_val['admin_type'] == '1') {
    $roleSelect .= '<option value="1" SELECTED>Администратор</option>';
    $roleSelect .= '<option value="2">Модератор</option>';
} else {
    $roleSelect .= '<option value="1">Администратор</option>';
    $roleSelect .= '<option value="2">Модератор</option>';
}
$roleSelect .= '</select>';

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('roleSelect', $roleSelect);
$smarty->assign('formDetails', $formDetails);