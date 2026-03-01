<?php
/* Smarty version 5.4.3, created on 2026-03-01 03:32:00
  from 'file:/opt/lampp/htdocs/public_html/templates/default/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a3a5203c2539_34403616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0685ed7ba5eef36ee12cdabe108eef950c37ab0' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/header.tpl',
      1 => 1772331585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a3a5203c2539_34403616 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default';
?><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#284693">
    <title><?php echo $_smarty_tpl->getValue('SEO')['title'];?>
</title>
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
    <meta name="keywords" content="<?php echo $_smarty_tpl->getValue('SEO')['keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->getValue('SEO')['description'];?>
"/>
    <link href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/css/header/style.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/css/<?php echo $_smarty_tpl->getValue('MODULE_PATH');?>
/style.css" rel="stylesheet">
    <?php if ($_smarty_tpl->getValue('MODULE_PATH') == 'index') {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('INDEX_SECTION_MODULES'), 'sect');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sect')->value) {
$foreach0DoElse = false;
?>
    <link href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/css/<?php echo $_smarty_tpl->getValue('sect');?>
/style.css" rel="stylesheet">
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }?>
    <link href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/css/footer/style.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/css/icons/style.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/css/layout/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Raleway:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head><?php }
}
