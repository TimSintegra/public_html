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
$_adminka->ChangeStatus("certificates", 'id', $id, 'deact');
Header ("Location: " . _ADMIN_URL . "/certificates/");
