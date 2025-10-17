<?php
$mainPage = array();
$mainPageVars = $db->getAll("SELECT * FROM settings");
foreach ($mainPageVars as $mainPageVar) {
    $mainPage[$mainPageVar['setname']] = $mainPageVar['value'];
}
$smarty->assign('mainPage', $mainPage);

$mainMenu = $myProject->MainMenu($sec, $id);
$smarty->assign('mainMenu', $mainMenu);
?>