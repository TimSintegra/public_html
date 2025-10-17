<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:29:55
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/settings/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1236017461624be1e3cbde65-22617933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03389ad44f95ba2d4377376f98ea6fdeecc3360d' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/settings/show.tpl',
      1 => 1648132478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236017461624be1e3cbde65-22617933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be1e3d0a438_31220172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be1e3d0a438_31220172')) {function content_624be1e3d0a438_31220172($_smarty_tpl) {?><div class="leftbuttons">
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