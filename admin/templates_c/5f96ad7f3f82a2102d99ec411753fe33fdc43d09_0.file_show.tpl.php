<?php
/* Smarty version 5.4.3, created on 2026-03-02 12:31:52
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/blocks/settings/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a57528932e68_92122299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f96ad7f3f82a2102d99ec411753fe33fdc43d09' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/blocks/settings/show.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a57528932e68_92122299 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default/blocks/settings';
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
