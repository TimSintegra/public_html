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
if ($id != '') {
    $_image = $db->getOne("SELECT image FROM partners WHERE id='" . $id . "'");
    $msort = $db->getOne("select msort from partners where id='" . $id . "'");
    if ($_adminka->DelBase("partners", "id=".$id)===true) {
        if ($_image != '') {
            if (is_file(_SERVER_ROOT . "/content/img/partners/" . $_image)){
                unlink(_SERVER_ROOT . "/content/img/partners/" . $_image);
            }
        }
        $data = array('msort'=>'-1');
        $_adminka->UpdateBase("partners", $data, "msort>" . $msort);
        Header ("Location: " . _ADMIN_URL . "/partners/");
    } else {
        header("Location:" . _ADMIN_URL . "/");
    }
} else {
    header("Location:" . _ADMIN_URL . "/");
}

