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
session_start();

header('Content-Type: text/html; charset=UTF-8');
//Include all needed files
require_once('libs/config.php');
$admin = 0;
/*DB Connect*/
require (_MAIN_PATH . "/libs/newdb.class.php");
$db = new DB();

/* Smarty Configuration*/
require_once (_MAIN_PATH . "/libs/smartyConfig.php");

/*Execution AND MyShow classes*/
require_once (_MAIN_PATH . "/libs/execute.class.php");
require_once (_MAIN_PATH . '/libs/user.class.php');
require_once (_MAIN_PATH . '/libs/newimage.class.php');
require_once (_MAIN_PATH . '/libs/project.class.php');
$exe= new My_execute();
$_user = new User();
$__image = new SimpleImage();
$myProject = new project();


/*Config For Smarty Variables*/
$smarty->assign('ADMIN_PATH', _ADMIN_PATH);
$smarty->assign('ADMIN_URL', _ADMIN_URL);
$smarty->assign('MAIN_PATH', _MAIN_PATH);
$smarty->assign('MAIN_URL', _MAIN_URL);
$smarty->assign('TPL_PATH', _TPL_PATH);
$smarty->assign('TPL_URL', _TPL_URL);

$sec = $exe->getVar("sec", "char", "index");
$sec = preg_replace('/[^a-z0-9]/si', '', $sec);
$act = $exe->getVar("act", "char");

/*VARS*/
$val1 = $exe->getVar("val1", "char");
$val2 = $exe->getVar("val2", "char");
$val3 = $exe->getVar("val3", "char");

if ($usersModule == 1){
    $loginSuccess = 0;
    $loginErrorText = '';
    if ($_user->checkLogin()) {
        $loginSuccess = 1;
        $loginErrorText = '';
    }
}

if (!isset($_SESSION['secret_basket_key'])) {
    $secret_basket_key = $exe->generatePassword(255);
    $_SESSION['secret_basket_key'] = $secret_basket_key;
}

$site_key = $reCaptchaSettings['site_key'];
$smarty->assign('siteKey', $site_key);

if ($sec == 'index') {
    $captcha_str = strtoupper($exe->generatePassword(6, 'captcha'));
    $_SESSION['mycaptcha_id'] = $captcha_str;
}

$setAct = $exe->setUrl($sec, $act);

if ($setAct['act'] == 'error') {
    $sec = '404';
} else {
    $smarty->assign('MODULE_PATH', $sec);
    $smarty->assign('MODULE_ACT', $setAct['act']);

    $phpModuleFile = _MAIN_PATH . "/modules/" . $sec . "/" . $setAct['act'] . ".php";
    $tplModuleFile = _TPL_PATH . "/modules/" . $sec . "/" . $setAct['act'] . ".tpl";
    if ($setAct['id'] == 0 && $val1 != "") {
        $id = $val1;
    } else {
        $id = $setAct['id'];
    }

    if (is_file(_MAIN_PATH . '/modules/index/vars.php')) {
        include_once(_MAIN_PATH . '/modules/index/vars.php');
    }
}

/*
echo '<pre>';
echo $phpModuleFile;
echo $tplModuleFile;
var_dump($_POST);
var_dump($_GET);
echo '</pre>';
*/

/*SEO Vars*/

$SEO = $exe->getSEO($sec, $act, $id);
$smarty->assign('SEO', $SEO);

// Секции, которые подключаются на главной (их CSS/JS/данные живут в своих модулях, на index только подключаем)
$indexSectionModules = array('certificates', 'partners', 'projects', 'contacts');
$smarty->assign('INDEX_SECTION_MODULES', $indexSectionModules);

if (!isset($_POST['q'])) {
    $smarty->assign('query', '');
}

if ($sec != '404') {

    if ($sec == 'ext') {

        $extModuleTpl = _TPL_PATH . "/modules/ext/" . $act . "/show.tpl";
        include_once(_MAIN_PATH . "/ext.php");

        if ($usersModule == 1) {
            $smarty->assign('loginSuccess', $loginSuccess);
            $smarty->assign('errorText', $loginErrorText);
            if ($loginSuccess == 1) {
                $smarty->assign('ufio', $_SESSION['ufio']);
            }
        }

        $smarty->display($extModuleTpl);

    } elseif ($sec == 'd2a1bbe58886') {

        $extModuleTpl = _TPL_PATH . "/modules/" . $sec . "/show.tpl";

        $smarty->display($extModuleTpl);

    } elseif (is_file($phpModuleFile) && is_file($tplModuleFile)) {

        //Для отправки почты
        if (in_array($sec, $secForMail['site'])) {
            require_once (_MAIN_PATH . '/libs/swift/swift_required.php');
        }

        include_once($phpModuleFile);

        if ($usersModule == 1) {
            $smarty->assign('loginSuccess', $loginSuccess);
            $smarty->assign('errorText', $loginErrorText);
            if ($loginSuccess == 1) {
                $smarty->assign('ufio', $_SESSION['ufio']);
            }
        }

        $smarty->display(_TPL_PATH . '/layout.tpl');

    } else {
        $smarty->display(_TPL_PATH . '/404.tpl');
    }
} else {
    $smarty->display(_TPL_PATH . '/404.tpl');
}
?>
