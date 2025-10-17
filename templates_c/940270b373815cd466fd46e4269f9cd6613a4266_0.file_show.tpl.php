<?php
/* Smarty version 5.4.3, created on 2025-03-13 15:55:04
  from 'file:/var/www/s-nk.su/public_html//templates/default/modules/services/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d2d5a8976d55_23867893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '940270b373815cd466fd46e4269f9cd6613a4266' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/modules/services/show.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2d5a8976d55_23867893 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default/modules/services';
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

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('allPages')) != 0) {?>
            <div class="center">
                <h1>Другие услуги</h1>
            </div>
            <div class="owl-carousel5 owl-theme" data-paroller-factor="-0.1" data-paroller-type="foreground"
             data-paroller-direction="horizontal">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allPages'), 'b', false, 'a');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('a')->value => $_smarty_tpl->getVariable('b')->value) {
$foreach0DoElse = false;
?>
                    <a href="<?php echo $_smarty_tpl->getValue('allPages')[$_smarty_tpl->getValue('a')]['url'];?>
" class="itm" style="background-image: url(<?php echo $_smarty_tpl->getValue('allPages')[$_smarty_tpl->getValue('a')]['image'];?>
);">
                        <div class="sph"><span><?php echo $_smarty_tpl->getValue('allPages')[$_smarty_tpl->getValue('a')]['title'];?>
</span></div>
                        <div class="overlow" style="display: block; background-color:rgba(30,38,69,0.38);"></div>
                        <div class="grad"></div>
                    </a>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
