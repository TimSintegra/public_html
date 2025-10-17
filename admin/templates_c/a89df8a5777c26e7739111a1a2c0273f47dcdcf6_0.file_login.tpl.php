<?php
/* Smarty version 5.4.3, created on 2025-03-13 20:37:09
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d317c563c012_44242147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a89df8a5777c26e7739111a1a2c0273f47dcdcf6' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/login.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d317c563c012_44242147 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default';
$_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<body>
<div id="login_page">
<div id="login_logo">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/">
        <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/sintegra_logo.png" alt="" />
    </a>
</div>
<div id="login_center">
    <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/modules/login/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div>
</div>
</body>
</html><?php }
}
