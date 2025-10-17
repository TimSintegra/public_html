<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:33:52
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/pages/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:378025094624be2d0c58c77-64430851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35cd98dbab1c181ab4944f2bf3aee66677ca0178' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/pages/edit.tpl',
      1 => 1648132551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '378025094624be2d0c58c77-64430851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'successText' => 0,
    'ADMIN_URL' => 0,
    'formDetails' => 0,
    'parentCategory' => 0,
    '_val' => 0,
    'hiddenInputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be2d0c8cdf5_56841615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be2d0c8cdf5_56841615')) {function content_624be2d0c8cdf5_56841615($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['successText']->value!=''){?>
    <div class="success"><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pages/">Перейти к списку страниц</a></div>
<?php }else{ ?>
    <div id="bigblockheader">
        <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->tpl_vars['formDetails']->value['formTitle'];?>
</h1></div>
    </div>
    <div id="blockpadding">
        <form action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/pages/edit/" method="post" name="vacancyform" id="pageadd" enctype="multipart/form-data">
            <div class="rowform"><label>Категория:</label><?php echo $_smarty_tpl->tpl_vars['parentCategory']->value;?>
</div>
            <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['title'];?>
"></div>
            <div class="rowform"><label>Основная информация:</label><div class="main_content_textarea"><textarea id="main_content" name="main_content"><?php echo $_smarty_tpl->tpl_vars['_val']->value['main_content'];?>
</textarea></div></div>

            <div class="rowform"><label>SEO title:</label><input type="text" name="stitle" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['stitle'];?>
"></div>
            <div class="rowform"><label>SEO keywords:</label><input type="text" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['keywords'];?>
"></div>
            <div class="rowform"><label>SEO description:</label><input type="text" name="description" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value['description'];?>
"></div>

            <div class="rowformbutton">
                <?php echo $_smarty_tpl->tpl_vars['hiddenInputs']->value;?>

                <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['formDetails']->value['submitName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['formDetails']->value['submitValue'];?>
" class="formbutton">
            </div>
        </form>
    </div>
<?php }?><?php }} ?>