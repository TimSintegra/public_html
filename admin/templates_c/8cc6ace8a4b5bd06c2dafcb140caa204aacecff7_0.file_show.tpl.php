<?php
/* Smarty version 5.4.3, created on 2026-03-02 17:54:29
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/blocks/news/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a5c0c516bda5_35617702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cc6ace8a4b5bd06c2dafcb140caa204aacecff7' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/blocks/news/show.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a5c0c516bda5_35617702 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default/blocks/news';
?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/news/add/" class="linktheme dobnews">Добавить новость</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/news/" class="linktheme listnews">Список новостей</a>
</div><?php }
}
