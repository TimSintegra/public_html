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
if ($id != '') {
    $_image = $db->getOne("SELECT image FROM certificates WHERE id='" . $id . "'");
    if ($_adminka->DelBase("certificates", "id=".$id)===true) {
        if ($_image != '' && is_file(_SERVER_ROOT . "/content/img/cert/" . $_image)) {
            unlink(_SERVER_ROOT . "/content/img/cert/" . $_image);
            unlink(_SERVER_ROOT . "/content/img/cert/sm/" . $_image);
        }
        Header ("Location: " . _ADMIN_URL . "/certificates/");
    } else {
        header("Location:" . _ADMIN_URL . "/");
    }
} else {
    header("Location:" . _ADMIN_URL . "/");
}

