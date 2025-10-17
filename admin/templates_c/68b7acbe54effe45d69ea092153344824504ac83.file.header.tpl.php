<?php /* Smarty version Smarty-3.1.12, created on 2022-03-24 18:21:44
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104492637623c8c88399394-24784393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68b7acbe54effe45d69ea092153344824504ac83' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/header.tpl',
      1 => 1648131821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104492637623c8c88399394-24784393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TPL_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_623c8c883aa127_23840784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623c8c883aa127_23840784')) {function content_623c8c883aa127_23840784($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Административная панель</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/style.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/jqueryslidemenu.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/selectbox.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/jquery-ui-1.10.3.custom.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/jquery.lightbox-0.5.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/uploader/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/bjqs.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/validationEngine.jquery.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/jquery.datetimepicker.css" type="text/css" />
    <!--[if lte IE 6]>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/style_ie.css" type="text/css" media="screen, projection" />
    <![endif]-->
    
    <!--[if lte IE 7]>
    <style type="text/css">
        html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
    </style>
    <![endif]-->
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/select2.min.css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery-ui.multidatespicker.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jqueryslidemenu.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.lightbox-0.5.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/editor/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.formstyler.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.maskedinput.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/ajaxupload-min.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/bjqs-1.3.min.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.validationEngine-ru.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.datetimepicker.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/my.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.cookie.js"></script>
</head><?php }} ?>