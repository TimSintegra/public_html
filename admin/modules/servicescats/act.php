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
        $_adminka->ChangeStatus('services', 'cid', $id, 'act');
        $_adminka->ChangeStatus("servicescats", 'id', $id, 'act');
        Header ("Location: " . _ADMIN_URL . "/servicescats/");
    } else {
        Header ("Location: " . _ADMIN_URL . "/servicescats/");
    }
} else {
    header("Location:" . _ADMIN_URL . "/");
}