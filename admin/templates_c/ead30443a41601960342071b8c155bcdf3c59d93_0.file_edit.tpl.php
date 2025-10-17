<?php
/* Smarty version 5.4.3, created on 2025-03-22 20:04:02
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/modules/services/edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67deed82347176_03289607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead30443a41601960342071b8c155bcdf3c59d93' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/modules/services/edit.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67deed82347176_03289607 (\Smarty\Template $_smarty_tpl) {
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
/services/edit/" method="post" name="vacancyform" id="pageadd" enctype="multipart/form-data">
            <div class="rowform"><label>Категория:</label><?php echo $_smarty_tpl->getValue('parentCategory');?>
</div>
            <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->getValue('_val')['title'];?>
"></div>
            <div class="rowform"><label>Изображение:<br />
                    <?php if ($_smarty_tpl->getValue('_val')['image'] != '') {?>
                        <img src="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/../content/img/pages/<?php echo $_smarty_tpl->getValue('_val')['image'];?>
" width="70" border="0"><br>
                    <?php }?>
                    <em>Условия изображения: 400х300px (или пропорционально больше), размер файла не более 5Гб.</em></label><input type="file" name="service"></div>
            <div class="rowform"><label>Показывать на главной:</label><input type="checkbox" value="1" name="main" class="checkboxs"<?php if ($_smarty_tpl->getValue('_val')['main'] == 1) {?> checked<?php }?>> Да</div>
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
