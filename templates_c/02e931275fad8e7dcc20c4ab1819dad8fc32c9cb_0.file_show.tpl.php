<?php
/* Smarty version 5.4.3, created on 2025-12-18 23:40:11
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/printing/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_694482cb846367_10345425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e931275fad8e7dcc20c4ab1819dad8fc32c9cb' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/printing/show.tpl',
      1 => 1766097086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_694482cb846367_10345425 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/printing';
?><section class="print-hero">
    <div class="container">
        <h1 class="print-title"><?php echo $_smarty_tpl->getValue('print_title');?>
</h1>
        <p class="print-intro"><?php echo $_smarty_tpl->getValue('print_intro');?>
</p>

        <ul class="print-benefits">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('print_benefits'), 'li');
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
</section>

<section class="print-gallery">
    <div class="container">
        <h2 class="print-gallery__title">Примеры изделий</h2>
        <div class="print-gallery__grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('print_gallery'), 'photo');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('photo')->value) {
$foreach1DoElse = false;
?>
                <figure class="print-photo">
                    <img src="<?php echo $_smarty_tpl->getValue('photo')['src'];?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('photo')['caption'], ENT_QUOTES, 'UTF-8', true);?>
" loading="lazy">
                    <figcaption><?php echo $_smarty_tpl->getValue('photo')['caption'];?>
</figcaption>
                </figure>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<?php }
}
