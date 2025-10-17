<?php
/**
 * Expert delete module
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
if ($id != '') {
    $_image = $db->getOne("SELECT `value` FROM settings WHERE setname='" . $id . "'");
    if ($_image && is_file(_SERVER_ROOT . "/content/img/main/" . $_image)) {
        unlink(_SERVER_ROOT . "/content/img/main/" . $_image);
    }
    $db->exec("UPDATE settings SET `value`='' WHERE setname='" . $id . "'");
    Header ("Location: " . _ADMIN_URL . "/settings/");
} else {
    header("Location:" . _ADMIN_URL . "/");
}

