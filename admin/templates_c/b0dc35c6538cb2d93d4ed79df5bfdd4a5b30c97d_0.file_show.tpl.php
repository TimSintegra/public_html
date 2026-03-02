<?php
/* Smarty version 5.4.3, created on 2026-03-02 17:54:34
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/modules/contacts/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a5c0caee7c48_63368829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0dc35c6538cb2d93d4ed79df5bfdd4a5b30c97d' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/modules/contacts/show.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a5c0caee7c48_63368829 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default/modules/contacts';
?><div id="bigblockheader">
    <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->getValue('formDetails')['formTitle'];?>
</h1></div>
</div>
<div id="blockpadding">
    <form action="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/contacts/show/" method="post" name="aboutform">
        <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->getValue('_val')['title'];?>
"></div>
        <div class="rowform"><label>Доп.заголовок:</label><input type="text" name="title2" value="<?php echo $_smarty_tpl->getValue('_val')['title2'];?>
"></div>
        <div class="rowform"><label>Телефон:</label><input type="text" name="tel" value="<?php echo $_smarty_tpl->getValue('_val')['tel'];?>
"></div>
        <div class="rowform"><label>E-mail:</label><input type="text" name="mail" value="<?php echo $_smarty_tpl->getValue('_val')['mail'];?>
"></div>
        <div class="rowform"><label>Адрес:</label><input type="text" name="address" value="<?php echo $_smarty_tpl->getValue('_val')['address'];?>
"></div>
        <div class="rowform"><label>Координаты яндекс:</label><input type="text" name="shema" value="<?php echo $_smarty_tpl->getValue('_val')['shema'];?>
"></div>
        <div class="rowformbutton">
            <?php echo $_smarty_tpl->getValue('hiddenInputs');?>

            <input type="submit" name="<?php echo $_smarty_tpl->getValue('formDetails')['submitName'];?>
" value="<?php echo $_smarty_tpl->getValue('formDetails')['submitValue'];?>
" class="formbutton">
        </div>
    </form>
</div>

<?php }
}
