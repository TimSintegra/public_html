<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:29:55
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/mainmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2147172071624be1e37b05d6-83975336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3e8b81dc4df502042659d4d1e9dec2212c84bef' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/mainmenu.tpl',
      1 => 1648131823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2147172071624be1e37b05d6-83975336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminMenu' => 0,
    'step1value' => 0,
    'ADMIN_URL' => 0,
    'step2value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be1e3841053_56541179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be1e3841053_56541179')) {function content_624be1e3841053_56541179($_smarty_tpl) {?><div id="myslidemenu" class="jqueryslidemenu">
<?php if (count($_smarty_tpl->tpl_vars['adminMenu']->value)>0){?>
    <ul>
        <?php  $_smarty_tpl->tpl_vars['step1value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step1value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adminMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['step1value']->key => $_smarty_tpl->tpl_vars['step1value']->value){
$_smarty_tpl->tpl_vars['step1value']->_loop = true;
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['step1value']->value['submenu'])&&count($_smarty_tpl->tpl_vars['step1value']->value['submenu'])>0){?>
                <?php if (($_smarty_tpl->tpl_vars['step1value']->value['module'])!='none'){?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['step1value']->value['module'];?>
/" class="<?php echo $_smarty_tpl->tpl_vars['step1value']->value['class'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['step1value']->value['title'];?>

                        </a>
                <?php }else{ ?>
                    <li>
                        <a href="#" class="<?php echo $_smarty_tpl->tpl_vars['step1value']->value['class'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['step1value']->value['title'];?>

                        </a>
                <?php }?>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['step2value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step2value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['step1value']->value['submenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['step2value']->key => $_smarty_tpl->tpl_vars['step2value']->value){
$_smarty_tpl->tpl_vars['step2value']->_loop = true;
?>
                            <?php if (($_smarty_tpl->tpl_vars['step2value']->value['module'])!='none'){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['step2value']->value['module'];?>
/" class="<?php echo $_smarty_tpl->tpl_vars['step2value']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['step2value']->value['title'];?>
</a></li>
                            <?php }else{ ?>
                                <li><a href="#" class="<?php echo $_smarty_tpl->tpl_vars['step2value']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['step2value']->value['title'];?>
</a></li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </li>
            <?php }else{ ?>
                <?php if (($_smarty_tpl->tpl_vars['step1value']->value['module'])!='none'){?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['step1value']->value['module'];?>
/" class="<?php echo $_smarty_tpl->tpl_vars['step1value']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['step1value']->value['title'];?>
</a></li>
                <?php }else{ ?>
                    <li><a href="#" class="<?php echo $_smarty_tpl->tpl_vars['step1value']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['step1value']->value['title'];?>
</a></li>
                <?php }?>
            <?php }?>
        <?php } ?>
    </ul>
<?php }?>
    <br style="clear: left" />
</div>
<?php }} ?>