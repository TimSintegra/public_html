<?php
/* Smarty version 5.4.3, created on 2025-03-16 00:25:35
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/blocks/advantages/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d5f04f723e15_12473914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9c160641cc8b8aff6ef1cb424b9dbe6ef685057' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/blocks/advantages/show.tpl',
      1 => 1673277428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d5f04f723e15_12473914 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/blocks/advantages';
?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/advantages/add/" class="linktheme dobstat">Добавить преимущество</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/advantages/" class="linktheme dobstat">Преимущества</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/settings/" class="linktheme dobsetopt">Настройки главной</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/mainmenu/" class="linktheme cats">Основное меню</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/partners/" class="linktheme dobspecial">Партнеры</a>
</div>
<?php }
}
