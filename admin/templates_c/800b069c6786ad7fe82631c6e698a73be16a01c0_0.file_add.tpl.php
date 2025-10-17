<?php
/* Smarty version 5.4.3, created on 2025-03-20 16:15:30
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/modules/advantages/add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67dc14f200da58_05305623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '800b069c6786ad7fe82631c6e698a73be16a01c0' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/modules/advantages/add.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67dc14f200da58_05305623 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/modules/advantages';
if ($_smarty_tpl->getValue('successText') != '') {?>
    <div class="success"><a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/advantages/">Перейти к списку преимуществ</a></div>
<?php } else { ?>
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->getValue('formDetails')['formTitle'];?>
</h1></div>
</div>
<div id="blockpadding">
    <form action="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/advantages/add/" method="post" name="newsform" enctype="multipart/form-data">
        <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->getValue('_val')['title'];?>
"></div>
        <div class="rowform"><label>Изображение:<br /><em>Условия изображения: минимум по ширине 97px , размер файла не более 5Гб.</em></label><input type="file" name="adv"></div>
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
