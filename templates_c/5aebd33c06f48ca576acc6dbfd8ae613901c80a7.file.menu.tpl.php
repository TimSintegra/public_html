<?php /* Smarty version Smarty-3.1.12, created on 2022-03-24 18:14:37
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1290803385623c8add4ba697-48119921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aebd33c06f48ca576acc6dbfd8ae613901c80a7' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/menu.tpl',
      1 => 1648131762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1290803385623c8add4ba697-48119921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIN_URL' => 0,
    'MODULE_PATH' => 0,
    'mainMenu' => 0,
    'm' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_623c8add4cb8d4_39798159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623c8add4cb8d4_39798159')) {function content_623c8add4cb8d4_39798159($_smarty_tpl) {?><div id="menu-wrapper">
    <ul class="nav">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/" <?php if ($_smarty_tpl->tpl_vars['MODULE_PATH']->value=='index'){?>class="active"<?php }?>>Главная</a></li>
        <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mainMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['n']->key;
?>
            <li>
            <?php if (count($_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['subcats'])!=0){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['active']==1){?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['title'];?>
</a>
                <div>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['subcats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['s']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['subcats'][$_smarty_tpl->tpl_vars['s']->value]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['subcats'][$_smarty_tpl->tpl_vars['s']->value]['title'];?>
</a></li>
                    <?php } ?>
                </ul>
                </div>
            <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['active']==1){?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['title'];?>
</a>
            <?php }?>
            </li>
        <?php } ?>

        <li class="more">
            <span>Ещё</span>
            <ul id="overflow">
            </ul>
        </li>
    </ul>
</div><?php }} ?>