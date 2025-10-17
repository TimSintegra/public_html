<?php
/**
 * Admins Sort module
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 03.04.13
 * @time 2:21
 * @version 1.0
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
if ($id != "0" && $subid != "0" && $page != "0") {
    $n_set = 0;;
    $nw_sort = 0;
    if ($id=="down")
    {
        $nw_sort=intval($subid)+1;
        $n_set=intval($subid);
    }
    elseif($id=="up")
    {
        $nw_sort=intval($subid)-1;
        $n_set=intval($subid);
    }
    if ($n_set != 0 && $nw_sort != 0) {
        $data=array('msort'=>$n_set);
        $data2=array('msort'=>$nw_sort);
        $_adminka->UpdateBase("mainmenu", $data, "msort=".$nw_sort);
        $_adminka->UpdateBase("mainmenu", $data2, "id=".intval($page));
    }
}
Header ("Location: " . _ADMIN_URL . "/mainmenu/");