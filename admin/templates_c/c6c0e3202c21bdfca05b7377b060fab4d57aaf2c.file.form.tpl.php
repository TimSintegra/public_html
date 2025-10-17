<?php /* Smarty version Smarty-3.1.12, created on 2022-03-24 18:21:44
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/login/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1764874066623c8c883adb54-89375992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6c0e3202c21bdfca05b7377b060fab4d57aaf2c' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/login/form.tpl',
      1 => 1648132542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1764874066623c8c883adb54-89375992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorText' => 0,
    'ADMIN_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_623c8c883ecdf6_63550118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623c8c883ecdf6_63550118')) {function content_623c8c883ecdf6_63550118($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['errorText']->value!=''){?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<div id="bigblockshadow_l">
    <div id="bigblock_l">
        <div id="bigblockheader_l">
            <div id="bigblockheadermargin_l"><h1>Вход в административный раздел</h1></div>
        </div>
        <div id="blockpadding">
            <form action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
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

<?php }} ?>