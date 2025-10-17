<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:32:54
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/docs/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:547747932624be296717a03-27655593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5126d5cc8b72b573919c0d170cbecf9071b61af5' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/docs/show.tpl',
      1 => 1648132539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '547747932624be296717a03-27655593',
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
  'unifunc' => 'content_624be2967a8845_34736048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be2967a8845_34736048')) {function content_624be2967a8845_34736048($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_table')) include '/var/www/cl273480/data/www/sintegra-nk.ru/libs/smarty/plugins/function.html_table.php';
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