<?php
/* Smarty version 5.4.3, created on 2025-03-18 15:07:22
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/blocks/contacts/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d961fa2d3056_51101190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6012ba8717db1a52ff02a2ea8728ad934e326f4' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/blocks/contacts/show.tpl',
      1 => 1673277428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d961fa2d3056_51101190 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/blocks/contacts';
?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/settings/" class="linktheme dobsetopt">Настройки главной</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/mainmenu/" class="linktheme cats">Основное меню</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/advantages/" class="linktheme dobstat">Преимущества</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/partners/" class="linktheme dobspecial">Партнеры</a>
</div>
<?php }
}
