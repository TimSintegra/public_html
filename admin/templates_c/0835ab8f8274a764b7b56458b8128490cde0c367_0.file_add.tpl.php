<?php
/* Smarty version 5.4.3, created on 2025-03-20 16:26:17
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/modules/services/add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67dc1779b98d20_00653853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0835ab8f8274a764b7b56458b8128490cde0c367' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/modules/services/add.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67dc1779b98d20_00653853 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/modules/services';
if ($_smarty_tpl->getValue('successText') != '') {?>
    <div class="success"><a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/services/">Перейти к списку услуг</a></div>
<?php } else { ?>
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->getValue('formDetails')['formTitle'];?>
</h1></div>
</div>
<div id="blockpadding">
    <form action="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/services/add/" method="post" name="vacancyform" id="pageadd" enctype="multipart/form-data">
        <div class="rowform"><label>Категория:</label><?php echo $_smarty_tpl->getValue('parentCategory');?>
</div>
        <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->getValue('_val')['title'];?>
"></div>
        <div class="rowform"><label>Изображение:<br /><em>Условия изображения: 400х300px (или пропорционально больше), размер файла не более 5Гб.</em></label><input type="file" name="service"></div>
        <div class="rowform"><label>Показывать на главной:</label><input type="checkbox" value="1" name="main" class="checkboxs"> Да</div>
        <div class="rowform"><label>Основная информация:</label><div class="main_content_textarea"><textarea id="main_content" name="main_content"><?php echo $_smarty_tpl->getValue('_val')['main_content'];?>
</textarea></div></div>
        <div class="rowform"><label>SEO title:</label><input type="text" name="stitle" value="<?php echo $_smarty_tpl->getValue('_val')['stitle'];?>
"></div>
        <div class="rowform"><label>SEO keywords:</label><input type="text" name="keywords" value="<?php echo $_smarty_tpl->getValue('_val')['keywords'];?>
"></div>
        <div class="rowform"><label>SEO description:</label><input type="text" name="description" value="<?php echo $_smarty_tpl->getValue('_val')['description'];?>
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
}
