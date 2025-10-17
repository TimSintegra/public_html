<?php
/* Smarty version 5.4.3, created on 2025-03-13 15:42:18
  from 'file:/var/www/s-nk.su/public_html//templates/default/modules/projects/details.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d2d2aa1bc5b0_59422832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16c42d774cdd5e8757c7e87bb18b8c81e6368b68' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/modules/projects/details.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2d2aa1bc5b0_59422832 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default/modules/projects';
?><div class="cntnr">
    <div class="content">
        <div class="banner prjct" style="background-image: url(<?php echo $_smarty_tpl->getValue('moduleImage');?>
);">
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
            <div class="overlow" style="display: block; background-color:rgba(30,38,69,0.38);"></div>
            <div class="grad"></div>
        </div>


        <div class="content-wrapper cnt">
            <?php echo $_smarty_tpl->getValue('moduleShortContent');?>


            <?php echo $_smarty_tpl->getValue('moduleContent');?>


            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('moduleAllImages')) != 0) {?>
            <div class="grid2 gfoto">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('moduleAllImages'), 'i', false, 'm');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('m')->value => $_smarty_tpl->getVariable('i')->value) {
$foreach0DoElse = false;
?>
                <div class="ftm span-col-<?php echo $_smarty_tpl->getValue('moduleAllImages')[$_smarty_tpl->getValue('m')]['col'];?>
 mb-<?php echo $_smarty_tpl->getValue('moduleAllImages')[$_smarty_tpl->getValue('m')]['mb'];?>
">
                    <a href="<?php echo $_smarty_tpl->getValue('moduleAllImages')[$_smarty_tpl->getValue('m')]['image'];?>
" data-fancybox="images">
                        <img src="<?php echo $_smarty_tpl->getValue('moduleAllImages')[$_smarty_tpl->getValue('m')]['image'];?>
" alt="Image Project"/>
                    </a>
                </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('allObjects')) != 0) {?>
        <div class="center">
            <h1>Другие проекты</h1>
        </div>
        <div class="owl-carousel5 owl-theme" data-paroller-factor="-0.1" data-paroller-type="foreground"
             data-paroller-direction="horizontal">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allObjects'), 'b', false, 'a');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('a')->value => $_smarty_tpl->getVariable('b')->value) {
$foreach1DoElse = false;
?>
            <a href="<?php echo $_smarty_tpl->getValue('allObjects')[$_smarty_tpl->getValue('a')]['url'];?>
" class="itm" style="background-image: url(<?php echo $_smarty_tpl->getValue('allObjects')[$_smarty_tpl->getValue('a')]['image'];?>
);">
                <div class="sph"><span><?php echo $_smarty_tpl->getValue('allObjects')[$_smarty_tpl->getValue('a')]['title'];?>
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
