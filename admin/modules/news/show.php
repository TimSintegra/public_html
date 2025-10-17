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
$dataList = $db->query("SELECT * FROM news ORDER BY regdate desc");
$numData = $dataList->rowCount();
if ($dataList) {
    $tableData = array();
    $tableAttr = 'width="100%" border="0"';
    $trAttr = array ('class="eventr"', 'class="oddtr"');
    $tableHeader = '<a href="#">Новости</a><i class="strelka">&rarr;</i>'
        . '<i class="place">Всего новостей:</i><i class="nn">' . $numData . '</i>';
    $thAttr = array(
        'width="50"',
        'width="100"',
        '',
        '',
        'width="150"',
        'width="100"',
    );
    $colsTitles = "№,Дата,Заголовок,Ссылка,Основная информация,Действия";
    $no = 1;
    foreach ($dataList as $_data) {
        if (isset($_data['active']) && $_data['active'] == 1) {
            $imgStyle = '';
            $tdStyle = 0;
            $actLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/deact/' . $_data['id'] . '/" '
                . 'onClick="return window.confirm(\'Вы действительно хотите отключить?\');">'
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
        $delLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/del/' . $_data['id'] . '/" '
            . 'onClick="return window.confirm(\'Вы действительно хотите удалить?\');">'
            . '<img src="' . _ADMIN_TPL_URL . '/images/del.png" alt="Удалить" border="0"'
            . ' title="Удалить" ' . $imgStyle . ' width="19"></a> ';

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $no . '</s>';
        else
            $tableData[] = $no;

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $exe->MysqlDateToText($_data['regdate'], 4) . '</s>';
        else
            $tableData[] = $exe->MysqlDateToText($_data['regdate'], 4);

        $url = _HTTP_URL . '/news/' . $_data['url'] . '.html';

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s><b>' . $_data['title'] . '</b></s>';
        else
            $tableData[] = '<b>' . $_data['title'] . '</b>';

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $url . '</s>';
        else
            $tableData[] = $url;

        $tdAttr[] = 'align="center"';
        if (isset($_data['main_text']) && $_data['main_text'] != '') {
            if ($tdStyle == 1)
                $tableData[] = '<a href="#" onclick="showUrlInDialog(\'' . _ADMIN_URL . '/ext/newsdetails/'
                    . $_data['id'] . '/\', \'Новости - основная информация\'); '
                    . 'return false;"><s>посмотреть</s></a>';
            else
                $tableData[] = '<a href="#" onclick="showUrlInDialog(\'' . _ADMIN_URL . '/ext/newsdetails/'
                    . $_data['id'] . '/\', \'Новости - основная информация\'); '
                    . 'return false;">посмотреть</a>';
        } else {
            $tableData[] = '';
        }
        $tdAttr[] = 'align="center"';
        $tableData[] = $actLink . $editLink . $delLink;
        $no++;
    }
} else {
    $errorData = 'Нет новостей';
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
