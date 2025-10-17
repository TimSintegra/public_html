<?php
/* Smarty version 5.4.3, created on 2025-03-16 00:16:38
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/modules/mainmenu/add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d5ee36b676c4_67820531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b70010a941961225e847d0bbba45d8159d21dc21' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/modules/mainmenu/add.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d5ee36b676c4_67820531 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/modules/mainmenu';
if ($_smarty_tpl->getValue('successText') != '') {?>
    <div class="success"><a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/mainmenu/">Перейти к списку пунктов</a></div>
<?php } else { ?>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function() {
            $("#module").change(function() {
                $("#subcat").load("<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/ext/getsubcats/" + $("#module").val() + "/");
                $("#item").html('<input type="hidden" name="cid" value="0">');
                if ($("#module").val() == 'link') {
                    $("#link").html('<div class="rowform"><label>Ссылка:</label><input type="text" name="link" value=""></div>');
                } else {
                    $("#link").html('<input type="hidden" name="link" value="">');
                }
            });
            $("#pid").live("change", (function() {
                $("#item").load("<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/ext/getitem/" + $("#pid").val() + "/" + $("#module").val() + "/");
            }));
        });
<?php echo '</script'; ?>
>

<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->getValue('formDetails')['formTitle'];?>
</h1></div>
</div>
<div id="blockpadding">
    <form action="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/mainmenu/add/" method="post" name="advsform">
        <div class="rowform"><label>Название пункта:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->getValue('_val')['title'];?>
"></div>
        <div class="rowform"><label>Модуль: <br /><em>Если выберите модуль "Страницы" или "Услуги", то можно дальше выбрать подкатегорию модуля</em></label><?php echo $_smarty_tpl->getValue('moduleSelect');?>
</div>
        <div id="subcat"><?php echo $_smarty_tpl->getValue('subcatSelect');?>
</div>
        <div id="item"><?php echo $_smarty_tpl->getValue('itemSelect');?>
</div>
        <div id="link"><?php echo $_smarty_tpl->getValue('linkText');?>
</div>
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
