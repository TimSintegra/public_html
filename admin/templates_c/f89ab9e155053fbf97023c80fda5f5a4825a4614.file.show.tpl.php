<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:37:59
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/contacts/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:480793552624be3c72ba985-29841797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f89ab9e155053fbf97023c80fda5f5a4825a4614' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/contacts/show.tpl',
      1 => 1648132534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '480793552624be3c72ba985-29841797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formDetails' => 0,
    'ADMIN_URL' => 0,
    '_val' => 0,
    'hiddenInputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be3c7326ca2_24469633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be3c7326ca2_24469633')) {function content_624be3c7326ca2_24469633($_smarty_tpl) {?><div id="bigblockheader">
    <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->tpl_vars['formDetails']->value['formTitle'];?>
</h1></div>
</div>
<div id="blockpadding">
    <form action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/contacts/show/" method="post" name="aboutform">
        <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['title'];?>
"></div>
        <div class="rowform"><label>Доп.заголовок:</label><input type="text" name="title2" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['title2'];?>
"></div>
        <div class="rowform"><label>Телефон:</label><input type="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['tel'];?>
"></div>
        <div class="rowform"><label>E-mail:</label><input type="text" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['mail'];?>
"></div>
        <div class="rowform"><label>Адрес:</label><input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['address'];?>
"></div>
        <div class="rowform"><label>Координаты яндекс:</label><input type="text" name="shema" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['shema'];?>
"></div>
        <div class="rowformbutton">
            <?php echo $_smarty_tpl->tpl_vars['hiddenInputs']->value;?>

            <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['formDetails']->value['submitName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['formDetails']->value['submitValue'];?>
" class="formbutton">
        </div>
    </form>
</div>

<?php }} ?>