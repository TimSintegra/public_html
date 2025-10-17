<?php
/**
 * Smarty Configuration
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 15.06.13
 * @time 7:46
 * @version 1.0
 *
 */
if ($admin == 1) {
    $_path = _ADMIN_PATH . '/';
} else {
    $_path = _MAIN_PATH . '/';
}
require_once(_MAIN_PATH . '/libs/smarty/libs/Smarty.class.php');
$smarty = new Smarty\Smarty();
$smarty->setTemplateDir($_path . 'templates/');
$smarty->setCompileDir($_path . 'templates_c/');
$smarty->setConfigDir($_path . 'configs/');
$smarty->setCacheDir($_path . 'cache/');
