<?php
/* Smarty version 5.4.3, created on 2025-03-16 00:16:34
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/blocks/mainmenu/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d5ee32d04126_72021567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2e07d62787df7a9f5b9c663e140195f3b8b68f3' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/blocks/mainmenu/show.tpl',
      1 => 1673277428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d5ee32d04126_72021567 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/blocks/mainmenu';
?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/mainmenu/add/" class="linktheme dobcat">Добавить пункт меню</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/mainmenu/" class="linktheme cats">Основное меню</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/settings/" class="linktheme dobsetopt">Настройки главной</a>
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
