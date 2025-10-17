<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:38:15
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/partners/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:440214623624be3d7cd46f6-91014806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6156688bdae8ed20737a3ddc6ead204f918d9a0' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/partners/show.tpl',
      1 => 1648132556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '440214623624be3d7cd46f6-91014806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorData' => 0,
    'tableHeader' => 0,
    'ADMIN_URL' => 0,
    'tableData' => 0,
    'colsTitles' => 0,
    'tableAttr' => 0,
    'trAttr' => 0,
    'tdAttr' => 0,
    'thAttr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be3d7d0b355_56360772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be3d7d0b355_56360772')) {function content_624be3d7d0b355_56360772($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_table')) include '/var/www/cl273480/data/www/sintegra-nk.ru/libs/smarty/plugins/function.html_table.php';
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
            <form name="saveMsort" method="post" action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/partners/" style="width:100%">
                <input type="submit" value="Сохранить сортировку" name="save_sorting" style="float:left;clear:both; padding:5px; margin:5px;">
                <?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['tableData']->value,'cols'=>$_smarty_tpl->tpl_vars['colsTitles']->value,'table_attr'=>$_smarty_tpl->tpl_vars['tableAttr']->value,'tr_attr'=>$_smarty_tpl->tpl_vars['trAttr']->value,'td_attr'=>$_smarty_tpl->tpl_vars['tdAttr']->value,'th_attr'=>$_smarty_tpl->tpl_vars['thAttr']->value),$_smarty_tpl);?>

                <input type="submit" value="Сохранить сортировку" name="save_sorting" style="float:left;clear:both; padding:5px; margin:5px;">
            </form>
        </div>
<?php }?>
<?php }} ?>