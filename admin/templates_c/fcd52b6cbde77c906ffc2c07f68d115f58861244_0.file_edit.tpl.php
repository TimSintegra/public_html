<?php
/* Smarty version 5.4.3, created on 2025-07-08 15:20:36
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/modules/pages/edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_686d0d14791ec0_88068021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd52b6cbde77c906ffc2c07f68d115f58861244' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/modules/pages/edit.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_686d0d14791ec0_88068021 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/modules/pages';
if ($_smarty_tpl->getValue('successText') != '') {?>
    <div class="success"><a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/pages/">Перейти к списку страниц</a></div>
<?php } else { ?>
    <div id="bigblockheader">
        <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->getValue('formDetails')['formTitle'];?>
</h1></div>
    </div>
    <div id="blockpadding">
        <form action="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/pages/edit/" method="post" name="vacancyform" id="pageadd" enctype="multipart/form-data">
            <div class="rowform"><label>Категория:</label><?php echo $_smarty_tpl->getValue('parentCategory');?>
</div>
            <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->getValue('_val')['title'];?>
"></div>
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
