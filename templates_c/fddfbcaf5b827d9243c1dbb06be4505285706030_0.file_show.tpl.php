<?php
/* Smarty version 5.4.3, created on 2025-12-18 19:19:38
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/model/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_694445ba3a6f62_80374879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fddfbcaf5b827d9243c1dbb06be4505285706030' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/model/show.tpl',
      1 => 1766081975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_694445ba3a6f62_80374879 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/model';
?><section class="model3d-hero">
    <div class="container model3d-hero__inner">
        <div class="model3d-hero__text">
            <h1 class="model3d-title"><?php echo $_smarty_tpl->getValue('model_title');?>
</h1>
            <p class="model3d-intro"><?php echo $_smarty_tpl->getValue('model_lead');?>
</p>
            <p class="model3d-intro"><?php echo $_smarty_tpl->getValue('model_intro');?>
</p>
            <p class="model3d-intro"><?php echo $_smarty_tpl->getValue('model_graphics');?>
</p>
        </div>

        <div class="model3d-hero__image">
            <div class="model3d-photo-placeholder">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/<?php echo $_smarty_tpl->getValue('model_image');?>
" alt="3D‑моделирование" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="model3d-sections">
    <div class="container model3d-sections__inner">

        <article class="model3d-card">
            <h2 class="model3d-card__title"><?php echo $_smarty_tpl->getValue('model_poly')['title'];?>
</h2>
            <p class="model3d-card__text"><?php echo $_smarty_tpl->getValue('model_poly')['text'];?>
</p>
        </article>

        <article class="model3d-card">
            <h2 class="model3d-card__title"><?php echo $_smarty_tpl->getValue('model_cad')['title'];?>
</h2>
            <p class="model3d-card__text"><?php echo $_smarty_tpl->getValue('model_cad')['text'];?>
</p>
        </article>

    </div>
</section>
<?php }
}
