<?php
/* Smarty version 5.4.3, created on 2026-03-02 17:54:29
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/modules/news/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a5c0c5166bb2_19666667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5025ba46bc5c7976a0e3a5f5d28760a8cf8d165e' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/modules/news/show.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a5c0c5166bb2_19666667 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default/modules/news';
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
