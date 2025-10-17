<?php
/* Smarty version 5.4.3, created on 2025-10-09 15:24:00
  from 'file:/var/www/s-nk.su/public_html//templates/default/mobile_menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68e7b770910330_96554016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c85eba8f6397f314ff7623196262c10ae9a56917' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/mobile_menu.tpl',
      1 => 1760016236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68e7b770910330_96554016 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default';
?><nav id="menu">
    <ul>
        <li><a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/">Главная</a></li>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('mainMenu'), 'n', false, 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value => $_smarty_tpl->getVariable('n')->value) {
$foreach0DoElse = false;
?>
            <li>
                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['subcats']) != 0) {?>
                    <span><?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['title'];?>
</span>
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
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['url'];?>
"><?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['title'];?>
</a>
                <?php }?>
            </li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</nav>
<?php }
}
