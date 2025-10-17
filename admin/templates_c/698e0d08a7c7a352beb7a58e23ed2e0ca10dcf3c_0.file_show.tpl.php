<?php
/* Smarty version 5.4.3, created on 2025-03-16 00:16:34
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/modules/mainmenu/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d5ee32cfc8f3_08866849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '698e0d08a7c7a352beb7a58e23ed2e0ca10dcf3c' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/modules/mainmenu/show.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d5ee32cfc8f3_08866849 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/modules/mainmenu';
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
            <?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('html_table')->handle(array('loop'=>$_smarty_tpl->getValue('tableData'),'cols'=>$_smarty_tpl->getValue('colsTitles'),'table_attr'=>$_smarty_tpl->getValue('tableAttr'),'tr_attr'=>$_smarty_tpl->getValue('trAttr'),'td_attr'=>$_smarty_tpl->getValue('tdAttr'),'th_attr'=>$_smarty_tpl->getValue('thAttr')), $_smarty_tpl);?>

        </div>
<?php }
}
}
