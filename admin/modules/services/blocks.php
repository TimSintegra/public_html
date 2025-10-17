<?php
/**
 * Index blocks
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 13.05.13
 * @time 3:35
 * @version 1.0
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
$expSpecs = array();

$querySpecs = "SELECT * FROM servicescats ORDER BY id";
$eSp = $db->getAll($querySpecs);
if ($eSp){
    foreach ($eSp as $_spec) {
        $Titlelen = mb_strlen($_spec['title'], 'UTF-8');
        if($Titlelen>23) {
            $specTitle = mb_substr($_spec['title'], 0, 21, 'UTF-8') . '...';
        } else {
            $specTitle = $_spec['title'];
        }
        $expSpecs[$_spec['id']] = array(
            'title' => $specTitle,
            'id'=>$_spec['id']
        );
    }
}
$smarty->assign('section', $act);
$smarty->assign('blockexpSpecs', $expSpecs);