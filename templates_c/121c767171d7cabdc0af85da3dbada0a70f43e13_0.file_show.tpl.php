<?php
/* Smarty version 5.4.3, created on 2025-12-18 19:32:23
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/dimension/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_694448b7d47bd2_67869786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '121c767171d7cabdc0af85da3dbada0a70f43e13' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/dimension/show.tpl',
      1 => 1766082674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_694448b7d47bd2_67869786 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/dimension';
?><section class="dim-hero">
    <div class="container dim-hero__inner">
        <div class="dim-hero__text">
            <h1 class="dim-title"><?php echo $_smarty_tpl->getValue('dim_title');?>
</h1>
            <p class="dim-intro"><?php echo $_smarty_tpl->getValue('dim_intro');?>
</p>

            <ul class="dim-list">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('dim_rules'), 'li');
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

        <div class="dim-hero__image">
            <div class="dim-photo-placeholder">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/<?php echo $_smarty_tpl->getValue('dim_image');?>
" alt="Образмеривание и измерения" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="dim-sections">
    <div class="container dim-sections__inner">

        <article class="dim-card">
            <h2 class="dim-card__title"><?php echo $_smarty_tpl->getValue('dim_chem')['title'];?>
</h2>
            <p class="dim-card__text"><?php echo $_smarty_tpl->getValue('dim_chem')['text'];?>
</p>
        </article>

        <article class="dim-card">
            <h2 class="dim-card__title"><?php echo $_smarty_tpl->getValue('dim_hardness')['title'];?>
</h2>
            <p class="dim-card__text"><?php echo $_smarty_tpl->getValue('dim_hardness')['text'];?>
</p>
        </article>

        <article class="dim-card dim-card--wide">
            <h2 class="dim-card__title"><?php echo $_smarty_tpl->getValue('dim_rough')['title'];?>
</h2>
            <p class="dim-card__text"><?php echo $_smarty_tpl->getValue('dim_rough')['text'];?>
</p>
        </article>

    </div>
</section>
<?php }
}
