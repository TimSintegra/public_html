<?php
/**
 * Admin add module
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 03.04.13
 * @time 0:29
 * @version 1.1
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
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
if (isset($id) && $id != 0) {
    $_val = $db->getRow("SELECT * FROM mainmenu WHERE id='" . $id . "'");
    $_val['title'] = htmlspecialchars($_val['title']);

    $errorText = '';
    $successText = '';

    $formDetails = array('formTitle' => 'Изменить пункт меню',
        'submitName' => 'edit_mainmenu',
        'submitValue' => 'Изменить');

    if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
    {

        $_val = $_POST;
        $check_data=array(
            'title',
        );
        $title = $exe->quote_smart($_POST['title']);
        $module = $exe->quote_smart($_POST['module']);
        $cid = intval($_POST['cid']);
        $pid = intval($_POST['pid']);
        $link = $exe->quote_smart($_POST['link']);
        if ($_adminka->ControlForm($_POST, $check_data)===true) {
            $errorText ='Обязательные поля для заполнения: Название пункта меню';
        } else {
            $data=array(
                'title' => $title,
                'cid' => $cid,
                'pid' => $pid,
                'module' => $module,
                'link' => $link
            );
            if ($_adminka->UpdateBase('mainmenu', $data, 'id=' . $id)) {
                $successText ='Информация успешно исправлена';
                Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
            } else {
                $errorText ='Ошибка базы данных!!!';
            }
        }
    }

    $hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">'
        . '<input type="hidden" name="id" value="' . $id . '">';

    if (in_array($id, $delExceptions)) {
        $hiddenInputs .= '<input type="hidden" name="module" value="' . $_val['module'] . '">';
        $hiddenInputs .= '<input type="hidden" name="cid" value="' . $_val['cid'] . '">';
        $hiddenInputs .= '<input type="hidden" name="pid" value="' . $_val['pid'] . '">';
    }

    $moduleSelect = '<select name="module" id="module"><option value="">Выберите модуль</option>';
    foreach ($moduleNames as $moduleName => $moduleTitle) {
        if ($_val['module'] == $moduleName) {
            $moduleSelect .= '<option value="' . $moduleName . '" SELECTED>' . $moduleTitle . '</option>';
        } else {
            $moduleSelect .= '<option value="' . $moduleName . '">' . $moduleTitle . '</option>';
        }
    }
    $moduleSelect .= '</select>';

    if ($_val['module'] == 'pages') {

        $subcatsSelect = $db->getAll("SELECT id, title FROM pagescats WHERE active='1'");

        if ($subcatsSelect) {
            $subcatSelect = '<div class="rowform"><label>Подкатегория:<br /><em>Если выберите модуль "Страницы" и подкатегорию, также можете разместить только страницу</em></label>'
                . '<select name="pid" id="pid"><option value="0">Выберите подкатегорию</option>';
            foreach ($subcatsSelect as $oneSubcat) {
                if ($_val['pid'] == $oneSubcat['id']) {
                    $subcatSelect .= '<option value="' . $oneSubcat['id'] . '" SELECTED>' . $oneSubcat['title'] . '</option>';
                } else {
                    $subcatSelect .= '<option value="' . $oneSubcat['id'] . '">' . $oneSubcat['title'] . '</option>';
                }
            }
            $subcatSelect .= '</select></div>';
        } else {
            $subcatSelect = '<input type="hidden" name="pid" value="0">';
        }

        if ($_val['module'] == 'pages' && $_val['pid'] != 0) {
            $itemSelects = $db->getAll("SELECT id, title FROM pages WHERE cid='" . $_val['pid'] . "' AND active='1'");
            if ($itemSelects) {
                $itemSelect = '<div class="rowform"><label>Страница:<br /><em>Если выберите страницу, то будет ссылка именно на нее, либо покажется подменю данной подкатегории</em></label>'
                    . '<select name="cid" id="cid"><option value="0">Выберите подкатегорию или оставьте пустым</option>';
                foreach ($itemSelects as $oneItem) {
                    if ($_val['cid'] == $oneItem['id']) {
                        $itemSelect .= '<option value="' . $oneItem['id'] . '" SELECTED>' . $oneItem['title'] . '</option>';
                    } else {
                        $itemSelect .= '<option value="' . $oneItem['id'] . '">' . $oneItem['title'] . '</option>';
                    }
                }
                $itemSelect .= '</select></div>';
            } else {
                $itemSelect = '<input type="hidden" name="cid" value="0">';
            }
        } else {
            $itemSelect = '<input type="hidden" name="cid" value="0">';
        }

        $linkText = '<input type="hidden" name="link" value="">';
    } elseif ($_val['module'] == 'services') {

        $subcatsSelect = $db->getAll("SELECT id, title FROM servicescats WHERE active='1'");

        if ($subcatsSelect) {
            $subcatSelect = '<div class="rowform"><label>Подкатегория:<br /><em>Если выберите модуль "Услуги" и подкатегорию, также можете разместить только страницу</em></label>'
                . '<select name="pid" id="pid"><option value="0">Выберите подкатегорию</option>';
            foreach ($subcatsSelect as $oneSubcat) {
                if ($_val['pid'] == $oneSubcat['id']) {
                    $subcatSelect .= '<option value="' . $oneSubcat['id'] . '" SELECTED>' . $oneSubcat['title'] . '</option>';
                } else {
                    $subcatSelect .= '<option value="' . $oneSubcat['id'] . '">' . $oneSubcat['title'] . '</option>';
                }
            }
            $subcatSelect .= '</select></div>';
        } else {
            $subcatSelect = '<input type="hidden" name="pid" value="0">';
        }

        if ($_val['module'] == 'services' && $_val['pid'] != 0) {
            $itemSelects = $db->getAll("SELECT id, title FROM services WHERE cid='" . $_val['pid'] . "' AND active='1'");
            if ($itemSelects) {
                $itemSelect = '<div class="rowform"><label>Страница:<br /><em>Если выберите страницу, то будет ссылка именно на нее, либо покажется подменю данной подкатегории</em></label>'
                    . '<select name="cid" id="cid"><option value="0">Выберите подкатегорию или оставьте пустым</option>';
                foreach ($itemSelects as $oneItem) {
                    if ($_val['cid'] == $oneItem['id']) {
                        $itemSelect .= '<option value="' . $oneItem['id'] . '" SELECTED>' . $oneItem['title'] . '</option>';
                    } else {
                        $itemSelect .= '<option value="' . $oneItem['id'] . '">' . $oneItem['title'] . '</option>';
                    }
                }
                $itemSelect .= '</select></div>';
            } else {
                $itemSelect = '<input type="hidden" name="cid" value="0">';
            }
        } else {
            $itemSelect = '<input type="hidden" name="cid" value="0">';
        }

        $linkText = '<input type="hidden" name="link" value="">';
    } else {
        $subcatSelect = '<input type="hidden" name="pid" value="0">';
        $itemSelect = '<input type="hidden" name="cid" value="0">';
        $linkText = '<input type="hidden" name="link" value="">';
    }

    if ($_val['module'] == 'link') {
        $linkText = '<div class="rowform"><label>Ссылка:</label><input type="text" name="link" value=""></div>';
    }
    $smarty->assign('_val', $_val);

    $smarty->assign('errorText', $errorText);
    $smarty->assign('successText', $successText);
    $smarty->assign('hiddenInputs', $hiddenInputs);
    if (!in_array($id, $delExceptions)) {
        $smarty->assign('moduleSelect', $moduleSelect);
        $smarty->assign('subcatSelect', $subcatSelect);
        $smarty->assign('itemSelect', $itemSelect);
        $smarty->assign('linkText', $linkText);
    } else {
        $smarty->assign('moduleSelect', '');
        $smarty->assign('subcatSelect', '');
        $smarty->assign('itemSelect', '');
        $smarty->assign('linkText', '');
    }
    $smarty->assign('formDetails', $formDetails);

} else {
    header("Location:" . _ADMIN_URL . "/");
}