<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:37:03
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1486219151624be38f072cb5-44352775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a92e1ddd15b839e92a6f04b6088c377d2c8c67fd' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/error.tpl',
      1 => 1648131817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1486219151624be38f072cb5-44352775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be38f0cef46_13126277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be38f0cef46_13126277')) {function content_624be38f0cef46_13126277($_smarty_tpl) {?><div class="messageblock_l">
    <div class="messageblockramka_l">
        <div class="error_l"><?php echo $_smarty_tpl->tpl_vars['errorText']->value;?>
</div>
    </div>
</div><?php }} ?>