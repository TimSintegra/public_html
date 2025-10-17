<?php
/**
 * Admins activate module
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 03.04.13
 * @time 2:21
 * @version 1.0
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
$delExceptions = array();
if (isset($id) && $id != 0) {
    if (!in_array($id, $delExceptions)) {
        $_adminka->ChangeStatus('mainmenu', 'id', $id, 'deact');
        Header ("Location: " . _ADMIN_URL . "/mainmenu/");
    } else {
        Header ("Location: " . _ADMIN_URL . "/mainmenu/");
    }
} else {
    header("Location:" . _ADMIN_URL . "/");
}