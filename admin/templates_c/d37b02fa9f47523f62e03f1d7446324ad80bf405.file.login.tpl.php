<?php /* Smarty version Smarty-3.1.12, created on 2023-01-14 14:46:40
         compiled from "/home/c/cu11541/public_html/admin/templates/default/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102868921463c29620be8ba3-98308287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd37b02fa9f47523f62e03f1d7446324ad80bf405' => 
    array (
      0 => '/home/c/cu11541/public_html/admin/templates/default/login.tpl',
      1 => 1673277441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102868921463c29620be8ba3-98308287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_URL' => 0,
    'TPL_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_63c29620c18547_59058602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63c29620c18547_59058602')) {function content_63c29620c18547_59058602($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div id="login_page">
<div id="login_logo">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/">
        <img src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/images/sintegra_logo.png" alt="" />
    </a>
</div>
<div id="login_center">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/modules/login/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div>
</body>
</html><?php }} ?>