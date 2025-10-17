<?php
/* Smarty version 5.4.3, created on 2025-03-20 16:19:54
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/modules/servicescats/add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67dc15fa590775_76988235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef6bc02da258c61359c4225a9a9b088e07083669' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/modules/servicescats/add.tpl',
      1 => 1673277442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67dc15fa590775_76988235 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/modules/servicescats';
if ($_smarty_tpl->getValue('successText') != '') {?>
    <div class="success"><a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/servicescats/">Перейти к списку категорий</a></div>
<?php } else { ?>
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->getValue('formDetails')['formTitle'];?>
</h1></div>
</div>
<div id="blockpadding">
    <form action="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/servicescats/add/" method="post" name="advsform">
        <div class="rowform"><label>Название категории:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->getValue('_val')['title'];?>
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
