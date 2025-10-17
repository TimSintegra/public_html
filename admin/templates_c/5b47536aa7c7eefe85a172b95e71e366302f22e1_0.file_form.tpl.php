<?php
/* Smarty version 5.4.3, created on 2025-03-13 20:37:09
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/modules/login/form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d317c564b066_03587513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b47536aa7c7eefe85a172b95e71e366302f22e1' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/modules/login/form.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d317c564b066_03587513 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/modules/login';
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
