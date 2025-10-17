<?php
/* Smarty version 5.4.3, created on 2025-03-16 00:16:28
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/blocks/partners/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d5ee2cb4bc45_07046966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0402caec0935a55e7e77c2c6829c002e7ae0e709' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/blocks/partners/show.tpl',
      1 => 1673277428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d5ee2cb4bc45_07046966 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/blocks/partners';
?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/partners/add/" class="linktheme dobspecial">Добавить партнера</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/partners/" class="linktheme dobspecial">Партнеры</a>
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
/advantages/" class="linktheme dobstat">Преимущества</a>
</div><?php }
}
