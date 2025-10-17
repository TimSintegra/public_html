<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:38:15
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/partners/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1117519844624be3d7d0f597-73413391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3248d120e56853f6a5846fc6565ca2112f6b254' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/partners/show.tpl',
      1 => 1648132471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1117519844624be3d7d0f597-73413391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be3d7d1f5a2_19342455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be3d7d1f5a2_19342455')) {function content_624be3d7d1f5a2_19342455($_smarty_tpl) {?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/partners/add/" class="linktheme dobspecial">Добавить партнера</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/partners/" class="linktheme dobspecial">Партнеры</a>
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
/advantages/" class="linktheme dobstat">Преимущества</a>
</div><?php }} ?>