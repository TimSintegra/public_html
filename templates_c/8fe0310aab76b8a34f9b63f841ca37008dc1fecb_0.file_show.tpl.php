<?php
/* Smarty version 5.4.3, created on 2025-12-11 16:42:52
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/partners/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_693ae67cb88687_59384293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe0310aab76b8a34f9b63f841ca37008dc1fecb' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/partners/show.tpl',
      1 => 1765467405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_693ae67cb88687_59384293 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/partners';
?><section class="partners-section">
    <div class="container">
        <h2 class="section-title">Партнерство</h2>
        <div class="partners-list">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('partners'), 'partner');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('partner')->value) {
$foreach5DoElse = false;
?>
                <article class="partner-card">
                    <div class="partner-visual">
                        <?php if ($_smarty_tpl->getValue('partner')['image']) {?>
                            <figure class="partner-image">
                                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/<?php echo $_smarty_tpl->getValue('partner')['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('partner')['title'];?>
">
                            </figure>
                        <?php }?>
                        <div class="partner-logo">
                            <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/<?php echo $_smarty_tpl->getValue('partner')['icon'];?>
" alt="<?php echo $_smarty_tpl->getValue('partner')['title'];?>
">
                        </div>
                    </div>
                    <div class="partner-info">
                        <h3 class="partner-title"><?php echo $_smarty_tpl->getValue('partner')['title'];?>
</h3>
                        <div class="partner-works">
                            <h4 class="works-title">Выполненные работы:</h4>
                            <ul class="works-list">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('partner')['works'], 'work');
$foreach6DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('work')->value) {
$foreach6DoElse = false;
?>
                                    <li><?php echo $_smarty_tpl->getValue('work');?>
</li>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                        <?php if ($_smarty_tpl->getValue('partner')['info']) {?>
                            <div class="partner-additional-info">
                                <p><?php echo $_smarty_tpl->getValue('partner')['info'];?>
</p>
                            </div>
                        <?php }?>
                    </div>
                </article>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section><?php }
}
