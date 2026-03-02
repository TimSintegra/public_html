<?php
/**
 * Forms
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 03.02.13
 * @time 2:02
 * @version 1.0
 *
 */
class Forms
{

    function _selectForm ($select_name, $select_db, $select_value, $select_title, $selected, $select_none=1, $select_none_title='Выберите', $select_where='', $select_order='') {
        global $db;
        $_selectform = '<select id="' . $select_name . '" name="' . $select_name . '">';
        if ($select_none !=0)
            $_selectform .= '<option value="0">' . $select_none_title . '</option>';
        if ($select_where != '')
            $_selectwhere = ' WHERE ' . $select_where;
        else
            $_selectwhere = '';
        if ($select_order != '')
            $_selectorder = ' ORDER BY ' . $select_order;
        else
            $_selectorder = '';
        if ($select_db == 'services') {
            $_selectwhere = ' WHERE s.specid=sp.specid AND s.active="1"';
            $_selectorder = ' ORDER by s.title desc';
            $_selectItems = $db->getAll("SELECT s.sid as " . $select_value . ", s.title as " . $select_title . ", sp.title as sptitle FROM " . $select_db . " as s, speciality as sp" . $_selectwhere . $_selectorder);
            if ($_selectItems) {
                foreach ($_selectItems as $item) {
                    if ($selected == $item[$select_value])
                        $_selectform .= '<option value="' . $item[$select_value] . '" SELECTED>' . $item['sptitle'] . ' / ' . $item[$select_title] . '</option>';
                    else
                        $_selectform .= '<option value="' . $item[$select_value] . '">' . $item['sptitle'] . ' / ' . $item[$select_title] . '</option>';
                }
            }
        } elseif ($select_db == 'users') {
            $_selectwhere = ' WHERE p.uid=u.id AND ' . $select_where;
            $_selectorder = ' ORDER by p.fio';
            $_query = "SELECT u.id as " . $select_value . ", p.fio as " . $select_title . " FROM " . $select_db . " as u, profiles as p" . $_selectwhere . $_selectorder;
            $_selectItems = $db->getAll($_query);
            if ($_selectItems) {
                foreach ($_selectItems as $item) {
                    if ($selected == $item[$select_value])
                        $_selectform .= '<option value="' . $item[$select_value] . '" SELECTED>'
                            . $item[$select_title] . '</option>';
                    else
                        $_selectform .= '<option value="' . $item[$select_value] . '">'
                            . $item[$select_title] . '</option>';
                }
            }
        } elseif ($select_db == 'gender'){
            $_selectItems = array (1=>'Мужской', 2=>'Женский');
            if (is_array($_selectItems)) {
                foreach ($_selectItems as $itemKey=>$item) {
                    if ($selected == $itemKey)
                        $_selectform .= '<option value="' . $itemKey . '" SELECTED>' . $item . '</option>';
                    else
                        $_selectform .= '<option value="' . $itemKey . '">' . $item  . '</option>';
                }
            }
        } elseif ($select_db == 'shablon_type'){
            $_selectItems = array (1=>'на день', 2=>'на неделю');
            if (is_array($_selectItems)) {
                foreach ($_selectItems as $itemKey=>$item) {
                    if ($selected == $itemKey)
                        $_selectform .= '<option value="' . $itemKey . '" SELECTED>' . $item . '</option>';
                    else
                        $_selectform .= '<option value="' . $itemKey . '">' . $item  . '</option>';
                }
            }
        } elseif ($select_db == 'select_time') {
            for ($h=0; $h<=23; $h++) {
                if (strlen($h) == 1) {
                    $ht = '0' . $h;
                } else {
                    $ht = $h;
                }
                $timing = $ht . ':00';
                if ($selected == $timing) {
                    $_selectform .= '<option value="' . $timing . '" selected>' . $timing . '</option>';
                } else {
                    $_selectform .= '<option value="' . $timing . '">' . $timing . '</option>';
                }
            }
        } else {
            $_query = "SELECT " . $select_value . ", " . $select_title . " FROM " . $select_db . $_selectwhere . $_selectorder;
            //echo $_query;
            $_selectItems = $db->getAll($_query);
            if ($_selectItems) {
                foreach ($_selectItems as $item) {
                    if ($selected == $item[$select_value])
                        $_selectform .= '<option value="' . $item[$select_value] . '" SELECTED>' . $item[$select_title] . '</option>';
                    else
                        $_selectform .= '<option value="' . $item[$select_value] . '">' . $item[$select_title] . '</option>';
                }
            }
        }
        $_selectform .= '</select>';
        return $_selectform;
    }
}
