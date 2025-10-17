<?php
/* Smarty version 5.4.3, created on 2025-03-13 20:43:12
  from 'file:/var/www/s-nk.su/public_html//templates/default/modules/projects/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d3193063a906_88534491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98f80102c8b902ef6401a0e14ec7f612879c9822' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/modules/projects/show.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d3193063a906_88534491 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default/modules/projects';
?><div class="cntnr">
    <div class="content">
        <div class="banner">
            <div class="ban_bg" id="ban_bg"></div>
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
            <div class="f sb prj">
                <div class="w2">
                    <div class="mapbg">
                        <div class="red_sp spincrement"><?php echo $_smarty_tpl->getValue('pageSettings')['count'];?>
</div>
                    </div>
                </div>
                <div class="w10"><h2><?php echo $_smarty_tpl->getValue('pageSettings')['title'];?>
</h2><span><?php echo $_smarty_tpl->getValue('pageSettings')['main_text'];?>
</span>
                </div>
            </div>
        </div>

        <div class="f sb content-wrapper">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('allObjects')) != 0) {?>
            <ul class="project">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allObjects'), 'o', false, 'p');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value => $_smarty_tpl->getVariable('o')->value) {
$foreach0DoElse = false;
?>
                <li><a href="<?php echo $_smarty_tpl->getValue('allObjects')[$_smarty_tpl->getValue('p')]['url'];?>
">
                        <div class="imgcon">
                            <img src="<?php echo $_smarty_tpl->getValue('allObjects')[$_smarty_tpl->getValue('p')]['image'];?>
"/>
                        </div>
                        <div class="textbor">
                            <span class="mainspan"><?php echo $_smarty_tpl->getValue('allObjects')[$_smarty_tpl->getValue('p')]['title'];?>
</span>
                            <i class="slide_border"><span></span></i>
                            <span class="subspan"><?php echo $_smarty_tpl->getValue('allObjects')[$_smarty_tpl->getValue('p')]['short_text'];?>
</span>
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
