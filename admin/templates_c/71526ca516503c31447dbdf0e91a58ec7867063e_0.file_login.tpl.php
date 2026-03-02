<?php
/* Smarty version 5.4.3, created on 2026-03-02 12:19:44
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a5725089d010_16798927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71526ca516503c31447dbdf0e91a58ec7867063e' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/login.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a5725089d010_16798927 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default';
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
