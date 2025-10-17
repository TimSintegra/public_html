<?php
/* Smarty version 5.4.3, created on 2025-10-17 09:36:52
  from 'file:/opt/lampp/htdocs/public_html//templates/default/crumbs.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f1f214a0ccf0_42278594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '829d880c6e8db70c3c50d9e2c352a3861f95ed7f' => 
    array (
      0 => '/opt/lampp/htdocs/public_html//templates/default/crumbs.tpl',
      1 => 1760686604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f1f214a0ccf0_42278594 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default';
?><ul class="sem">
    <li><a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/">Главная</a></li>
    <?php if ((true && ($_smarty_tpl->hasVariable('crumbs') && null !== ($_smarty_tpl->getValue('crumbs') ?? null))) && $_smarty_tpl->getValue('crumbs') != '') {
echo $_smarty_tpl->getValue('crumbs');
}?>
</ul><?php }
}
