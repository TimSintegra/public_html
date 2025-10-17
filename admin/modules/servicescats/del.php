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
$delExceptions = array();
if (isset($id) && $id != 0) {
    if (!in_array($id, $delExceptions)) {
        if ($_adminka->DelBase("services", "cid=" . $id)===true
            && $_adminka->DelBase("servicescats", "id=" . $id)===true) {
            $successText = 'Информация удалена.';
            Header ("Location: " . _ADMIN_URL . "/servicescats/");
        } else {
            Header ("Location: " . _ADMIN_URL . "/servicescats/");
        }
    } else {
        Header ("Location: " . _ADMIN_URL . "/servicescats/");
    }
} else {
    header("Location:" . _ADMIN_URL . "/");
}

