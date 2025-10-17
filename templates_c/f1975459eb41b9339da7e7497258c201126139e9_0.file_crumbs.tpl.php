<?php
/* Smarty version 5.4.3, created on 2025-03-13 15:40:03
  from 'file:/var/www/s-nk.su/public_html//templates/default/crumbs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d2d223c206e5_15698395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1975459eb41b9339da7e7497258c201126139e9' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/crumbs.tpl',
      1 => 1673277574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2d223c206e5_15698395 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default';
?><ul class="sem">
    <li><a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/">Главная</a></li>
    <?php if ((true && ($_smarty_tpl->hasVariable('crumbs') && null !== ($_smarty_tpl->getValue('crumbs') ?? null))) && $_smarty_tpl->getValue('crumbs') != '') {
echo $_smarty_tpl->getValue('crumbs');
}?>
</ul><?php }
}
