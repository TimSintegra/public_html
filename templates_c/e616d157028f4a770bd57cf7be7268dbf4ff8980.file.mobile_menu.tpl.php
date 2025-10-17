<?php /* Smarty version Smarty-3.1.12, created on 2024-01-27 20:44:03
         compiled from "/var/www/s-nk.su/public_html/templates/default/mobile_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:901626365b540e368e983-01061498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e616d157028f4a770bd57cf7be7268dbf4ff8980' => 
    array (
      0 => '/var/www/s-nk.su/public_html/templates/default/mobile_menu.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '901626365b540e368e983-01061498',
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
  'unifunc' => 'content_65b540e3694334_65319190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65b540e3694334_65319190')) {function content_65b540e3694334_65319190($_smarty_tpl) {?><nav id="menu">
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