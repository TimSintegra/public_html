<?php
/**
 * Главная страница: данные только для блоков index (о компании, вехи, география, статистика)
 * и подключение секций — каждая секция описывает себя в своём модуле (certificates, partners, projects, contacts).
 */
// Данные блоков главной (company-section, timeline, city-stats)
if (is_file(_MAIN_PATH . '/modules/index/page_data.php')) {
    include_once(_MAIN_PATH . '/modules/index/page_data.php');
}

// Подключаем данные секций, чтобы при {include} в show.tpl переменные были доступны
$indexSections = array('certificates', 'partners', 'projects', 'contacts');
foreach ($indexSections as $sect) {
    $f = _MAIN_PATH . '/modules/' . $sect . '/show.php';
    if (is_file($f)) {
        include_once($f);
    }
}
