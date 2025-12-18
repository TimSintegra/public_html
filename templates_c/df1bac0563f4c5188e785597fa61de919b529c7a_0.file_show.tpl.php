<?php
/* Smarty version 5.4.3, created on 2025-12-18 22:44:54
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/reverseeng/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_694475d6ad3545_20261929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df1bac0563f4c5188e785597fa61de919b529c7a' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/reverseeng/show.tpl',
      1 => 1766093678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_694475d6ad3545_20261929 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/reverseeng';
?><section class="rev-hero">
    <div class="container rev-hero__inner">
        <div class="rev-hero__text">
            <h1 class="rev-title"><?php echo $_smarty_tpl->getValue('rev_title');?>
</h1>
            <p class="rev-intro"><?php echo $_smarty_tpl->getValue('rev_intro');?>
</p>

            <ul class="rev-benefits">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rev_benefits'), 'li');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('li')->value) {
$foreach0DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('li');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>

        <div class="rev-hero__image">
            <div class="rev-photo-placeholder">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/<?php echo $_smarty_tpl->getValue('rev_image');?>
" alt="Обратное проектирование и 3D‑сканирование" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="rev-process">
    <div class="container">
        <h2 class="rev-subtitle">Основные этапы обратного проектирования</h2>

        <ol class="rev-steps">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rev_process_steps'), 'step');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('step')->value) {
$foreach1DoElse = false;
?>
                <li><?php echo $_smarty_tpl->getValue('step');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ol>
    </div>
</section>

<section class="rev-future">
    <div class="container rev-future__inner">
        <div class="rev-future__card">
            <h2 class="rev-future__title">Будущее обратного проектирования</h2>
            <ul class="rev-future__list">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rev_future'), 'item');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach2DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('item');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</section>
<?php }
}
