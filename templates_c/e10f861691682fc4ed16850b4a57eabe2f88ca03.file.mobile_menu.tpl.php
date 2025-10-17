<?php /* Smarty version Smarty-3.1.12, created on 2023-01-10 10:15:24
         compiled from "/home/c/cu11541/public_html/templates/default/mobile_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160352804863bd108c5ad073-82005091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e10f861691682fc4ed16850b4a57eabe2f88ca03' => 
    array (
      0 => '/home/c/cu11541/public_html/templates/default/mobile_menu.tpl',
      1 => 1673277577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160352804863bd108c5ad073-82005091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIN_URL' => 0,
    'mainMenu' => 0,
    'm' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_63bd108c5b9150_08468037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63bd108c5b9150_08468037')) {function content_63bd108c5b9150_08468037($_smarty_tpl) {?><nav id="menu">
    <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/">Главная</a></li>
        <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mainMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['n']->key;
?>
            <li>
                <?php if (count($_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['subcats'])!=0){?>
                    <span><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['title'];?>
</span>
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
                <?php }else{ ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['title'];?>
</a>
                <?php }?>
            </li>
        <?php } ?>
    </ul>
</nav>
<?php }} ?>