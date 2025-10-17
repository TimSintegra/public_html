<?php
/* Smarty version 5.4.3, created on 2025-03-16 00:08:48
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/blocks/settings/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d5ec60a0f1f8_18407523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a59c35986cc44c1d1c04b6cb47e1cc58e65f615' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/blocks/settings/show.tpl',
      1 => 1673277428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d5ec60a0f1f8_18407523 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/blocks/settings';
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
