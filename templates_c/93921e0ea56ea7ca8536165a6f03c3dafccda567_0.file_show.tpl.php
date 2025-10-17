<?php
/* Smarty version 5.4.3, created on 2025-03-24 22:54:58
  from 'file:/var/www/s-nk.su/public_html//templates/default/modules/news/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67e1b892c03b78_98664713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93921e0ea56ea7ca8536165a6f03c3dafccda567' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/modules/news/show.tpl',
      1 => 1742846095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e1b892c03b78_98664713 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default/modules/news';
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
        <?php if ($_smarty_tpl->getValue('showCats') == 1) {?>
        <div class="content-wrapper">
            <?php if ((true && ($_smarty_tpl->hasVariable('allNews') && null !== ($_smarty_tpl->getValue('allNews') ?? null))) && !( !$_smarty_tpl->hasVariable('allNews') || empty($_smarty_tpl->getValue('allNews')))) {?>
            <div class="news_cnt">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allNews'), 'newsItem');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('newsItem')->value) {
$foreach0DoElse = false;
?>
                <a href="<?php echo $_smarty_tpl->getValue('newsItem')['url'];?>
">
                    <span><?php echo $_smarty_tpl->getValue('newsItem')['regdate'];?>
</span>
                    <p><?php echo $_smarty_tpl->getValue('newsItem')['title'];?>
</p>
                </a>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            <?php }?>
        </div>
        <?php } else { ?>
            <div class="content-wrapper cnt">
                <?php echo $_smarty_tpl->getValue('moduleInfo')['main_text'];?>

            </div>
        <?php }?>

        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>
<?php }
}
