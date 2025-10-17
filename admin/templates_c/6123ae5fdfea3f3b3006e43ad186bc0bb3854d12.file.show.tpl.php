<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:33:18
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/advantages/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:811972751624be2aed51a64-91522443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6123ae5fdfea3f3b3006e43ad186bc0bb3854d12' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/advantages/show.tpl',
      1 => 1648132459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '811972751624be2aed51a64-91522443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be2aed86816_47230291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be2aed86816_47230291')) {function content_624be2aed86816_47230291($_smarty_tpl) {?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/advantages/add/" class="linktheme dobstat">Добавить преимущество</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/advantages/" class="linktheme dobstat">Преимущества</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/settings/" class="linktheme dobsetopt">Настройки главной</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/mainmenu/" class="linktheme cats">Основное меню</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/partners/" class="linktheme dobspecial">Партнеры</a>
</div>
<?php }} ?>