<?php
/* Smarty version 5.4.3, created on 2025-03-18 15:07:23
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/blocks/news/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d961fb9d3786_74347315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39fa2ff21b9e3988491fc99257928b777dd871b2' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/blocks/news/show.tpl',
      1 => 1673277428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d961fb9d3786_74347315 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/blocks/news';
?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/news/add/" class="linktheme dobnews">Добавить новость</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/news/" class="linktheme listnews">Список новостей</a>
</div><?php }
}
