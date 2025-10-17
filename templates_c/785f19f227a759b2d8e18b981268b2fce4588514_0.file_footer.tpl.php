<?php
/* Smarty version 5.4.3, created on 2025-10-17 09:19:16
  from 'file:/opt/lampp/htdocs/public_html//templates/default/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f1edf45421b9_44841031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '785f19f227a759b2d8e18b981268b2fce4588514' => 
    array (
      0 => '/opt/lampp/htdocs/public_html//templates/default/footer.tpl',
      1 => 1760685513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f1edf45421b9_44841031 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default';
?><div class="footer">
    <div class="f sb content-wrapper">
        <a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/" class="logo"><img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/new_sintegra_logo.png"/></a>
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
    <div class="f sb content-wrapper">
        <span>©<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%Y");?>
 ООО «Синтегра». Все права защищены.</span>
        <span>Создано в <a href="http://rbix.ru" target="_blank">“RBIX”</a></span>
    </div>
</div>

<?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div style="display: none;" id="bell2">
    <h2>Перезвонить Вам?</h2>
    <p>Оставьте Ваши данные и мы Вам перезвоним!</p>
    <form>
        <div class="frm-blk w12">
            <input name="uname1" id="uname1" type="text" class="styler" placeholder="Ваше Имя">
        </div>
        <div class="frm-blk w12">
            <input name="tel1" id="tel1" type="text" class="styler" placeholder="Телефон">
        </div>
        <div class="frm-blk w12">
            <input name="email1" id="email1" type="text" class="styler" placeholder="E-mail">
        </div>
        <div class="frm-blk w12">
            <textarea  name="message1" id="message1" class="styler" placeholder="Текст сообщения" rows="5"></textarea>
        </div>
        <div class="w12 center">
            <input type="submit" value="Отправить заявку" class="wh_btn mbtn" id="submit1">
        </div>
    </form>
</div><?php }
}
