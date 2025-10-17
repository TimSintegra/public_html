<?php
/* Smarty version 5.4.3, created on 2025-03-16 00:38:53
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/blocks/pagescat/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d5f36d356070_96821606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90f7ac3ab5c6a3119b097fc067dd657a5a32e750' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/blocks/pagescat/show.tpl',
      1 => 1673277428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d5f36d356070_96821606 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/blocks/pagescat';
?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/pagescat/add/" class="linktheme dobrazdel">Добавить категорию</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/pagescat/" class="linktheme dobrazdel">Список категорий</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/pages/" class="linktheme listserv">Список страниц</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/pages/add/" class="linktheme dobserv">Добавить страницу</a>
</div><?php }
}
