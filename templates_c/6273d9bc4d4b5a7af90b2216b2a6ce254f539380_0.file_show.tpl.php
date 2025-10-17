<?php
/* Smarty version 5.4.3, created on 2025-03-14 09:49:55
  from 'file:/var/www/s-nk.su/public_html//templates/default/modules/pages/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d3d193b36439_70690016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6273d9bc4d4b5a7af90b2216b2a6ce254f539380' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/modules/pages/show.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d3d193b36439_70690016 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default/modules/pages';
?><div class="cntnr">
    <div class="content">
        <div class="banner">
            <div class="ban_bg" id="ban_bg" style="background-position: calc(40% - -10.171875px);"></div>
            <div class="content-banner">
                <div class="content-wrapper">
                    <div class="f sb">
                        <div class="w6 f cntban">
                            <h1><?php echo $_smarty_tpl->getValue('moduleTitle');?>
</h1>
                            <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/crumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper cnt">
            <?php echo $_smarty_tpl->getValue('moduleContent');?>

        </div>
        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
