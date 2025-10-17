<?
switch ($act)
{
    case 'metadetails':
        $main_content = $db->getRow("SELECT seo_title, seo_keywords, seo_descr FROM stories WHERE id='" . $id . "'");
        $smarty->assign('seoTitle', $main_content['seo_title']);
        $smarty->assign('seoKeywords', $main_content['seo_keywords']);
        $smarty->assign('seoDescr', $main_content['seo_descr']);
        break;
    case 'photodetails':
        $errorText = '';
        $showAllPhotos = array();
        if ($id) {
            $query = "SELECT * FROM media WHERE pid='" . $id . "' AND `module`='projects' ORDER BY msort";
            $allPhotos = $db->getAll($query);
            if ($allPhotos) {
                foreach ($allPhotos as $_onePhotos) {
                    $showAllPhotos[] = array(
                        'id' => $_onePhotos['id'],
                        'image' => $_onePhotos['image'],
                        'imageUrl' => _MAIN_URL . "/content/img/photos/" . $_onePhotos['image'],
                        'msort' => $_onePhotos['msort']
                    );
                }
            } else {
                $errorText = 'Нет фотографий!';
            }
        } else {
            $errorText = 'Нет фотографий!';
        }
        $smarty->assign("formAction", _ADMIN_URL . "/projects/");
        $smarty->assign('allPhotos', $showAllPhotos);
        $smarty->assign('errorText', $errorText);
        break;
    case 'photodetails2':
        $errorText = '';
        $showAllPhotos = array();
        if ($id) {
            $query = "SELECT * FROM media WHERE pid='" . $id . "' AND `module`='objects' ORDER BY msort";
            $allPhotos = $db->getAll($query);
            if ($allPhotos) {
                foreach ($allPhotos as $_onePhotos) {
                    $showAllPhotos[] = array(
                        'id' => $_onePhotos['id'],
                        'image' => $_onePhotos['image'],
                        'imageUrl' => _MAIN_URL . "/content/img/photos/" . $_onePhotos['image'],
                        'msort' => $_onePhotos['msort']
                    );
                }
            } else {
                $errorText = 'Нет фотографий!';
            }
        } else {
            $errorText = 'Нет фотографий!';
        }
        $smarty->assign("formAction", _ADMIN_URL . "/objects/");
        $smarty->assign('allPhotos', $showAllPhotos);
        $smarty->assign('errorText', $errorText);
        break;

    case 'pagedetails':
        $main_content = $db->getOne("SELECT main_text FROM pages WHERE id='" . $id . "'");
        $smarty->assign('infoText', $main_content);
        break;
    case 'newsdetails':
        $main_content = $db->getOne("SELECT main_text FROM news WHERE id='" . $id . "'");
        $smarty->assign('infoText', $main_content);
        break;
    case 'projectdetails':
        $main_content = $db->getOne("SELECT main_text FROM projects WHERE id='" . $id . "'");
        $smarty->assign('infoText', $main_content);
        break;
    case 'servicesdetails':
        $main_content = $db->getOne("SELECT main_text FROM services WHERE id='" . $id . "'");
        $smarty->assign('infoText', $main_content);
        break;
    case 'reviewsdetails':
        $main_content = $db->getOne("SELECT main_text FROM reviews WHERE id='" . $id . "'");
        $smarty->assign('infoText', $main_content);
        break;
    case 'contactdetails':
        $main_content = $db->getOne("SELECT main_text FROM contacts WHERE id='" . $id . "'");
        $smarty->assign('infoText', $main_content);
        break;
    case 'slider':
        $slider_content = array();
        $main_content = $db->getAll("SELECT image FROM media WHERE pid='" . $id . "'");
        if ($main_content) {
            foreach ($main_content as $_image) {
                $slider_content[] = $_image['image'];
            }
        }
        $smarty->assign('infoText', $slider_content);
        break;
    case 'getsubcats' :
        if ($id) {
            if ($id == 'pages') {
                $subcatsSelect = $db->getAll("SELECT id, title FROM pagescats WHERE active='1' ORDER BY msort");
                if ($subcatsSelect) {
                    $subcatSelect = '<div class="rowform"><label>Подкатегория:<br /><em>Если выберите модуль "Страницы" и подкатегорию, также можете разместить только страницу</em></label>'
                        . '<select name="pid" id="pid"><option value="0">Выберите подкатегорию</option>';
                    foreach ($subcatsSelect as $oneSubcat) {
                        $subcatSelect .= '<option value="' . $oneSubcat['id'] . '">' . $oneSubcat['title'] . '</option>';
                    }
                    $subcatSelect .= '</select></div>';
                } else {
                    $subcatSelect = '<input type="hidden" name="pid" value="0">';
                }
            } elseif ($id == 'services') {
                $subcatsSelect = $db->getAll("SELECT id, title FROM servicescats WHERE active='1' ORDER BY msort");
                if ($subcatsSelect) {
                    $subcatSelect = '<div class="rowform"><label>Подкатегория:<br /><em>Если выберите модуль "Услуги" и подкатегорию, также можете разместить только страницу</em></label>'
                        . '<select name="pid" id="pid"><option value="0">Выберите подкатегорию</option>';
                    foreach ($subcatsSelect as $oneSubcat) {
                        $subcatSelect .= '<option value="' . $oneSubcat['id'] . '">' . $oneSubcat['title'] . '</option>';
                    }
                    $subcatSelect .= '</select></div>';
                } else {
                    $subcatSelect = '<input type="hidden" name="pid" value="0">';
                }
            } else {
                $subcatSelect = '<input type="hidden" name="pid" value="0">';
            }
        } else {
            $subcatSelect = '<input type="hidden" name="pid" value="0">';
        }
        $smarty->assign('subcatSelect', $subcatSelect);
        break;
    case 'getsubcatsblocks' :
        if ($id) {
            if ($id == 'pages') {
                $subcatsSelect = $db->getAll("SELECT id, title FROM pagescats WHERE active='1' ORDER BY msort");
                if ($subcatsSelect) {
                    $subcatSelect = '<div class="rowform"><label>Подкатегория:</label>'
                        . '<select name="pid" id="pid"><option value="0">Выберите подкатегорию</option>';
                    foreach ($subcatsSelect as $oneSubcat) {
                        $subcatSelect .= '<option value="' . $oneSubcat['id'] . '">' . $oneSubcat['title'] . '</option>';
                    }
                    $subcatSelect .= '</select></div>';
                } else {
                    $subcatSelect = '<input type="hidden" name="pid" value="0">';
                }
            } elseif ($id == 'units') {
                $subcatsSelect = $db->getAll("SELECT id, title FROM unitscats WHERE active='1' ORDER BY msor");
                if ($subcatsSelect) {
                    $subcatSelect = '<div class="rowform"><label>Подкатегория:</label>'
                        . '<select name="pid" id="pid"><option value="0">Выберите подкатегорию</option>';
                    foreach ($subcatsSelect as $oneSubcat) {
                        $subcatSelect .= '<option value="' . $oneSubcat['id'] . '">' . $oneSubcat['title'] . '</option>';
                    }
                    $subcatSelect .= '</select></div>';
                } else {
                    $subcatSelect = '<input type="hidden" name="pid" value="0">';
                }
            } elseif ($id == 'personal') {
                $subcatsSelect = $db->getAll("SELECT id, title FROM personalcats WHERE active='1'");
                if ($subcatsSelect) {
                    $subcatSelect = '<div class="rowform"><label>Подкатегория:</label>'
                        . '<select name="pid" id="pid"><option value="0">Выберите подкатегорию</option>';
                    foreach ($subcatsSelect as $oneSubcat) {
                        $subcatSelect .= '<option value="' . $oneSubcat['id'] . '">' . $oneSubcat['title'] . '</option>';
                    }
                    $subcatSelect .= '</select></div>';
                } else {
                    $subcatSelect = '<input type="hidden" name="pid" value="0">';
                }
            } else {
                $subcatSelect = '<input type="hidden" name="pid" value="0">';
            }
        } else {
            $subcatSelect = '<input type="hidden" name="pid" value="0">';
        }
        $smarty->assign('subcatSelect', $subcatSelect);
        break;
    case 'getitem' :
        $itemText = '';
        if ($id && $subid) {
            if ($subid == 'pages') {
                $itemSelect = $db->getAll("SELECT id, title FROM pages WHERE cid='" . $id . "' AND active='1' ORDER BY msort");
                if ($itemSelect) {
                    $itemText = '<div class="rowform"><label>Страница:<br /><em>Если выберите страницу, то будет ссылка именно на нее, либо покажется подменю данной подкатегории</em></label>'
                        . '<select name="cid" id="cid"><option value="0">Выберите подкатегорию или оставьте пустым</option>';
                    foreach ($itemSelect as $oneItem) {
                        $itemText .= '<option value="' . $oneItem['id'] . '">' . $oneItem['title'] . '</option>';
                    }
                    $itemText .= '</select></div>';
                } else {
                    $itemText = '<input type="hidden" name="cid" value="0">';
                }
            } elseif ($subid == 'services') {
                $itemSelect = $db->getAll("SELECT id, title FROM services WHERE cid='" . $id . "' AND active='1' ORDER BY msort");
                if ($itemSelect) {
                    $itemText = '<div class="rowform"><label>Страница:<br /><em>Если выберите страницу, то будет ссылка именно на нее, либо покажется подменю данной подкатегории</em></label>'
                        . '<select name="cid" id="cid"><option value="0">Выберите подкатегорию или оставьте пустым</option>';
                    foreach ($itemSelect as $oneItem) {
                        $itemText .= '<option value="' . $oneItem['id'] . '">' . $oneItem['title'] . '</option>';
                    }
                    $itemText .= '</select></div>';
                } else {
                    $itemText = '<input type="hidden" name="cid" value="0">';
                }
            } else {
                $itemText = '<input type="hidden" name="cid" value="0">';
            }
        } else {
            $itemText = '<input type="hidden" name="cid" value="0">';
        }
        $smarty->assign('itemText', $itemText);
        break;
    default:
        $smarty->assign('infoText', '<br><br><center>Выберите раздел!</center>');
        break;
}
?>
