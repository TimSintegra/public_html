<?php
/* Smarty version 5.4.3, created on 2026-03-02 12:31:52
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/mainmenu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a575288c1b54_83419492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f8642b424d6bd47367129433bc2d5b8aaa13f94' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/mainmenu.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a575288c1b54_83419492 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default';
?><div id="myslidemenu" class="jqueryslidemenu">
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('adminMenu')) > 0) {?>
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('adminMenu'), 'step1value');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('step1value')->value) {
$foreach0DoElse = false;
?>
            <?php if (is_array($_smarty_tpl->getValue('step1value')['submenu']) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('step1value')['submenu']) > 0) {?>
                <?php if (($_smarty_tpl->getValue('step1value')['module']) != 'none') {?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/<?php echo $_smarty_tpl->getValue('step1value')['module'];?>
/" class="<?php echo $_smarty_tpl->getValue('step1value')['class'];?>
">
                            <?php echo $_smarty_tpl->getValue('step1value')['title'];?>

                        </a>
                <?php } else { ?>
                    <li>
                        <a href="#" class="<?php echo $_smarty_tpl->getValue('step1value')['class'];?>
">
                            <?php echo $_smarty_tpl->getValue('step1value')['title'];?>

                        </a>
                <?php }?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('step1value')['submenu'], 'step2value');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('step2value')->value) {
$foreach1DoElse = false;
?>
                            <?php if (($_smarty_tpl->getValue('step2value')['module']) != 'none') {?>
                                <li><a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/<?php echo $_smarty_tpl->getValue('step2value')['module'];?>
/" class="<?php echo $_smarty_tpl->getValue('step2value')['class'];?>
"><?php echo $_smarty_tpl->getValue('step2value')['title'];?>
</a></li>
                            <?php } else { ?>
                                <li><a href="#" class="<?php echo $_smarty_tpl->getValue('step2value')['class'];?>
"><?php echo $_smarty_tpl->getValue('step2value')['title'];?>
</a></li>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
            <?php } else { ?>
                <?php if (($_smarty_tpl->getValue('step1value')['module']) != 'none') {?>
                    <li><a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/<?php echo $_smarty_tpl->getValue('step1value')['module'];?>
/" class="<?php echo $_smarty_tpl->getValue('step1value')['class'];?>
"><?php echo $_smarty_tpl->getValue('step1value')['title'];?>
</a></li>
                <?php } else { ?>
                    <li><a href="#" class="<?php echo $_smarty_tpl->getValue('step1value')['class'];?>
"><?php echo $_smarty_tpl->getValue('step1value')['title'];?>
</a></li>
                <?php }?>
            <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>
    <br style="clear: left" />
</div>
<?php }
}
