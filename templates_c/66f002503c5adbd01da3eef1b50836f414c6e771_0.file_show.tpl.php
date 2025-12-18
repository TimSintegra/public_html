<?php
/* Smarty version 5.4.3, created on 2025-12-18 22:55:28
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/docs/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69447850361844_50588339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66f002503c5adbd01da3eef1b50836f414c6e771' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/docs/show.tpl',
      1 => 1766094825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69447850361844_50588339 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/docs';
?><section class="docs-hero">
    <div class="container docs-hero__inner">
        <div class="docs-hero__text">
            <h1 class="docs-title"><?php echo $_smarty_tpl->getValue('docs_title');?>
</h1>
            <p class="docs-intro"><?php echo $_smarty_tpl->getValue('docs_intro');?>
</p>
            <p class="docs-note"><?php echo $_smarty_tpl->getValue('docs_gost_note');?>
</p>
        </div>

        <div class="docs-hero__image">
            <div class="docs-photo-placeholder">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/<?php echo $_smarty_tpl->getValue('docs_image');?>
" alt="Разработка конструкторской документации" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="docs-tasks">
    <div class="container">
        <h2 class="docs-subtitle">Основные задачи конструкторского бюро</h2>

        <ul class="docs-tasks__list">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('docs_tasks'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                <li><?php echo $_smarty_tpl->getValue('item');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</section>
<?php }
}
