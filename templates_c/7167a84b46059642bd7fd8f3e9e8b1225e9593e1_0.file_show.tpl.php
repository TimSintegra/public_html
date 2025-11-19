<?php
/* Smarty version 5.4.3, created on 2025-11-12 12:48:35
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/index/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6914741350ff79_77288578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7167a84b46059642bd7fd8f3e9e8b1225e9593e1' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/index/show.tpl',
      1 => 1762948107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6914741350ff79_77288578 (\Smarty\Template $_smarty_tpl) {
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
/images/company-section.png" alt="Company">
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
                    <li><?php echo $_smarty_tpl->getValue('service');?>
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
/images/<?php echo $_smarty_tpl->getValue('item')['icon'];?>
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

<section class="partners-section">
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
/images/<?php echo $_smarty_tpl->getValue('partner')['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('partner')['title'];?>
">
                            </figure>
                        <?php }?>
                        <div class="partner-logo">
                            <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/<?php echo $_smarty_tpl->getValue('partner')['icon'];?>
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
</section>

<section class="projects-section">
    <div class="container">
        <h2 class="section-title"><?php echo $_smarty_tpl->getValue('header_key_projects_partners');?>
</h2>
        <div class="projects-columns">
            <div class="projects-column">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('projects'), 'project', false, NULL, 'projects', array (
  'iteration' => true,
));
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('project')->value) {
$foreach7DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_projects']->value['iteration']++;
?>
                    <?php if (($_smarty_tpl->getValue('__smarty_foreach_projects')['iteration'] ?? null) <= 6) {?>
                        <article class="project-item">
                            <h3 class="project-client"><?php echo $_smarty_tpl->getValue('project')['client'];?>
</h3>
                            <div class="project-description"><?php echo $_smarty_tpl->getValue('project')['description'];?>
</div>
                        </article>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            <div class="projects-column">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('projects'), 'project', false, NULL, 'projects', array (
  'iteration' => true,
));
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('project')->value) {
$foreach8DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_projects']->value['iteration']++;
?>
                    <?php if (($_smarty_tpl->getValue('__smarty_foreach_projects')['iteration'] ?? null) > 6) {?>
                        <article class="project-item">
                            <h3 class="project-client"><?php echo $_smarty_tpl->getValue('project')['client'];?>
</h3>
                            <div class="project-description"><?php echo $_smarty_tpl->getValue('project')['description'];?>
</div>
                        </article>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</section>

<section class="certificates-section">
    <div class="container">
        <h2 class="section-title"><?php echo $_smarty_tpl->getValue('header_result');?>
</h2>
        <h3 class="subsection-title"><?php echo $_smarty_tpl->getValue('header_certificates');?>
</h3>
        <p>Список сертификатов (добавьте изображения или ссылки).</p> 
    </div>
</section>

<section class="contacts-section">
    <div class="container">
        <div class="contacts-header">
            <h1><?php echo $_smarty_tpl->getValue('contactsData')['title'];?>
</h1>
        </div>
        
        <div class="contacts-content">
            <!-- Левая колонка: Офисы -->
            <div class="offices-block">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('contactsData')['offices'], 'office');
$foreach9DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('office')->value) {
$foreach9DoElse = false;
?>
                    <div class="office-card">
                        <?php if ($_smarty_tpl->getValue('office')['icon']) {?>
                            <div class="office-icon"><?php echo $_smarty_tpl->getValue('office')['icon'];?>
</div>
                        <?php }?>
                        <h2><?php echo $_smarty_tpl->getValue('office')['title'];?>
</h2>
                        <p class="country"><?php echo $_smarty_tpl->getValue('office')['country'];?>
</p>
                        <?php if ($_smarty_tpl->getValue('office')['region']) {?>
                            <p class="region"><?php echo $_smarty_tpl->getValue('office')['region'];?>
</p>
                        <?php }?>
                        <p class="address"><?php echo $_smarty_tpl->getValue('office')['address'];?>
</p>
                        <p class="email">Email: <a href="mailto:<?php echo $_smarty_tpl->getValue('office')['email'];?>
"><?php echo $_smarty_tpl->getValue('office')['email'];?>
</a></p>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            
            <!-- Правая колонка: QR-код -->
            <div class="qr-block">
                <div class="qr-card">
                    <h3><?php echo $_smarty_tpl->getValue('contactsData')['qr']['title'];?>
</h3>
                    <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/<?php echo $_smarty_tpl->getValue('contactsData')['qr']['image'];?>
" alt="QR-код" class="qr-code">
                    <p class="qr-description"><?php echo $_smarty_tpl->getValue('contactsData')['qr']['description'];?>
</p>
                </div>
            </div>
        </div>
    </div>
</section><?php }
}
