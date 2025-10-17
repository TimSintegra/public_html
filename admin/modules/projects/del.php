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
$medias = $db->getAll("SELECT image FROM media WHERE pid='" . $id . "' AND `module`='projects'");
if ($medias) {
    foreach($medias as $onephoto) {
        if (is_file(_SERVER_ROOT . "/content/img/photos/" . $onephoto['image'])) {
            unlink(_SERVER_ROOT . "/content/img/photos/" . $onephoto['image']);
        }
        if (is_file(_SERVER_ROOT . "/content/img/photos/sm/" . $onephoto['image'])) {
            unlink(_SERVER_ROOT . "/content/img/photos/sm/" . $onephoto['image']);
        }
    }
}
$_adminka->DelBase("projects", "id=" . $id);
$db->exec("DELETE FROM media WHERE pid='" . $id . "' AND `module`='projects'");
Header ("Location: " . _ADMIN_URL . "/projects/");
