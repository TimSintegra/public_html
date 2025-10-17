<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:30:20
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/mainmenu/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:465982645624be1fced02b2-19767577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82ff526da1b6a3f9a33fb09b61c6743a4ce5121b' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/mainmenu/show.tpl',
      1 => 1648132547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '465982645624be1fced02b2-19767577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorData' => 0,
    'tableHeader' => 0,
    'tableData' => 0,
    'colsTitles' => 0,
    'tableAttr' => 0,
    'trAttr' => 0,
    'tdAttr' => 0,
    'thAttr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be1fd139b06_17861432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be1fd139b06_17861432')) {function content_624be1fd139b06_17861432($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_table')) include '/var/www/cl273480/data/www/sintegra-nk.ru/libs/smarty/plugins/function.html_table.php';
?><?php if ($_smarty_tpl->tpl_vars['errorData']->value!=''){?>
            <div id="bigblockheader">
                <div id="bigblockheadermargin">
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['errorData']->value;?>
</a>
                </div>
            </div>
<?php }else{ ?>
        <div id="bigblockheader">
            <div id="bigblockheadermargin">
                <?php echo $_smarty_tpl->tpl_vars['tableHeader']->value;?>

            </div>
        </div>
        <div id="blockpadding">
            <?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['tableData']->value,'cols'=>$_smarty_tpl->tpl_vars['colsTitles']->value,'table_attr'=>$_smarty_tpl->tpl_vars['tableAttr']->value,'tr_attr'=>$_smarty_tpl->tpl_vars['trAttr']->value,'td_attr'=>$_smarty_tpl->tpl_vars['tdAttr']->value,'th_attr'=>$_smarty_tpl->tpl_vars['thAttr']->value),$_smarty_tpl);?>

        </div>
<?php }?>
<?php }} ?>