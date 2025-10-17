<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:30:21
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/mainmenu/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1595934300624be1fd13e5b4-24855171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69d1a574a6280d7fdfc8b51b0d6e6899424d45dc' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/mainmenu/show.tpl',
      1 => 1648132465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1595934300624be1fd13e5b4-24855171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be1fd1af083_22813333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be1fd1af083_22813333')) {function content_624be1fd1af083_22813333($_smarty_tpl) {?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/mainmenu/add/" class="linktheme dobcat">Добавить пункт меню</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/mainmenu/" class="linktheme cats">Основное меню</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/settings/" class="linktheme dobsetopt">Настройки главной</a>
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