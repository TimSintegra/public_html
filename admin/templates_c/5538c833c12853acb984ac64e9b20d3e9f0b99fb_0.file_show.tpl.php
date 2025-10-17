<?php
/* Smarty version 5.4.3, created on 2025-03-18 21:36:15
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/blocks/servicescats/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d9bd1fe302d5_74787786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5538c833c12853acb984ac64e9b20d3e9f0b99fb' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/blocks/servicescats/show.tpl',
      1 => 1673277428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d9bd1fe302d5_74787786 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/blocks/servicescats';
?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/servicescats/add/" class="linktheme dobrazdel">Добавить категорию</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/servicescats/" class="linktheme dobrazdel">Список категорий</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/services/" class="linktheme listserv">Список услуг</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/services/add/" class="linktheme dobserv">Добавить услугу</a>
</div><?php }
}
