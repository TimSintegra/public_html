<?php
/**
* News show module
*
* @author Almaz Ibragimov <kraftnk@gmail.com>
* @date 03.04.13
* @time 0:27
* @version 1.1
*
*/
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
$errorData = '';
$dbtable = 'mainmenu';
$delExceptions = array();
$moduleNames = array(
    'pages' => 'Страницы',
    'services' => 'Услуги',
    'projects'  => 'Проекты',
    'partners'  => 'Партнеры',
    'contacts'  => 'Контакты',
    'certificates'  => 'Сертификаты',
    'docs'  => 'Документы',
    'news'  => 'Новости',
    'link' => 'Ссылка',
);

$dataList = $db->query("SELECT * FROM " . $dbtable . " ORDER BY msort");
$numData = $dataList->rowCount();
if ($dataList) {
    $tableData = array();
    $tableAttr = 'width="100%" border="0"';
    $trAttr = array ('class="eventr"', 'class="oddtr"');
    $tableHeader = '<a href="#">Пунктю меню</a><i class="strelka">&rarr;</i>'
        . '<i class="place">Всего пунктов:</i><i class="nn">' . $numData . '</i>';
    $thAttr = array(
        'width="50"',
        '',
        '',
        '',
        '',
        'width="100"',
    );
    $colsTitles = "№,Название,Модуль,Ссылка,Сортировка,Действия";
    $no = 1;
    foreach ($dataList as $_data) {
        if (isset($_data['active']) && $_data['active'] == 1) {
            $imgStyle = '';
            $tdStyle = 0;
            $actLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/deact/' . $_data['id'] . '/" '
                . 'onClick="return window.confirm(\'Вы действительно хотите отключить этот пункт?\');">'
                . '<img src="' . _ADMIN_TPL_URL . '/images/off.png" title="Деактивировать"'
                . ' alt="Деактивировать" border="0" width="19"></a> ';
        } else {
            $actLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/act/' . $_data['id'] . '/" '
                . '><img src="' . _ADMIN_TPL_URL . '/images/on.png" title="Активировать"'
                . ' alt="Активировать" border="0" style="opacity:0.4;filter:alpha(opacity=40)'
                . '" width="19"></a> ';
            $imgStyle = 'style="opacity:0.4;filter:alpha(opacity=40)"';
            $tdStyle = 1;
        }
        $editLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/edit/' . $_data['id'] . '/">'
            . '<img src="' . _ADMIN_TPL_URL . '/images/edit.png" alt="Редактировать данные"'
            . ' title="Редактировать данные" border="0" ' . $imgStyle . ' width="19"></a> ';

        if (count($delExceptions) != 0 && in_array($_data['id'], $delExceptions)) {
            $delLink = '';
            $actLink = '';
        } else {
            $delLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/del/' . $_data['id'] . '/" '
                . 'onClick="return window.confirm(\'Вы действительно хотите удалить пункт меню?\');">'
                . '<img src="' . _ADMIN_TPL_URL . '/images/del.png" alt="Удалить" border="0"'
                . ' title="Удалить" ' . $imgStyle . ' width="19"></a> ';
        }
        if($numData > 1) {
            if ($_data['msort'] == 1) {
                $sortLink = '<img src="' . _ADMIN_TPL_URL . '/images/blank.gif"> '
                    . '<a href="' . _ADMIN_URL . '/' . $sec . '/sort/down/' . $_data['msort'] . '/'
                    . $_data['id'] . '/"><img src="' . _ADMIN_TPL_URL . '/images/down.gif" border="0" ' . $imgStyle . '></a>';
            } elseif ($_data['msort'] == $numData) {
                $sortLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/sort/up/' . $_data['msort'] . '/'
                    . $_data['id'] . '/"><img src="' . _ADMIN_TPL_URL . '/images/up.gif" border="0" ' . $imgStyle . '></a> '
                    . '<img src="' . _ADMIN_TPL_URL . '/images/blank.gif"> ';
            } else {
                $sortLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/sort/up/' . $_data['msort'] . '/'
                    . $_data['id'] . '/"><img src="' . _ADMIN_TPL_URL . '/images/up.gif" border="0" ' . $imgStyle . '></a> '
                    . '<a href="' . _ADMIN_URL . '/' . $sec . '/sort/down/' . $_data['msort'] . '/'
                    . $_data['id'] . '/"><img src="' . _ADMIN_TPL_URL . '/images/down.gif" border="0" ' . $imgStyle . '></a>';
            }
        } else {
            $sortLink = '';
        }

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $no . '</s>';
        else
            $tableData[] = $no;

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $_data['title'] . '</s>';
        else
            $tableData[] = $_data['title'];

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $moduleNames[$_data['module']] . '</s>';
        else
            $tableData[] = $moduleNames[$_data['module']];

        if ($_data['module'] == 'link') {
            $url = $_data['link'];
        } elseif ($_data['module'] == 'pages') {
            if ($_data['pid'] != 0 && $_data['cid'] != 0) {
                $pidUrl = $db->getOne("SELECT url FROM pages WHERE id='" . $_data['cid'] . "'");
                $url = _HTTP_URL . '/pages/' . $pidUrl . '.html';
            } elseif ($_data['pid'] != 0 && $_data['cid'] == 0) {
                $pidUrl = $db->getOne("SELECT url FROM pagescats WHERE id='" . $_data['pid'] . "'");
                $url = _HTTP_URL . '/pagescats/' . $pidUrl . '.html';
            } else {
                $url = _HTTP_URL . '/' . $_data['module'] . '.html';
            }
        } elseif ($_data['module'] == 'services') {
            if ($_data['pid'] != 0 && $_data['cid'] != 0) {
                $pidUrl = $db->getOne("SELECT url FROM services WHERE id='" . $_data['cid'] . "'");
                $url = _HTTP_URL . '/pages/' . $pidUrl . '.html';
            } elseif ($_data['pid'] != 0 && $_data['cid'] == 0) {
                $pidUrl = $db->getOne("SELECT url FROM servicescats WHERE id='" . $_data['pid'] . "'");
                $url = _HTTP_URL . '/pagescats/' . $pidUrl . '.html';
            } else {
                $url = _HTTP_URL . '/' . $_data['module'] . '.html';
            }
        } else {
            $url = _HTTP_URL . '/' . $_data['module'] . '.html';
        }

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $url . '</s>';
        else
            $tableData[] = $url;

        $tdAttr[] = 'align="center"';
        $tableData[] = $sortLink;

        $tdAttr[] = 'align="center"';
        $tableData[] = $actLink . $editLink . $delLink;
        $no++;
    }
} else {
    $errorData = 'Нет пунктов';
}

if (!$errorData) {
    $smarty->assign('errorData', '');
    $smarty->assign('tableData', $tableData);
    $smarty->assign('colsTitles', $colsTitles);
    $smarty->assign('tableAttr', $tableAttr);
    $smarty->assign('trAttr', $trAttr);
    $smarty->assign('thAttr', $thAttr);
    $smarty->assign('tdAttr', $tdAttr);
    $smarty->assign('tableHeader', $tableHeader);
} else {
    $smarty->assign('errorData', $errorData);
}
