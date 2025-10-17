<?php /* Smarty version Smarty-3.1.12, created on 2024-01-27 20:44:03
         compiled from "/var/www/s-nk.su/public_html/templates/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191299434365b540e3687a65-92274645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '925b8c7632ce11de5c3b05fcc9da0960c7e51e06' => 
    array (
      0 => '/var/www/s-nk.su/public_html/templates/default/header.tpl',
      1 => 1673277576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191299434365b540e3687a65-92274645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SEO' => 0,
    'TPL_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_65b540e368d9f1_25894176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65b540e368d9f1_25894176')) {function content_65b540e368d9f1_25894176($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/s-nk.su/public_html/libs/smarty/plugins/modifier.date_format.php';
?><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#284693">
    <title><?php echo $_smarty_tpl->tpl_vars['SEO']->value['title'];?>
</title>
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['SEO']->value['keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['SEO']->value['description'];?>
"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/style.css?v=<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/icons.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Raleway:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/owl.theme.default.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/css/mmenu.css" type="text/css" rel="stylesheet"/>
</head><?php }} ?>