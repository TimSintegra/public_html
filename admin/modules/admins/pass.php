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
$errorText = '';
$successText = '';
$formDetails = array('formTitle' => 'Сгенерировать новый пароль администратора',
    'submitName' => 'pass_admin',
    'submitValue' => 'Сгенерировать');
if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $password = $exe->generatePassword(8);
    $data=array('password'=>md5($password));
    $admin_info = $db->getRow("SELECT username, email FROM admins WHERE id='" . $id . "'");
    if ($_adminka->UpdateBase("admins", $data, "id=" . $id)) {
        $messageToSend = "Уважаемый пользователь! \n\nВаши данные для входа в административный раздел\n"
            . "Логин: " . $admin_info['username'] . "\nПароль: " . $password . "\n\nС наилучшими пожеланиями.";
        $subjectSend = "Данные административного раздела";
        $mailFrom = array($mailConfig['mailFrom']);
        $mailTo = array($admin_info['email']);
        $_adminka->_sendMail($messageToSend, $subjectSend, $mailFrom, $mailTo);
        $successText ='Пароль успешно изменен';
        Header ("Location: " . _ADMIN_URL . "/admins/");
    } else {
        $errorText ='Ошибка базы данных!!!';
    }
}

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';
$hiddenInputs .= '<input type="hidden" name="id" value="' . $id . '">';

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);

$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('formDetails', $formDetails);
