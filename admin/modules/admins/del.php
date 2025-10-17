<?php
/**
 * Admin delete module
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 03.04.13
 * @time 2:13
 * @version 1.1
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
$errorText = '';
$successText = '';

if ($_adminka->DelBase("admins", "id=".$id)===true) {
    $successText = 'Информация удалена.';
    Header ("Location: " . _ADMIN_URL . "/admins/");
} else {
    $errorText = 'Ошибка. Информация не удалена.';
}

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);

