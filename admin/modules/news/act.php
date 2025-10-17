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
$_adminka->ChangeStatus("news", 'id', $id, 'act');
Header ("Location: " . _ADMIN_URL . "/news/");
