<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:30:39
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/pages/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2115519437624be20f2ae247-93756889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '219136496e6b595aff1aaff1ad8bf1004132d8c8' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/blocks/pages/show.tpl',
      1 => 1648132468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2115519437624be20f2ae247-93756889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_URL' => 0,
    'blockexpSpecs' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be20f2de745_03597185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be20f2de745_03597185')) {function content_624be20f2de745_03597185($_smarty_tpl) {?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pages/add/" class="linktheme dobserv">Добавить страницу</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pages/" class="linktheme listserv">Список страниц</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pagescat/" class="linktheme dobrazdel">Список категорий</a>
</div>
<?php if (count($_smarty_tpl->tpl_vars['blockexpSpecs']->value)!=0){?>
    <div class="menu">
        <ul id="my-menu" class="sample-menu">
            <li><a href="#">Категории</a>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blockexpSpecs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['s']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pages/show/<?php echo $_smarty_tpl->tpl_vars['blockexpSpecs']->value[$_smarty_tpl->tpl_vars['s']->value]['id'];?>
/">
                                <?php echo $_smarty_tpl->tpl_vars['blockexpSpecs']->value[$_smarty_tpl->tpl_vars['s']->value]['title'];?>

                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
<?php }?><?php }} ?>