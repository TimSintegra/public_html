<?php
/**
 * Logout Module
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 03.02.13
 * @time 1:57
 * @version 1.1
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
if(isset($_COOKIE['acookname']) && isset($_COOKIE['acookpass'])){
    setcookie("acookname", "", time()-60*15, "/");
    setcookie("acookpass", "", time()-60*15, "/");
}
if ($_user->checkLogin())
{
    unset($_SESSION['adminuser']);
    unset($_SESSION['adminpass']);
    $_SESSION = array();
    session_destroy();
    header("Location:" . _ADMIN_URL . "/");
}
