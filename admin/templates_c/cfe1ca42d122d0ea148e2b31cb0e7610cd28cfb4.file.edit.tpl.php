<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:38:36
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/pagescat/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21377709624be3ecb482d1-90865223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfe1ca42d122d0ea148e2b31cb0e7610cd28cfb4' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/pagescat/edit.tpl',
      1 => 1648132553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21377709624be3ecb482d1-90865223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'successText' => 0,
    'ADMIN_URL' => 0,
    'formDetails' => 0,
    '_val' => 0,
    'hiddenInputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be3ecb99572_21942330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be3ecb99572_21942330')) {function content_624be3ecb99572_21942330($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['successText']->value!=''){?>
    <div class="success"><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pagescat/">Перейти к списку категорий</a></div>
<?php }else{ ?>
    <div id="bigblockheader">
        <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->tpl_vars['formDetails']->value['formTitle'];?>
</h1></div>
    </div>
    <div id="blockpadding">
        <form action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pagescat/edit/" method="post" name="advsform">
            <div class="rowform"><label>Название категории:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['title'];?>
"></div>
            <div class="rowform"><label>Основная информация:</label><div class="main_content_textarea"><textarea id="main_content" name="main_content"><?php echo $_smarty_tpl->tpl_vars['_val']->value['main_content'];?>
</textarea></div></div>
            <div class="rowformbutton">
                <?php echo $_smarty_tpl->tpl_vars['hiddenInputs']->value;?>

                <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['formDetails']->value['submitName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['formDetails']->value['submitValue'];?>
" class="formbutton">
            </div>
        </form>
    </div>
<?php }?><?php }} ?>