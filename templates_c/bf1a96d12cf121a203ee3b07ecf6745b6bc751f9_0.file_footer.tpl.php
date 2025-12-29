<?php
/* Smarty version 5.4.3, created on 2025-12-29 21:24:03
  from 'file:/opt/lampp/htdocs/public_html/templates/default/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6952e363445dd0_60342571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf1a96d12cf121a203ee3b07ecf6745b6bc751f9' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/footer.tpl',
      1 => 1767039762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6952e363445dd0_60342571 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default';
?><div class="footer">
    <div class="f sb content-wrapper">
        <a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/" class="logo"><img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/new_sintegra_logo.png"/></a>
        <ul class="navfoot">
            <li><a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/" <?php if ($_smarty_tpl->getValue('MODULE_PATH') == 'index') {?>class="active"<?php }?>>Главная</a></li>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('mainMenu'), 'n', false, 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value => $_smarty_tpl->getVariable('n')->value) {
$foreach0DoElse = false;
?>
                <li><a href="<?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['url'];?>
" <?php if ($_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['active'] == 1) {?>class="active"<?php }?>><?php echo $_smarty_tpl->getValue('mainMenu')[$_smarty_tpl->getValue('m')]['title'];?>
</a></li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="contacts-block">
            <div class="fadd">
                <span>Адрес</span>
                <i><?php echo $_smarty_tpl->getValue('mainPage')['address'];?>
</i>
            </div>
            <div class="ftel">
                <span><?php echo $_smarty_tpl->getValue('mainPage')['tel'];?>
</span>
                <i><?php echo $_smarty_tpl->getValue('mainPage')['rejim'];?>
</i>
            </div>
        </div>
    </div>
    <div class="f sb content-wrapper">
        <span>©<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%Y");?>
 ООО «Синтегра». Все права защищены.</span>
        <span>Создано в <a href="http://rbix.ru" target="_blank">“RBIX”</a></span>
    </div>
</div><?php }
}
