<?php /* Smarty version Smarty-3.1.12, created on 2022-04-05 09:29:55
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1021726664624be1e3486e98-12049262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd67c39f9210d5a8453b83f4cac1c3780626453' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/admin/templates/default/layout.tpl',
      1 => 1648131822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1021726664624be1e3486e98-12049262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_URL' => 0,
    'TPL_URL' => 0,
    'loggedAdmin' => 0,
    'errorText' => 0,
    'successText' => 0,
    'MODULE_PATH' => 0,
    'MODULE_ACT' => 0,
    'leftBlocks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_624be1e3751a71_65451164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_624be1e3751a71_65451164')) {function content_624be1e3751a71_65451164($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div id="wrapper">
    <div id="header">
        <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/" class="logo">
            <img src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/images/sintegra_logo.png" alt="" height="62"/>
        </a>
        <i class="logininfo">Вы вошли в систему как "<?php echo $_smarty_tpl->tpl_vars['loggedAdmin']->value;?>
"</i>
        <ul id="topmenu">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/../" class="web" target="_blank">Перейти на сайт</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_URL']->value;?>
/logout/" class="exit nobordertopmenuright">Выход</a></li>
        </ul>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/mainmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <div id="middle">
        <div id="container">
            <div id="content">
                <?php if ($_smarty_tpl->tpl_vars['errorText']->value!=''){?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['successText']->value!=''){?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/success.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php }?>
                <div id="bigblockshadow">
                    <div id="bigblock">
                     <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/modules/".((string)$_smarty_tpl->tpl_vars['MODULE_PATH']->value)."/".((string)$_smarty_tpl->tpl_vars['MODULE_ACT']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    </div>
                </div>
            </div><!-- #content-->
        </div><!-- #container-->
        <div class="sidebar" id="sideLeft">
            <?php if ($_smarty_tpl->tpl_vars['leftBlocks']->value==2){?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/blocks/".((string)$_smarty_tpl->tpl_vars['MODULE_PATH']->value)."/".((string)$_smarty_tpl->tpl_vars['MODULE_ACT']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php }elseif($_smarty_tpl->tpl_vars['leftBlocks']->value==1){?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/blocks/".((string)$_smarty_tpl->tpl_vars['MODULE_PATH']->value)."/show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php }?>
        </div>
    </div><!-- #middle-->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><!-- #wrapper -->
</body>
</html><?php }} ?>