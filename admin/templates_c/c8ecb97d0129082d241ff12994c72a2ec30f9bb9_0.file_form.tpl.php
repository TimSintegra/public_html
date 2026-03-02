<?php
/* Smarty version 5.4.3, created on 2026-03-02 12:19:44
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/modules/login/form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a572508acc11_47302413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8ecb97d0129082d241ff12994c72a2ec30f9bb9' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/modules/login/form.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a572508acc11_47302413 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default/modules/login';
if ($_smarty_tpl->getValue('errorText') != '') {
$_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?>
<div id="bigblockshadow_l">
    <div id="bigblock_l">
        <div id="bigblockheader_l">
            <div id="bigblockheadermargin_l"><h1>Вход в административный раздел</h1></div>
        </div>
        <div id="blockpadding">
            <form action="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/login/" method="post">
                <div class="rowform"><label>Логин:</label><input type="text" name="username" value=""></div>
                <div class="rowform"><label>Пароль:</label><input type="password" name="password"></div>
                <div class="rowformbutton">
                    <input type="submit" name="sublogin" value="Войти" class="formbutton">
                </div>
            </form>
        </div>
    </div>
</div>

<?php }
}
