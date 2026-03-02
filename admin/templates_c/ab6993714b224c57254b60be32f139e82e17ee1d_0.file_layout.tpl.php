<?php
/* Smarty version 5.4.3, created on 2026-03-02 12:31:52
  from 'file:/opt/lampp/htdocs/public_html/admin/templates/default/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a575288a3600_25968823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab6993714b224c57254b60be32f139e82e17ee1d' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/admin/templates/default/layout.tpl',
      1 => 1759825376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a575288a3600_25968823 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/admin/templates/default';
$_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<body>
<div id="wrapper">
    <div id="header">
        <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/" class="logo">
            <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/sintegra_logo.png" alt="" height="62"/>
        </a>
        <i class="logininfo">Вы вошли в систему как "<?php echo $_smarty_tpl->getValue('loggedAdmin');?>
"</i>
        <ul id="topmenu">
            <li><a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/../" class="web" target="_blank">Перейти на сайт</a></li>
            <li><a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/logout/" class="exit nobordertopmenuright">Выход</a></li>
        </ul>
        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/mainmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
    <div id="middle">
        <div id="container">
            <div id="content">
                <?php if ($_smarty_tpl->getValue('errorText') != '') {?>
                    <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('successText') != '') {?>
                    <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/success.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                <?php }?>
                <div id="bigblockshadow">
                    <div id="bigblock">
                     <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/modules/".((string)$_smarty_tpl->getValue('MODULE_PATH'))."/".((string)$_smarty_tpl->getValue('MODULE_ACT')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                    </div>
                </div>
            </div><!-- #content-->
        </div><!-- #container-->
        <div class="sidebar" id="sideLeft">
            <?php if ($_smarty_tpl->getValue('leftBlocks') == 2) {?>
                <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/blocks/".((string)$_smarty_tpl->getValue('MODULE_PATH'))."/".((string)$_smarty_tpl->getValue('MODULE_ACT')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php } elseif ($_smarty_tpl->getValue('leftBlocks') == 1) {?>
                <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/blocks/".((string)$_smarty_tpl->getValue('MODULE_PATH'))."/show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        </div>
    </div><!-- #middle-->
    <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div><!-- #wrapper -->
</body>
</html><?php }
}
