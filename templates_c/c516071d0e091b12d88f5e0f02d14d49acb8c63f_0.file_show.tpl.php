<?php
/* Smarty version 5.4.3, created on 2025-05-05 22:01:01
  from 'file:/var/www/s-nk.su/public_html//templates/default/modules/servicescats/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68190aed38d676_34868492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c516071d0e091b12d88f5e0f02d14d49acb8c63f' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/modules/servicescats/show.tpl',
      1 => 1746471654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68190aed38d676_34868492 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default/modules/servicescats';
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
                        <div class="red_sp spincrement"><?php echo $_smarty_tpl->getValue('mainPage')['main_count'];?>
</div>
                    </div>
                </div>
                <div class="w10"></div>
            </div>
        </div>

        <div class="f sb content-wrapper">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('allPages')) != 0) {?>
            <ul class="uslugi">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allPages'), 'b', false, 'a');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('a')->value => $_smarty_tpl->getVariable('b')->value) {
$foreach0DoElse = false;
?>
                <li><a href="<?php echo $_smarty_tpl->getValue('allPages')[$_smarty_tpl->getValue('a')]['url'];?>
">
                        <div class="imgcon">
                            <img src="<?php echo $_smarty_tpl->getValue('allPages')[$_smarty_tpl->getValue('a')]['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('allPages')[$_smarty_tpl->getValue('a')]['title'];?>
"/>
                        </div>
                        <div class="texcon">
                            <i class="fal fa-long-arrow-right"></i>
                            <span><?php echo $_smarty_tpl->getValue('allPages')[$_smarty_tpl->getValue('a')]['title'];?>
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
</div>
<?php }
}
