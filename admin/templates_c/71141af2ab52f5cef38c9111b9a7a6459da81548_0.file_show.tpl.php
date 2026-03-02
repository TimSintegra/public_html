<?php
/* Smarty version 5.4.3, created on 2026-03-02 12:31:52
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/modules/settings/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a5752892f3f5_80924923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71141af2ab52f5cef38c9111b9a7a6459da81548' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/modules/settings/show.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a5752892f3f5_80924923 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default/modules/settings';
?><div id="bigblockheader">
    <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->getValue('formDetails')['formTitle'];?>
</h1></div>
</div>
<div id="blockpadding">
    <form action="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/settings/show/" method="post" name="settingsform" enctype="multipart/form-data">
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('_val')) != 0) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_val'), 'v', false, 'k');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('k')->value => $_smarty_tpl->getVariable('v')->value) {
$foreach0DoElse = false;
?>
                <div class="rowform"><label><?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname_title'];?>
:
                    <?php if ($_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['settype'] == 'text') {?>
                        </label><input type="text" name="<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'];?>
" value="<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setvalue'];?>
">
                    <?php } elseif ($_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['settype'] == 'textarea') {?>
                        </label><div class="main_content_textarea"><textarea id="main_content" name="<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'];?>
" rows="7" cols="50"><?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setvalue'];?>
</textarea></div>
                    <?php } elseif ($_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['settype'] == 'checkbox') {?>
                        </label>
                        <input type="hidden" name="hidden_<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'];?>
" value="<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'];?>
">
                        <input type="checkbox" name="<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'];?>
" value="1" <?php if ($_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setvalue'] == 1) {?> checked<?php }?> class="checkboxs"> Да
                    <?php } elseif ($_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['settype'] == 'select') {?>
                        </label>
                        <select name="<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'];?>
">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['options'], 'o', false, 'l');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('l')->value => $_smarty_tpl->getVariable('o')->value) {
$foreach1DoElse = false;
?>
                                <option value="<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['options'][$_smarty_tpl->getValue('l')]['value'];?>
" <?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['options'][$_smarty_tpl->getValue('l')]['selected'];?>
><?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['options'][$_smarty_tpl->getValue('l')]['title'];?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    <?php } elseif ($_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['settype'] == 'image') {?>
                        <?php if ($_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setvalue'] != '') {?>
                            <img src="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/../content/img/main/<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setvalue'];?>
" width="70" border="0"><br>
                            <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/settings/delimage/<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'];?>
/" onClick="return window.confirm('Вы действительно хотите удалить изображение?');">Удалить изображение</a>
                        <?php }?>
                        <?php if ($_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'] == 'main_image') {?>
                            <br><em>Условия изображения: не менее 1920х787px(либо пропорционально больше), размер файла не более 5Гб.</em></label>
                            <?php } elseif ($_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'] == 'header_image') {?>
                            <br><em>Условия изображения: не менее 1920х429px(либо пропорционально больше), размер файла не более 5Гб.</em></label>
                        <?php } else { ?>
                            <br><em>Условия изображения: не менее 65х62px(либо пропорционально больше), размер файла не более 5Гб.</em></label>
                        <?php }?>
                        <input type="hidden" name="image_<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'];?>
" value="<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'];?>
">
                        <input type="file" name="<?php echo $_smarty_tpl->getValue('_val')[$_smarty_tpl->getValue('k')]['setname'];?>
">
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            Нет настроек.
        <?php }?>
        <div class="rowform"><label>SEO title:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->getValue('seo')['title'];?>
"></div>
        <div class="rowform"><label>SEO keywords:</label><input type="text" name="keywords" value="<?php echo $_smarty_tpl->getValue('seo')['keywords'];?>
"></div>
        <div class="rowform"><label>SEO description:</label><input type="text" name="description" value="<?php echo $_smarty_tpl->getValue('seo')['description'];?>
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
