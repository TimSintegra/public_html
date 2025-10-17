<?php
/* Smarty version 5.4.3, created on 2025-03-24 10:07:00
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/modules/news/add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e10494cabc82_54539904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45f863127abfdbd9115cb6ace7e53695a1692f1b' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/modules/news/add.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e10494cabc82_54539904 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/modules/news';
if ($_smarty_tpl->getValue('successText') != '') {?>
    <div class="success"><a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/news/">Перейти к списку новостей</a></div>
<?php } else { ?>
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->getValue('formDetails')['formTitle'];?>
</h1></div>
</div>
<div id="blockpadding">
    <form action="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/news/add/" method="post" name="newsform" enctype="multipart/form-data">
        <div class="rowform"><label>Дата:</label><input type="text" id="recDateTime" name="recDate" value="<?php echo $_smarty_tpl->getValue('_val')['recDate'];?>
"></div>
        <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->getValue('_val')['title'];?>
"></div>
        <div class="rowform"><label>Основная информация:</label><div class="main_content_textarea"><textarea id="main_content" name="main_content"><?php echo $_smarty_tpl->getValue('_val')['main_content'];?>
</textarea></div></div>
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
}
