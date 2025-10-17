<?php
/* Smarty version 5.4.3, created on 2025-03-15 05:38:26
  from 'file:/var/www/s-nk.su/public_html//templates/default/modules/certificates/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d4e8224a9374_89944403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d8349d54373dc72356bda0e0995a1fe744f6db' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/modules/certificates/show.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d4e8224a9374_89944403 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default/modules/certificates';
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


        <div class="content-wrapper">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('allPages')) != 0) {?>
            <ul class="uni">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allPages'), 'b', false, 'a');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('a')->value => $_smarty_tpl->getVariable('b')->value) {
$foreach0DoElse = false;
?>
                <li>
                    <a href="<?php echo $_smarty_tpl->getValue('allPages')[$_smarty_tpl->getValue('a')]['image'];?>
" data-fancybox="images">
                        <div class="imgcon">
                            <img src="<?php echo $_smarty_tpl->getValue('allPages')[$_smarty_tpl->getValue('a')]['smallImage'];?>
" alt=""/>
                            <div class="ovv"><i class="fal fa-search"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
            <?php }?>
        </div>

        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
