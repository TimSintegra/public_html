<?php /* Smarty version Smarty-3.1.12, created on 2022-03-24 18:14:37
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1163125723623c8add53fbb3-43451986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32b724ed29f5cae6f48e9a689d66ae7960f42deb' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/footer.tpl',
      1 => 1648131759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1163125723623c8add53fbb3-43451986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAIN_URL' => 0,
    'TPL_URL' => 0,
    'MODULE_PATH' => 0,
    'mainMenu' => 0,
    'm' => 0,
    'mainPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_623c8add56d044_53403118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623c8add56d044_53403118')) {function content_623c8add56d044_53403118($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/cl273480/data/www/sintegra-nk.ru/libs/smarty/plugins/modifier.date_format.php';
?><div class="footer">
    <div class="f sb content-wrapper">
        <a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/images/sintegra_logo.png"/></a>
        <ul class="navfoot">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/" <?php if ($_smarty_tpl->tpl_vars['MODULE_PATH']->value=='index'){?>class="active"<?php }?>>Главная</a></li>
            <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mainMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['n']->key;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['active']==1){?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value[$_smarty_tpl->tpl_vars['m']->value]['title'];?>
</a></li>
            <?php } ?>
        </ul>
        <div class="fadd">
            <span>Адрес</span>
            <i><?php echo $_smarty_tpl->tpl_vars['mainPage']->value['address'];?>
</i>
        </div>
        <div class="ftel">
            <span><?php echo $_smarty_tpl->tpl_vars['mainPage']->value['tel'];?>
</span>
            <i><?php echo $_smarty_tpl->tpl_vars['mainPage']->value['rejim'];?>
</i>
        </div>
    </div>
    <div class="f sb content-wrapper">
        <span>©<?php echo smarty_modifier_date_format(time(),"%Y");?>
 ООО «Синтегра». Все права защищены.</span>
        <span>Создано в <a href="http://rbix.ru" target="_blank">“RBIX”</a></span>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
</div><?php }} ?>