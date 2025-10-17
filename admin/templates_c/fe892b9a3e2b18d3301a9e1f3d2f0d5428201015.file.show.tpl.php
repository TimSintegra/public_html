<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:32:54
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/docs/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:598277308624be2967acbd7-49775714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe892b9a3e2b18d3301a9e1f3d2f0d5428201015' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/docs/show.tpl',
      1 => 1648132462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '598277308624be2967acbd7-49775714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be2967f0822_56321874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be2967f0822_56321874')) {function content_624be2967f0822_56321874($_smarty_tpl) {?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/docs/add/" class="linktheme dobprice">Добавить документ</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/docs/" class="linktheme dobprice">Список документов</a>
</div><?php }} ?>