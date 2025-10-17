<?php
/**
 * Основной файл adminki
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 15.03.13
 * @time 7:07
 * @version 2.01
 *
 */
//error_reporting(E_ALL);
session_start();
ini_set('display_errors', true);
ini_set('error_reporting',  E_ALL);
header('Content-Type: text/html; charset=UTF-8');

//Include all needed files
require_once('../libs/config.php');
$admin = 1;
/*DB Connect*/
require (_SERVER_ROOT . "/libs/newdb.class.php");
$db = new DB();

/* Smarty Configuration*/
require_once (_SERVER_ROOT . "/libs/smartyConfig.php");

/*Execution AND MyShow classes*/
require_once (_SERVER_ROOT . "/libs/execute.class.php");
require_once (_SERVER_ROOT . '/libs/useradmin.class.php');
require_once (_SERVER_ROOT . '/libs/newimage.class.php');
require_once (_SERVER_ROOT . '/libs/project.class.php');
require_once (_SERVER_ROOT . '/libs/adminka.class.php');
$exe= new My_execute();
$_user = new User();
$__image = new SimpleImage();
$myProject = new project();
$_adminka = new Adminka();

$smarty->assign('ADMIN_PATH', _ADMIN_PATH);
$smarty->assign('ADMIN_URL', _ADMIN_URL);
$smarty->assign('TPL_PATH', _ADMIN_TPL_PATH);
$smarty->assign('TPL_URL', _ADMIN_TPL_URL);

$sec = $exe->getVar("sec", "char", "index");
$sec = preg_replace('/[^a-z0-9]/si', '', $sec);
$act = $exe->getVar("act", "char", "show");

switch($sec) {
    case 'ext':
        $id = $exe->getVar("id", "char");
        $subid = $exe->getVar('subid', "char");
        $page = $exe->getVar("page", "char");
        break;
    case 'pages':
        $id = $exe->getVar("id", "char");
        $subid = $exe->getVar('subid', "char");
        $page = $exe->getVar("page", "char");
        break;
    case 'mainmenu':
        $id = $exe->getVar("id", "char");
        $subid = $exe->getVar('subid', "char");
        $page = $exe->getVar("page", "char");
        break;
    case 'certificates':
        $id = $exe->getVar("id", "char");
        $subid = $exe->getVar('subid', "char");
        $page = $exe->getVar("page", "char");
        break;
    case 'media':
        $id = $exe->getVar("id", "char");
        $subid = $exe->getVar('subid', "char");
        $page = $exe->getVar("page", "char");
        break;
    default:
        $id = $exe->getVar("id", "int");
        $subid = $exe->getVar('subid', "int");
        $page = $exe->getVar("page", "int");
        $val6 = $exe->getVar("val6", "int");
        break;
}

$smarty->assign('MODULE_PATH', $sec);
$smarty->assign('MODULE_ACT', $act);
$smarty->assign('_ID', $id);
$smarty->assign('_SUBID', $subid);
$smarty->assign('leftBlocks', 0);

$loginError = '';

if ($sec == 'login') {
    if (isset($_POST['sublogin'])) {
        if (!$_POST['username'] || !$_POST['password']) {
            $loginError = 'Введите логин и пароль';
        } else {
            $md5pass = md5($_POST['password']);
            $result = $_user->confirmUser($_POST['username'], $md5pass);
            if ($result == 1) {
                $loginError = 'В базе нет такого пользователя, либо аккаунт заблокирован';
            } elseif ($result == 2) {
                $loginError = 'Пароль неверный';
            } else {
                $username = $exe->quote_smart($_POST['username']);
                $_SESSION['adminuser'] = $username;
                $_SESSION['adminpass'] = $md5pass;
                $db->exec("update admins set lastip='" . $_SERVER['REMOTE_ADDR']
                    . "' where username='$username'");
                if (isset($_POST['remember'])) {
                    setcookie("acookname", $_SESSION['adminuser'], time()+60*15, "/");
                    setcookie("acookpass", $_SESSION['adminpass'], time()+60*15, "/");
                }
                header("Location:" . _ADMIN_URL . "/");
            }
        }
    }
}
$smarty->assign('errorText', $loginError);
$smarty->assign('successText', '');

/*
echo '<pre>';
var_dump($_POST);
var_dump($_GET);
echo '</pre>';
*/

if ($sec != '404') {
    if (!$_user->checkLogin()) {
        $smarty->display(_ADMIN_TPL_PATH . '/login.tpl');
    } else {
        if ($sec == 'ext') {
            $extModuleTpl = _ADMIN_TPL_PATH . "/modules/" . $sec . "/" . $act . "/show.tpl";
            include_once(_ADMIN_PATH . "/ext.php");
            $smarty->display($extModuleTpl);
        } elseif (is_file(_ADMIN_PATH . "/modules/" . $sec . "/" . $act . ".php")
            && is_file(_ADMIN_TPL_PATH . "/modules/" . $sec . "/" . $act . ".tpl")) {

            if (is_file(_ADMIN_TPL_PATH . "/blocks/" . $sec . "/" . $act . ".tpl")) {
                $smarty->assign('leftBlocks', 2);
                if (is_file(_ADMIN_PATH . "/modules/" . $sec . "/blocks.php")) {
                    include_once(_ADMIN_PATH . "/modules/" . $sec . "/blocks.php");
                }
            } else {
                if (is_file(_ADMIN_TPL_PATH . "/blocks/" . $sec . "/show.tpl")) {
                    $smarty->assign('leftBlocks', 1);
                    if (is_file(_ADMIN_PATH . "/modules/" . $sec . "/blocks.php")) {
                        include_once(_ADMIN_PATH . "/modules/" . $sec . "/blocks.php");
                    }
                }
            }
            require_once (_SERVER_ROOT . '/libs/adminka.class.php');
            require_once (_SERVER_ROOT . '/libs/forms.class.php');
            require_once (_SERVER_ROOT . '/libs/adminproject.class.php');
            $_adminka = new Adminka();
            $myProject = new adminproject();
            $_forms = new Forms();

            $mainAdminPerm = $_user->getRole($_SESSION['adminuser']);

            if (in_array($sec, $configAdminPerm[$mainAdminPerm['role']])) {
                $adminMenu = $myProject->setMenuArray($mainAdminPerm['role']);
                $smarty->assign('adminMenu', $adminMenu);

                $smarty->assign('loggedAdmin', $_SESSION['adminuser']);

                if (in_array($sec, $secForMail['admin'])) {
                    require_once (_SERVER_ROOT . '/libs/swift/swift_required.php');
                    $transport = Swift_SmtpTransport::newInstance(
                        $mailConfig['smptServer'],
                        $mailConfig['smtpProt']
                    );
                    $transport->setUsername($mailConfig['smtpUser']);
                    $transport->setPassword($mailConfig['smtpPass']);
                    $mailer = Swift_Mailer::newInstance($transport);
                    $message = Swift_Message::newInstance();
                }
                include_once(_ADMIN_PATH . "/modules/" . $sec . "/" . $act . ".php");
                $smarty->display(_ADMIN_TPL_PATH . '/layout.tpl');
            } else {
                $smarty->display(_ADMIN_TPL_PATH . '/404.tpl');
            }
        } else {
            $smarty->display(_ADMIN_TPL_PATH . '/404.tpl');
        }
    }
} else {
    $smarty->display(_ADMIN_TPL_PATH . '/404.tpl');
}
?>
