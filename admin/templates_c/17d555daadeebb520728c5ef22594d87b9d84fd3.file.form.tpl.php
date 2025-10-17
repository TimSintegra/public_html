<?php /* Smarty version Smarty-3.1.12, created on 2023-01-14 14:46:40
         compiled from "/home/c/cu11541/public_html/admin/templates/default/modules/login/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178296535663c29620c2cc19-28263693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17d555daadeebb520728c5ef22594d87b9d84fd3' => 
    array (
      0 => '/home/c/cu11541/public_html/admin/templates/default/modules/login/form.tpl',
      1 => 1673277441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178296535663c29620c2cc19-28263693',
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
  'unifunc' => 'content_63c29620c33370_59516877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63c29620c33370_59516877')) {function content_63c29620c33370_59516877($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['errorText']->value!=''){?>
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