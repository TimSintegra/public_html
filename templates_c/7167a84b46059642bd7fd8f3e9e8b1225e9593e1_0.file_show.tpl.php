<?php
/* Smarty version 5.4.3, created on 2026-02-20 16:46:15
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/index/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_699881c7de4ee3_34015972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7167a84b46059642bd7fd8f3e9e8b1225e9593e1' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/index/show.tpl',
      1 => 1771602323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_699881c7de4ee3_34015972 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/index';
?><section class="company-section">
    <div class="container">
        <div class="company-content">
            <div class="company-text-wrapper">
                <article class="company-text">
                    <p><?php echo $_smarty_tpl->getValue('text_about_company');?>
</p>
                </article>
                <article class="company-info">
                    <p><?php echo $_smarty_tpl->getValue('text_about_company_info');?>
</p>
                </article>
            </div>
            <div class="company-image">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/company-section.png" alt="Company">
            </div>
        </div>
        <div class="services-list">
            <ul class="services-items">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('services_list'), 'service');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('service')->value) {
$foreach0DoElse = false;
?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->getValue('service')['url'];?>
"><?php echo $_smarty_tpl->getValue('service')['title'];?>
</a>
                    </li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</section>


<section class="company-way">
    <div class="container">
        <h2 class="section-title"><?php echo $_smarty_tpl->getValue('header_way');?>
</h2>
        <h3 class="subsection-title"><?php echo $_smarty_tpl->getValue('header_milestone');?>
</h3>
        <div class="timeline">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('milestones'), 'description', false, 'year');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('year')->value => $_smarty_tpl->getVariable('description')->value) {
$foreach1DoElse = false;
?>
                <div class="milestone">
                    <div class="year"><?php echo $_smarty_tpl->getValue('year');?>
</div>
                    <div class="description"><?php echo $_smarty_tpl->getValue('description');?>
</div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>

<section class="city-stats-section">
    <div class="container">
        <div class="cities-list">
            <h2 class="section-subtitle facts-title"><?php echo $_smarty_tpl->getValue('header_facts');?>
</h2>
            <h2 class="section-subtitle geography-title"><?php echo $_smarty_tpl->getValue('header_geography_projects');?>
</h2>
            <ul class="cities-items">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cities_list'), 'cities');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cities')->value) {
$foreach2DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('cities');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <div class="stats-sections">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('stats_data'), 'section', false, 'section_name');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('section_name')->value => $_smarty_tpl->getVariable('section')->value) {
$foreach3DoElse = false;
?>
                <div class="stats-section">
                    <h3 class="stats-title <?php echo mb_strtolower((string) $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('section')['title'],' ','-'), 'UTF-8');?>
"><?php echo $_smarty_tpl->getValue('section')['title'];?>
</h3>
                    <div class="stats-grid">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('section')['items'], 'item', false, NULL, 'itemLoop', array (
  'index' => true,
));
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach4DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_itemLoop']->value['index']++;
?>
                            <?php if (($_smarty_tpl->getValue('__smarty_foreach_itemLoop')['index'] ?? null) < 4) {?>
                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/<?php echo $_smarty_tpl->getValue('item')['icon'];?>
" alt="<?php echo $_smarty_tpl->getValue('item')['text'];?>
">
                                    </div>
                                    <div class="stat-value"><?php echo $_smarty_tpl->getValue('item')['value'];?>
</div>
                                    <div class="stat-text"><?php echo $_smarty_tpl->getValue('item')['text'];?>
</div>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>

<?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/modules/partners/show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/modules/projects/show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/modules/certificates/show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/modules/contacts/show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
