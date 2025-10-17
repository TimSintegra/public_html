<?php /* Smarty version Smarty-3.1.12, created on 2024-01-27 20:44:03
         compiled from "/var/www/s-nk.su/public_html/templates/default/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63122307365b540e3694ef8-06101575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8801e210093a9563797052ca335f28fef25d75' => 
    array (
      0 => '/var/www/s-nk.su/public_html/templates/default/menu.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63122307365b540e3694ef8-06101575',
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
  'unifunc' => 'content_65b540e369ab31_28178627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65b540e369ab31_28178627')) {function content_65b540e369ab31_28178627($_smarty_tpl) {?><div id="menu-wrapper">
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