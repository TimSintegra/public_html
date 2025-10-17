<?php
/* Smarty version 5.4.3, created on 2025-03-18 21:36:15
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/modules/servicescats/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d9bd1fe2cb60_18683520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ffa8a2d4a07d88eb61d8d9c3fe11460e2f0940a' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/modules/servicescats/show.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d9bd1fe2cb60_18683520 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/modules/servicescats';
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
/servicescats/" style="width:100%">
            <input type="submit" value="Сохранить сортировку" name="save_sorting" style="float:left;clear:both; padding:5px; margin:5px;">
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_table')->handle(array('loop'=>$_smarty_tpl->getValue('tableData'),'cols'=>$_smarty_tpl->getValue('colsTitles'),'table_attr'=>$_smarty_tpl->getValue('tableAttr'),'tr_attr'=>$_smarty_tpl->getValue('trAttr'),'td_attr'=>$_smarty_tpl->getValue('tdAttr'),'th_attr'=>$_smarty_tpl->getValue('thAttr')), $_smarty_tpl);?>

            <input type="submit" value="Сохранить сортировку" name="save_sorting" style="float:left;clear:both; padding:5px; margin:5px;">
        </form>
    </div>
<?php }
}
}
