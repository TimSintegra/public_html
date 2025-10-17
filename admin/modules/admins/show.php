<?php
/**
 * Admins show module
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
$adminList = $db->getAll("SELECT * FROM admins ORDER BY username");
if ($adminList) {
    $tableData = array();
    $tableAttr = 'width="100%" border="0"';
    $trAttr = array ('class="eventr"', 'class="oddtr"');
    $tableHeader = '<a href="#">Администраторы</a><i class="nn">' . $db->num_rows . '</i>';
    $thAttr = array(
        'width="50"',
        '',
        '',
        '',
        'width="140"'
    );
    $colsTitles = "№,Логин,E-mail,Тип администратора, Действия";
    $no = 1;
    foreach ($adminList as $_admin) {
        if (isset($_admin['active']) && $_admin['active'] == 1) {
            $imgStyle = '';
            $tdStyle = 0;
            $actLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/deact/' . $_admin['id'] . '/" '
                . 'onClick="return window.confirm(\'Вы действительно хотите отключить?\');">'
                . '<img src="' . _ADMIN_TPL_URL . '/images/off.png" title="Деактивировать"'
                . ' alt="Деактивировать" border="0" width="19"></a> ';
        } else {
            $actLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/act/' . $_admin['id'] . '/" '
                . '><img src="' . _ADMIN_TPL_URL . '/images/on.png" title="Активировать"'
                . ' alt="Активировать" border="0" style="opacity:0.4;filter:alpha(opacity=40)'
                . '" width="19"></a> ';
            $imgStyle = 'style="opacity:0.4;filter:alpha(opacity=40)"';
            $tdStyle = 1;
        }
        $editLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/edit/' . $_admin['id'] . '/">'
            . '<img src="' . _ADMIN_TPL_URL . '/images/edit.png" alt="Редактировать данные"'
            . ' title="Редактировать данные" border="0" ' . $imgStyle . ' width="19"></a> ';
        $passLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/pass/' . $_admin['id'] . '/">'
            . '<img src="' . _ADMIN_TPL_URL . '/images/pass.png" alt="Поменять пароль" '
            . 'title="Поменять пароль" border="0" ' . $imgStyle . ' width="19"></a> ';
        /*$permLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/perm/' . $_admin['aid'] . '/">'
            . '<img src="' . _TPL_URL . '/images/perm.png" alt="Редактировать права"'
            . ' title="Редактировать права" border="0" ' . $imgStyle . ' width="19"></a> ';*/
        $delLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/del/' . $_admin['id'] . '/" '
            . 'onClick="return window.confirm(\'Вы действительно хотите удалить?\');">'
            . '<img src="' . _ADMIN_TPL_URL . '/images/del.png" alt="Удалить" border="0"'
            . ' title="Удалить" ' . $imgStyle . ' width="19"></a> ';
        $allLinks = '';
        if ($_admin['id'] == 1) {
            $allLinks .= $passLink;
        } else {
            $allLinks .= $actLink . $editLink . $passLink . $delLink;
        }

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $no . '</s>';
        else
            $tableData[] = $no;

        $tdAttr[] = '';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $_admin['username'] . '</s>';
        else
            $tableData[] = $_admin['username'];

        $tdAttr[] = '';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $_admin['email'] . '</s>';
        else
            $tableData[] = $_admin['email'];

        if ($_admin['role'] == 1) {
            $typeText = 'Администратор';
        } elseif ($_admin['role'] == 2) {
            $typeText = 'Модератор';
        } else {
            $typeText = 'Неизвестно';
        }
        $tdAttr[] = '';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $typeText . '</s>';
        else
            $tableData[] = $typeText;

        $tdAttr[] = 'align="center"';
        $tableData[] = $allLinks;
        $no++;
    }
} else {
    $errorData = 'Нет доступных администраторов';
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
