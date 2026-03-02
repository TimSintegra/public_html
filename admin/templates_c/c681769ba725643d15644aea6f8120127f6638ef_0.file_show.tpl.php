<?php
/* Smarty version 5.4.3, created on 2026-03-02 17:54:23
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/modules/docs/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a5c0bf7e00a3_70580628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c681769ba725643d15644aea6f8120127f6638ef' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/modules/docs/show.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a5c0bf7e00a3_70580628 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default/modules/docs';
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
