<?php
/* Smarty version 5.4.3, created on 2025-10-17 09:20:46
  from 'file:/opt/lampp/htdocs/public_html//templates/default/menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f1ee4ed41081_73426041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aba9f93eb2d99e8e3dd5009d72d41e5781bbf6e0' => 
    array (
      0 => '/opt/lampp/htdocs/public_html//templates/default/menu.tpl',
      1 => 1760685645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f1ee4ed41081_73426041 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default';
?><div id="menu-wrapper">
    <ul class="nav">
        <li><a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/" <?php if ($_smarty_tpl->getValue('MODULE_PATH') == 'index') {?>class="active"<?php }?>>Главная</a></li>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('mainMenu'), 'n', false, 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value => $_smarty_tpl->getVariable('n')->value) {
$foreach0DoElse = false;
?>
            <li>
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['subcats']) != 0) {?>
                <a href="<?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['url'];?>
" <?php if ($_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['active'] == 1) {?>class="active"<?php }?>><?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['title'];?>
</a>
                <div>
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['subcats'], 't', false, 's');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value => $_smarty_tpl->getVariable('t')->value) {
$foreach1DoElse = false;
?>
                        <li><a href="<?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['subcats'][$_smarty_tpl->getValue('s')]['url'];?>
"><?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['subcats'][$_smarty_tpl->getValue('s')]['title'];?>
</a></li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
                </div>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['url'];?>
" <?php if ($_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['active'] == 1) {?>class="active"<?php }?>><?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['title'];?>
</a>
            <?php }?>
            </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

       <!--  <li class="more">
            <span>Ещё</span>
            <ul id="overflow">
            </ul>
        </li> -->
    </ul>
</div><?php }
}
