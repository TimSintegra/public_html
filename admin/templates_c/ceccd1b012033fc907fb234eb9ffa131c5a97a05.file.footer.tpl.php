<?php /* Smarty version Smarty-3.1.12, created on 2023-01-14 14:46:40
         compiled from "/home/c/cu11541/public_html/admin/templates/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213792055463c29620c34c62-34506469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceccd1b012033fc907fb234eb9ffa131c5a97a05' => 
    array (
      0 => '/home/c/cu11541/public_html/admin/templates/default/footer.tpl',
      1 => 1673277440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213792055463c29620c34c62-34506469',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_63c29620c3c320_56691069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63c29620c3c320_56691069')) {function content_63c29620c3c320_56691069($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/c/cu11541/public_html/libs/smarty/plugins/modifier.date_format.php';
?><div id="footer">
    <i class="co">Все права защищены<br>
        © <?php echo smarty_modifier_date_format(time(),"%Y");?>
 ColibrixCMS</i>
    <i class="rbix">Разработано в <a href="http://rbix.ru" target="_blank">"RBIX"</a></i>
</div><!-- #footer -->
<?php }} ?>