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
$_adminka->DelBase("pages", "id=" . $id);
if ($subid) {
    Header ("Location: " . _ADMIN_URL . "/pages/show/" . $subid . "/");
} else {
    Header ("Location: " . _ADMIN_URL . "/pages/");
}

