<?php /* Smarty version Smarty-3.1.12, created on 2024-01-27 20:44:53
         compiled from "/var/www/s-nk.su/public_html/templates/default/crumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115607696865b54115028209-56815862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '801eea43659e026c42cd540552c16f5360f9e652' => 
    array (
      0 => '/var/www/s-nk.su/public_html/templates/default/crumbs.tpl',
      1 => 1673277574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115607696865b54115028209-56815862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIN_URL' => 0,
    'crumbs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_65b54115029500_73829466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65b54115029500_73829466')) {function content_65b54115029500_73829466($_smarty_tpl) {?><ul class="sem">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/">Главная</a></li>
    <?php if (isset($_smarty_tpl->tpl_vars['crumbs']->value)&&$_smarty_tpl->tpl_vars['crumbs']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['crumbs']->value;?>
<?php }?>
</ul><?php }} ?>