<?php
/**
 * Configuration file
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 31.10.12
 * @time 8:23
 * @version 1.9
 *
 */
define('_HTTP_URL', 'http://localhost:8080');
define('_SERVER_ROOT', '/opt/lampp/htdocs/public_html');
define('_ADMIN_PATH', _SERVER_ROOT . '/admin');
define('_ADMIN_URL', '/admin');
define('_MAIN_PATH', _SERVER_ROOT);
define('_MAIN_URL', '');
define('_ADMIN_TPL_PATH', _ADMIN_PATH . '/templates/default');
define('_ADMIN_TPL_URL', _ADMIN_URL . '/templates/default');
define('_TPL_PATH', _SERVER_ROOT . '/templates/default');
define('_TPL_URL', '/templates/default');

$dbConfig['db_host']="localhost";
$dbConfig['db_user']="sintegra_site";
$dbConfig['db_pass']="rO4omaX55uFi";
$dbConfig['db_base']="sintegra_site";

$mailConfig['smptServer'] = 'smtp.rbix.ru';
$mailConfig['smtpProt'] = 25;
$mailConfig['smtpUser'] = 'sintegra@rbix.ru';
$mailConfig['smtpPass'] = '1T7p7K0v';
$mailConfig['mailFrom'] = 'mailer@rbix.ru';


$reCaptchaSettings['site_key'] = '6LfORGYUAAAAACchTJZQjsglSxeaNyPQIvOGfR6I';
$reCaptchaSettings['secret_key'] = '6LfORGYUAAAAAKzJZq7ByLmuVlbXHzVKhCDreb0k';

$secForMail = array(
    'admin' => array('admins', 'users', 'shop_orders'),
    'site' => array('faq', 'thanks', 'register', 'lc', 'question', 'contacts', 'services')
);

$SEO = array (
    'title' => 'Синтегра | Строительно-монтажные и пусконаладочные работы | Нижнекамск',
    'keywords' => 'Синтегра | Строительно-монтажные и пусконаладочные работы | Нижнекамск',
    'description' => 'Синтегра | Строительно-монтажные и пусконаладочные работы | Нижнекамск'
);

$globalSiteVars = array (
    'monthRusArray' => array (
        1=>'января',
        'февраля',
        'марта',
        'апреля',
        'мая',
        'июня',
        'июля',
        'августа',
        'сентября',
        'октября',
        'ноября',
        'декабря'
    ),
    'monthRusArrayName' =>array (
        1=>'Январь',
        'Февраль',
        'Март',
        'Апрель',
        'Май',
        'Июнь',
        'Июль',
        'Август',
        'Сентябрь',
        'Октябрь',
        'Ноябрь',
        'Декабрь'
    )
);

/*Доступы для администраторов 1-главный админ, 2- другие админы*/
$configAdminPerm = array(
    '1' => array('index', 'logout', 'settings', 'mainmenu', 'advantages', 'mainprojects', 'certificates', 'pages', 'pagescat', 'docs', 'projects', 'services', 'servicescats', 'contacts', 'news', 'partners'),
    '2' => array('index', 'logout', 'pages')
);

/* Есть ли модуль пользователей*/
$usersModule = 0;

/**
 * Далее идет блокировка человека от IE6 и выводит ему сообщение чтобы он обновил браузер
 */
$not_lte_ie6 = true;
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
if(strpos($ua,'msie') !== FALSE) {
    if(strpos($ua,'opera') == FALSE) {
        if(preg_match('/(?i)msie 6/',$ua)) $not_lte_ie6 = false;
    }
}
if (!$not_lte_ie6)
    Header("Location:./ie6/index.html");