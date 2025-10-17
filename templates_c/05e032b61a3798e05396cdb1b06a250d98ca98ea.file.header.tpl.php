<?php /* Smarty version Smarty-3.1.12, created on 2022-03-24 18:14:37
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1045915527623c8add434411-71207463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e032b61a3798e05396cdb1b06a250d98ca98ea' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/header.tpl',
      1 => 1648131760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1045915527623c8add434411-71207463',
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
  'unifunc' => 'content_623c8add4a3f53_70175289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623c8add4a3f53_70175289')) {function content_623c8add4a3f53_70175289($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/cl273480/data/www/sintegra-nk.ru/libs/smarty/plugins/modifier.date_format.php';
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