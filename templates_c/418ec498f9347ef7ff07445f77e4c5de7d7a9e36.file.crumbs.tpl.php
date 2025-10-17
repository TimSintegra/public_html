<?php /* Smarty version Smarty-3.1.12, created on 2023-01-10 10:19:36
         compiled from "/home/c/cu11541/public_html/templates/default/crumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105300246463bd1188deaf55-20312232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '418ec498f9347ef7ff07445f77e4c5de7d7a9e36' => 
    array (
      0 => '/home/c/cu11541/public_html/templates/default/crumbs.tpl',
      1 => 1673277574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105300246463bd1188deaf55-20312232',
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
  'unifunc' => 'content_63bd1188df0597_88262819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63bd1188df0597_88262819')) {function content_63bd1188df0597_88262819($_smarty_tpl) {?><ul class="sem">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/">Главная</a></li>
    <?php if (isset($_smarty_tpl->tpl_vars['crumbs']->value)&&$_smarty_tpl->tpl_vars['crumbs']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['crumbs']->value;?>
<?php }?>
</ul><?php }} ?>