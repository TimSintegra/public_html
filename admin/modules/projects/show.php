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
            $db->exec("UPDATE projects SET msort='" . intval($valueSort) . "' WHERE id='" . intval($keySort) . "'");
        }
    }
}

if (isset($_POST['delPhotos']) && $_POST['delPhotos'] == 'Сохранить сортировку и удалить выбранные фотографии') {
    if (isset($_POST['photo']) && count($_POST['photo']) != 0) {
        foreach ($_POST['photo'] as $delPhoto) {
            $delPhoto = intval($delPhoto);
            $delImage = $db->getOne("SELECT image FROM media WHERE id='" . $delPhoto . "'");
            if ($delImage) {
                if (is_file(_MAIN_PATH . "/content/img/photos/" . $delImage)) {
                    unlink(_MAIN_PATH . "/content/img/photos/" . $delImage);
                }
                if (is_file(_MAIN_PATH . "/content/img/photos/sm/" . $delImage)) {
                    unlink(_MAIN_PATH . "/content/img/photos/sm/" . $delImage);
                }
                $db->exec("DELETE FROM media WHERE id='" . $delPhoto . "'");
            }
        }
    }
    if (count($_POST['msort']) > 0) {
        foreach ($_POST['msort'] as $keySort => $valueSort) {
            $db->exec("UPDATE media SET msort='" . intval($valueSort) . "' WHERE id='" . intval($keySort) . "'");
        }
    }
}
$errorData = '';
$dataListAll = $db->getAll("SELECT * FROM projects ORDER BY msort");
$numAll = $db->num_rows;
if ($dataListAll) {
    $tableData = array();
    $tableAttr = 'width="100%" border="0"';
    $trAttr = array ('class="eventr"', 'class="oddtr"');
    $tableHeader = '<a href="#">Проекты</a><i class="strelka">&rarr;</i>'
        . '<i class="place">Всего проектов:</i><i class="nn">' . $numAll . '</i>';
    $thAttr = array(
        'width="70"',
        'width="120"',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        'width="150"',
    );
    $colsTitles = "№,Осн.фото,Название,Партнер,Текст,Фотографии,Осн.текст,На главной,Сортировка,Действия";
    $no = 1;
    foreach ($dataListAll as $_data) {
        if (isset($_data['active']) && $_data['active'] == 1) {
            $imgStyle = '';
            $tdStyle = 0;
            $actLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/deact/' . $_data['id'] . '/" '
                . 'onClick="return window.confirm(\'Вы действительно хотите отключить проект?\');">'
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
        $addLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/add_photo/' . $_data['id'] . '/">'
            . '<img src="' . _ADMIN_TPL_URL . '/images/plus.png" alt="Добавить фотографии"'
            . ' title="добавить фотографии" border="0" ' . $imgStyle . ' width="19"></a> ';
        $editLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/edit/' . $_data['id'] . '/">'
            . '<img src="' . _ADMIN_TPL_URL . '/images/edit.png" alt="Редактировать данные"'
            . ' title="Редактировать данные" border="0" ' . $imgStyle . ' width="19"></a> ';
        $delLink = '<a href="' . _ADMIN_URL . '/' . $sec . '/del/' . $_data['id'] . '/" '
            . 'onClick="return window.confirm(\'Вы действительно хотите удалить проект?\');">'
            . '<img src="' . _ADMIN_TPL_URL . '/images/del.png" alt="Удалить" border="0"'
            . ' title="Удалить" ' . $imgStyle . ' width="19"></a> ';

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $no . '</s>';
        else
            $tableData[] = $no;

        $tdAttr[] = 'align="center"';
        if ($_data['image'] != "") {
            $_image = '<a href="' . _ADMIN_URL . '/../content/img/photos/' . $_data['image']
                . '" class="lightbox"><img src="' . _ADMIN_URL . '/../content/img/photos/'
                . $_data['image'] . '" width="100" border="0" ' . $imgStyle . '></a>';
        } else {
            if ($tdStyle == 1)
                $_image = '<s>нет изображения</s>';
            else
                $_image = 'нет изображения';
        }
        $tdAttr[] = 'align="center"';
        $tableData[] = $_image;

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $_data['title'] . '</s>';
        else
            $tableData[] = $_data['title'];

        $category = $db->getOne("SELECT title FROM partners WHERE id='" . $_data['pid'] . "'");
        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $category . '</s>';
        else
            $tableData[] = $category;

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $_data['short_text'] . '</s>';
        else
            $tableData[] = $_data['short_text'];

        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<a href="#" onclick="showUrlInDialog(\'' . _ADMIN_URL . '/ext/photodetails/'
                . $_data['id'] . '/' . time() . '/\', \'Фотографии\'); '
                . 'return false;"><s>посмотреть</s></a>';
        else
            $tableData[] = '<a href="#" onclick="showUrlInDialog(\'' . _ADMIN_URL . '/ext/photodetails/'
                . $_data['id'] . '/' . time() . '/\', \'Фотографии\'); '
                . 'return false;">посмотреть</a>';

        $tdAttr[] = 'align="center"';
        if (isset($_data['main_text']) && $_data['main_text'] != '') {
            if ($tdStyle == 1)
                $tableData[] = '<a href="#" onclick="showUrlInDialog(\'' . _ADMIN_URL . '/ext/projectdetails/'
                    . $_data['id'] . '/\', \'Проекты - основная информация\'); '
                    . 'return false;"><s>посмотреть</s></a>';
            else
                $tableData[] = '<a href="#" onclick="showUrlInDialog(\'' . _ADMIN_URL . '/ext/projectdetails/'
                    . $_data['id'] . '/\', \'Проекты - основная информация\'); '
                    . 'return false;">посмотреть</a>';
        } else {
            $tableData[] = '';
        }

        if ($_data['main'] == 1) {
            $main = 'Да';
        } else {
            $main = 'Нет';
        }
        $tdAttr[] = 'align="center"';
        if ($tdStyle == 1)
            $tableData[] = '<s>' . $main . '</s>';
        else
            $tableData[] = $main;

        $tdAttr[] = 'align="center"';
        $tableData[] = '<input type="text" name="msort[' . $_data['id'] . ']" value="'
            . $_data['msort'] . '" style="width:30px;text-align: center;">';

        $tdAttr[] = 'align="center"';
        $tableData[] = $addLink . $actLink . $editLink . $delLink;
        $no++;
    }
} else {
    $errorData = 'Нет ни одного проекта';
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
