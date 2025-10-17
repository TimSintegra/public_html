<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:29:55
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/settings/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:538965452624be1e3c16259-44797864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a970b64981bce797cfc24ee918299f7724f0bd8f' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/modules/settings/show.tpl',
      1 => 1648132572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '538965452624be1e3c16259-44797864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formDetails' => 0,
    'ADMIN_URL' => 0,
    '_val' => 0,
    'k' => 0,
    'l' => 0,
    'seo' => 0,
    'hiddenInputs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be1e3cb8110_82628671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be1e3cb8110_82628671')) {function content_624be1e3cb8110_82628671($_smarty_tpl) {?><div id="bigblockheader">
    <div id="bigblockheadermargin"><h1><?php echo $_smarty_tpl->tpl_vars['formDetails']->value['formTitle'];?>
</h1></div>
</div>
<div id="blockpadding">
    <form action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/settings/show/" method="post" name="settingsform" enctype="multipart/form-data">
        <?php if (count($_smarty_tpl->tpl_vars['_val']->value)!=0){?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_val']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <div class="rowform"><label><?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname_title'];?>
:
                    <?php if ($_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['settype']=='text'){?>
                        </label><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setvalue'];?>
">
                    <?php }elseif($_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['settype']=='textarea'){?>
                        </label><div class="main_content_textarea"><textarea id="main_content" name="<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname'];?>
" rows="7" cols="50"><?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setvalue'];?>
</textarea></div>
                    <?php }elseif($_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['settype']=='checkbox'){?>
                        </label>
                        <input type="hidden" name="hidden_<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname'];?>
">
                        <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname'];?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setvalue']==1){?> checked<?php }?> class="checkboxs"> Да
                    <?php }elseif($_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['settype']=='select'){?>
                        </label>
                        <select name="<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname'];?>
">
                            <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
$_smarty_tpl->tpl_vars['o']->_loop = true;
 $_smarty_tpl->tpl_vars['l']->value = $_smarty_tpl->tpl_vars['o']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['options'][$_smarty_tpl->tpl_vars['l']->value]['value'];?>
" <?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['options'][$_smarty_tpl->tpl_vars['l']->value]['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['options'][$_smarty_tpl->tpl_vars['l']->value]['title'];?>
</option>
                            <?php } ?>
                        </select>
                    <?php }elseif($_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['settype']=='image'){?>
                        <?php if ($_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setvalue']!=''){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/../content/img/main/<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setvalue'];?>
" width="70" border="0"><br>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/settings/delimage/<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname'];?>
/" onClick="return window.confirm('Вы действительно хотите удалить изображение?');">Удалить изображение</a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname']=='main_image'){?>
                            <br><em>Условия изображения: не менее 1920х787px(либо пропорционально больше), размер файла не более 5Гб.</em></label>
                            <?php }elseif($_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname']=='header_image'){?>
                            <br><em>Условия изображения: не менее 1920х429px(либо пропорционально больше), размер файла не более 5Гб.</em></label>
                        <?php }else{ ?>
                            <br><em>Условия изображения: не менее 65х62px(либо пропорционально больше), размер файла не более 5Гб.</em></label>
                        <?php }?>
                        <input type="hidden" name="image_<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname'];?>
">
                        <input type="file" name="<?php echo $_smarty_tpl->tpl_vars['_val']->value[$_smarty_tpl->tpl_vars['k']->value]['setname'];?>
">
                    <?php }?>
                </div>
            <?php } ?>
        <?php }else{ ?>
            Нет настроек.
        <?php }?>
        <div class="rowform"><label>SEO title:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['seo']->value['title'];?>
"></div>
        <div class="rowform"><label>SEO keywords:</label><input type="text" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['seo']->value['keywords'];?>
"></div>
        <div class="rowform"><label>SEO description:</label><input type="text" name="description" value="<?php echo $_smarty_tpl->tpl_vars['seo']->value['description'];?>
"></div>
        <div class="rowformbutton">
            <?php echo $_smarty_tpl->tpl_vars['hiddenInputs']->value;?>

            <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['formDetails']->value['submitName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['formDetails']->value['submitValue'];?>
" class="formbutton">
        </div>
    </form>
</div>

<?php }} ?>