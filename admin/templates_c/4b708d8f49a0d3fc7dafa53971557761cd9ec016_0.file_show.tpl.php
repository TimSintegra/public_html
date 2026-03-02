<?php
/* Smarty version 5.4.3, created on 2026-03-02 17:54:10
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/modules/certificates/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a5c0b29d0007_72488031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b708d8f49a0d3fc7dafa53971557761cd9ec016' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/modules/certificates/show.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a5c0b29d0007_72488031 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default/modules/certificates';
if ($_smarty_tpl->getValue('errorData') != '') {?>
            <div id="bigblockheader">
                <div id="bigblockheadermargin">
                    <a href="#"><?php echo $_smarty_tpl->getValue('errorData');?>
</a>
                </div>
            </div>
<?php } else { ?>
        <div id="bigblockheader">
            <div id="bigblockheadermargin">
                <?php echo $_smarty_tpl->getValue('tableHeader');?>

            </div>
        </div>
        <div id="blockpadding">
            <form name="saveMsort" method="post" action="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/certificates/" style="width:100%">
                <input type="submit" value="Сохранить сортировку" name="save_sorting" style="float:left;clear:both; padding:5px; margin:5px;">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_table')->handle(array('loop'=>$_smarty_tpl->getValue('tableData'),'cols'=>$_smarty_tpl->getValue('colsTitles'),'table_attr'=>$_smarty_tpl->getValue('tableAttr'),'tr_attr'=>$_smarty_tpl->getValue('trAttr'),'td_attr'=>$_smarty_tpl->getValue('tdAttr'),'th_attr'=>$_smarty_tpl->getValue('thAttr')), $_smarty_tpl);?>

                <input type="submit" value="Сохранить сортировку" name="save_sorting" style="float:left;clear:both; padding:5px; margin:5px;">
            </form>
        </div>
<?php }
}
}
