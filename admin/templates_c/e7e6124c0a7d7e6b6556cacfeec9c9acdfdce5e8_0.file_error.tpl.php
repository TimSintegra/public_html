<?php
/* Smarty version 5.4.3, created on 2025-03-18 21:32:00
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/error.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d9bc20328f21_03681255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7e6124c0a7d7e6b6556cacfeec9c9acdfdce5e8' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/error.tpl',
      1 => 1673277440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d9bc20328f21_03681255 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default';
?><div class="messageblock_l">
    <div class="messageblockramka_l">
        <div class="error_l"><?php echo $_smarty_tpl->getValue('errorText');?>
</div>
    </div>
</div><?php }
}
