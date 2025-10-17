<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:30:27
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/mainmenu/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1955482739624be203d27dc3-88379251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b3ebb04a3c47884618952ade30bcd10ad72cd0b' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/mainmenu/edit.tpl',
      1 => 1648132547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1955482739624be203d27dc3-88379251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'successText' => 0,
    'ADMIN_URL' => 0,
    'moduleSelect' => 0,
    'formDetails' => 0,
    '_val' => 0,
    'subcatSelect' => 0,
    'itemSelect' => 0,
    'linkText' => 0,
    'hiddenInputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be203d81233_25743344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be203d81233_25743344')) {function content_624be203d81233_25743344($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['successText']->value!=''){?>
    <div class="success"><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/mainmenu/">Перейти к списку пунктов</a></div>
<?php }else{ ?>
<?php if ($_smarty_tpl->tpl_vars['moduleSelect']->value!=''){?>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#module").change(function() {
                $("#subcat").load("<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/ext/getsubcats/" + $("#module").val() + "/");
                $("#item").html('<input type="hidden" name="cid" value="0">');
                if ($("#module").val() == 'link') {
                    $("#link").html('<div class="rowform"><label>Ссылка:</label><input type="text" name="link" value=""></div>');
                } else {
                    $("#link").html('<input type="hidden" name="link" value="">');
                }
            });
            $("#pid").live("change", (function() {
                $("#item").load("<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/ext/getitem/" + $("#pid").val() + "/" + $("#module").val() + "/");
            }));
        });
</script>

    <?php }?>
    <div id="bigblockheader">
        <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->tpl_vars['formDetails']->value['formTitle'];?>
</h1></div>
    </div>
    <div id="blockpadding">
        <form action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/mainmenu/edit/" method="post" name="advsform">
            <div class="rowform"><label>Название пункта:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['title'];?>
"></div>
            <?php if ($_smarty_tpl->tpl_vars['moduleSelect']->value!=''){?>
                <div class="rowform"><label>Модуль: <br /><em>Если выберите модуль "Страницы" или "Услуги", то можно дальше выбрать подкатегорию модуля</em></label><?php echo $_smarty_tpl->tpl_vars['moduleSelect']->value;?>
</div>
                <div id="subcat"><?php echo $_smarty_tpl->tpl_vars['subcatSelect']->value;?>
</div>
                <div id="item"><?php echo $_smarty_tpl->tpl_vars['itemSelect']->value;?>
</div>
                <div id="link"><?php echo $_smarty_tpl->tpl_vars['linkText']->value;?>
</div>
            <?php }?>
            <div class="rowformbutton">
                <?php echo $_smarty_tpl->tpl_vars['hiddenInputs']->value;?>

                <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['formDetails']->value['submitName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['formDetails']->value['submitValue'];?>
" class="formbutton">
            </div>
        </form>
    </div>
<?php }?><?php }} ?>