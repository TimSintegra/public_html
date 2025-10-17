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
if (isset($_POST['save_sorting']) && $_POST['save_sorting'] == 'Сохранить сортировку') {
    if (count($_POST['msort']) > 0) {
        foreach ($_POST['msort'] as $keySort => $valueSort) {
            $db->exec("UPDATE pages SET msort='" . intval($valueSort) . "' WHERE id='" . intval($keySort) . "'");
        }
    }
}
if (isset($id) && $id != '' && $id != 0) {
    $where = "WHERE cid='" . $id . "'";
    $subTitle = '<i class="strelka">&rarr;</i><i class="place">Категория "'
        . $db->getOne("SELECT title FROM pagescats WHERE id='" . $id . "'") . '"</i>';
} else {
    $where = "";
    $subTitle = "";
}
$errorData = '';
$dataList = $db->query("SELECT * FROM pages " . $where . " ORDER BY cid, msort");
$numData = $dataList->rowCount();
if ($dataList) {
    $tableData = array();
    $tableAttr = 'width="100%" border="0"';
    $trAttr = array ('class="eventr"', 'class="oddtr"');
    $tableHeader = '<a href="#">Страницы</a>' . $subTitle . '<i class="strelka">&rarr;</i>'
        . '<i class="place">Всего страниц:</i><i class="nn">' . $numData . '</i>';
    $thAttr = array(
        'width="50"',
        '',
        '',
        '',
        '',
        '',
        'width="100"',
    );
    $colsTitles = "№,Категория,Заголовок,Ссылка,Основной текст,Сортировка,Действия";
    $no = 1;
    foreach ($dataList as $_data) {
        if (isset($_data['active']) && $_data['active'] == 1) {
            $imgStyle = '';
            $tdStyle = 0;
            $actLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/deact/' . $_data['id'] . '/' . $id . '/" '
                . 'onClick="return window.confirm(\'Вы действительно хотите отключить страницу?\');">'
                . '<img src="' . _ADMIN_TPL_URL . '/images/off.png" title="Деактивировать"'
                . ' alt="Деактивировать" border="0" width="19"></a> ';
        } else {
            $actLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/act/' . $_data['id'] . '/' . $id . '/" '
                . '><img src="' . _ADMIN_TPL_URL . '/images/on.png" title="Активировать"'
                . ' alt="Активировать" border="0" style="opacity:0.4;filter:alpha(opacity=40)'
                . '" width="19"></a> ';
            $imgStyle = 'style="opacity:0.4;filter:alpha(opacity=40)"';
            $tdStyle = 1;
        }
        $editLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/edit/' . $_data['id'] . '/' . $id . '/">'
            . '<img src="' . _ADMIN_TPL_URL . '/images/edit.png" alt="Редактировать данные"'
            . ' title="Редактировать данные" border="0" ' . $imgStyle . ' width="19"></a> ';
        $delLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/del/' . $_data['id'] . '/' . $id . '/" '
            . 'onClick="return window.confirm(\'Вы действительно хотите удалить страницу?\');">'
            . '<img src="' . _ADMIN_TPL_URL . '/images/del.png" alt="Удалить" border="0"'
            . ' title="Удалить" ' . $imgStyle . ' width="19"></a> ';

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $no . '</s>';
        else
            $tableData[] = $no;

        $category = $db->getOne("SELECT title FROM pagescats WHERE id='" . $_data['cid'] . "'");
        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $category . '</s>';
        else
            $tableData[] = $category;

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $_data['title'] . '</s>';
        else
            $tableData[] = $_data['title'];

        $tdAttr[] = 'align="center"';
        $url = _HTTP_URL . '/pages/' . $_data['url'] . '.html';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $url . '</s>';
        else
            $tableData[] = $url;

        $tdAttr[] = 'align="center"';
        if (isset($_data['main_text']) && $_data['main_text'] != '') {
            if ($tdStyle == 1)
                $tableData[] = '<a href="#" onclick="showUrlInDialog(\'' . _ADMIN_URL . '/ext/pagedetails/'
                    . $_data['id'] . '/\', \'Страницы - основная информация\'); '
                    . 'return false;"><s>посмотреть</s></a>';
            else
                $tableData[] = '<a href="#" onclick="showUrlInDialog(\'' . _ADMIN_URL . '/ext/pagedetails/'
                    . $_data['id'] . '/\', \'Страница - основная информация\'); '
                    . 'return false;">посмотреть</a>';
        } else {
            $tableData[] = '';
        }

        $tdAttr[] = 'align="center"';
        $tableData[] = '<input type="text" name="msort[' . $_data['id'] . ']" value="'
            . $_data['msort'] . '" style="width:30px;text-align: center;">';

        $tdAttr[] = 'align="center"';
        $tableData[] = $actLink . $editLink . $delLink;
        $no++;
    }
} else {
    $errorData = 'Нет страниц';
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
