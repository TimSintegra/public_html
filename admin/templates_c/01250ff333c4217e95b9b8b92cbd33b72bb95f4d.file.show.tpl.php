<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:38:31
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/pagescat/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:992307256624be3e7e3b642-55036508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01250ff333c4217e95b9b8b92cbd33b72bb95f4d' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/pagescat/show.tpl',
      1 => 1648132470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '992307256624be3e7e3b642-55036508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be3e7ee7502_74663607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be3e7ee7502_74663607')) {function content_624be3e7ee7502_74663607($_smarty_tpl) {?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pagescat/add/" class="linktheme dobrazdel">Добавить категорию</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pagescat/" class="linktheme dobrazdel">Список категорий</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pages/" class="linktheme listserv">Список страниц</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pages/add/" class="linktheme dobserv">Добавить страницу</a>
</div><?php }} ?>