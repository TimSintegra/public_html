<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:37:59
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/contacts/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1816725750624be3c732b7b5-39220787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71a871a635efd90727116300329bd7a59a845f2b' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/contacts/show.tpl',
      1 => 1648132460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1816725750624be3c732b7b5-39220787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be3c73545d0_99866862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be3c73545d0_99866862')) {function content_624be3c73545d0_99866862($_smarty_tpl) {?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/settings/" class="linktheme dobsetopt">Настройки главной</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/mainmenu/" class="linktheme cats">Основное меню</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/advantages/" class="linktheme dobstat">Преимущества</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/partners/" class="linktheme dobspecial">Партнеры</a>
</div>
<?php }} ?>