<?php /* Smarty version Smarty-3.1.12, created on 2022-03-24 18:21:44
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291571498623c8c8836c4d7-33395628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de35438f349f86a918abfac6663e3d35759eda59' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/login.tpl',
      1 => 1648131822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291571498623c8c8836c4d7-33395628',
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
  'unifunc' => 'content_623c8c88394df7_34848447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623c8c88394df7_34848447')) {function content_623c8c88394df7_34848447($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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