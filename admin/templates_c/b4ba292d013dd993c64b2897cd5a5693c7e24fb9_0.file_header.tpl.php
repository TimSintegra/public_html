<?php
/* Smarty version 5.4.3, created on 2026-03-02 12:19:44
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a572508a59c6_25216539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4ba292d013dd993c64b2897cd5a5693c7e24fb9' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/header.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a572508a59c6_25216539 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Административная панель</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/style.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/jqueryslidemenu.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/selectbox.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/jquery-ui-1.10.3.custom.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/jquery.lightbox-0.5.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/uploader/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/bjqs.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/validationEngine.jquery.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/jquery.datetimepicker.css" type="text/css" />
    <!--[if lte IE 6]>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/style_ie.css" type="text/css" media="screen, projection" />
    <![endif]-->
    
    <!--[if lte IE 7]>
    <style type="text/css">
        html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
    </style>
    <![endif]-->
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/css/select2.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery-ui-1.10.3.custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery-ui.multidatespicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jqueryslidemenu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.lightbox-0.5.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/editor/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.formstyler.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.maskedinput.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/ajaxupload-min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/bjqs-1.3.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.validationEngine-ru.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.validationEngine.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.datetimepicker.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/my.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.cookie.js"><?php echo '</script'; ?>
>
</head><?php }
}
