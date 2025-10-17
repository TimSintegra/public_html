<?php /* Smarty version Smarty-3.1.12, created on 2022-03-24 18:17:59
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/crumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1410254647623c8ba7283d43-58038924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c1fd94e00bc2cbdb7d913e6d343ff7f75e95f8' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/crumbs.tpl',
      1 => 1648131756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1410254647623c8ba7283d43-58038924',
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
  'unifunc' => 'content_623c8ba72d9b91_33526410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623c8ba72d9b91_33526410')) {function content_623c8ba72d9b91_33526410($_smarty_tpl) {?><ul class="sem">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/">Главная</a></li>
    <?php if (isset($_smarty_tpl->tpl_vars['crumbs']->value)&&$_smarty_tpl->tpl_vars['crumbs']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['crumbs']->value;?>
<?php }?>
</ul><?php }} ?>