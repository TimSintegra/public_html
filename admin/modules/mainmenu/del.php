<?php
/**
 * Admin delete module
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 03.04.13
 * @time 2:13
 * @version 1.1
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
$delExceptions = array();

if (isset($id) && $id != 0) {
    if (!in_array($id, $delExceptions)) {
        $msort=$db->getOne("select msort from mainmenu where id='" . $id . "'");
        if ($_adminka->DelBase("mainmenu", "id=" . $id)===true) {
            $data=array('msort'=>'-1');
            $_adminka->UpdateBase("mainmenu", $data, "msort>".$msort);
            $successText = 'Информация удалена.';
            Header ("Location: " . _ADMIN_URL . "/mainmenu/");
        } else {
            Header ("Location: " . _ADMIN_URL . "/mainmenu/");
        }
    } else {
        Header ("Location: " . _ADMIN_URL . "/mainmenu/");
    }
} else {
    header("Location:" . _ADMIN_URL . "/");
}

