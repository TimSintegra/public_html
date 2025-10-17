<?php
/**
 * Index show module
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 03.04.13
 * @time 0:31
 * @version 1.1
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
if ($mainAdminPerm['role'] == 1) {
    $indexModule = 'settings';
} else {
    $indexModule = 'settings';
}
Header("Location: " . _ADMIN_URL . "/" . $indexModule . "/");