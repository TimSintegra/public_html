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
$dataList = $db->getAll("SELECT * FROM docs ORDER BY id desc");
if ($dataList) {
    $tableData = array();
    $tableAttr = 'width="100%" border="0"';
    $trAttr = array ('class="eventr"', 'class="oddtr"');
    $tableHeader = '<a href="#">Документы</a><i class="strelka">&rarr;</i>'
        . '<i class="place">Всего документов:</i><i class="nn">' . $db->num_rows . '</i>';
    $thAttr = array(
        'width="50"',
        '',
        '',
        '',
        'width="100"',
    );
    $colsTitles = "№,Название,Файл,Просмотр,Действия";
    $no = 1;
    foreach ($dataList as $_data) {
        if (isset($_data['active']) && $_data['active'] == 1) {
            $imgStyle = '';
            $tdStyle = 0;
            $actLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/deact/' . $_data['id'] . '/' . $id . '/" '
                . 'onClick="return window.confirm(\'Вы действительно хотите отключить?\');">'
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
            $tableData[] = '<s>' . $_data['title'] . '</s>';
        else
            $tableData[] = $_data['title'];

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $_data['file'] . '</s>';
        else
            $tableData[] = $_data['file'];

        $tdAttr[] = 'align="center"';
        if ($_data['file'] != "") {
            $_file = '<a href="' . _ADMIN_URL . '/../content/files/' . $_data['file'] . '" target="_blank">Скачать</a>';
        } else {
            if ($tdStyle == 1)
                $_file = '<s>нет файла</s>';
            else
                $_file = 'нет файла';
        }
        $tdAttr[] = 'align="center"';
        $tableData[] = $_file;

        $tdAttr[] = 'align="center"';
        $tableData[] = $actLink . $editLink . $delLink;
        $no++;
    }
} else {
    $errorData = 'Нет документов';
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
