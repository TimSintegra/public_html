<?php
/* Smarty version 5.4.3, created on 2025-10-17 16:03:46
  from 'file:/opt/lampp/htdocs/public_html//templates/default/modules/index/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f24cc2177552_65145981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8806e8c52a657e4da7af51946a2859fbbadb832' => 
    array (
      0 => '/opt/lampp/htdocs/public_html//templates/default/modules/index/show.tpl',
      1 => 1760709824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f24cc2177552_65145981 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/index';
?><section class="company-section">
    <div class="container">
        <article class="company-text">
            <p><?php echo $_smarty_tpl->getValue('text_about_company');?>
</p>
        </article>
        <article class="company-info">
            <p><?php echo $_smarty_tpl->getValue('text_about_company_info');?>
</p>
        </article>
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
                    <h3 class="stats-title"><?php echo $_smarty_tpl->getValue('section')['title'];?>
</h3>
                    <div class="stats-grid">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('section')['items'], 'item');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach4DoElse = false;
?>
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
                    <div class="partner-content">
                        <div class="partner-info-left">
                            <header class="partner-header">
                                <div class="partner-icon">
                                    <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/<?php echo $_smarty_tpl->getValue('partner')['icon'];?>
" alt="<?php echo $_smarty_tpl->getValue('partner')['title'];?>
">
                                </div>
                                <h3 class="partner-title"><?php echo $_smarty_tpl->getValue('partner')['title'];?>
</h3>
                            </header>
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
                        <?php if ($_smarty_tpl->getValue('partner')['image']) {?>
                            <div class="partner-info-right">
                                <figure class="partner-image">
                                    <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/<?php echo $_smarty_tpl->getValue('partner')['image'];?>
" alt="<?php echo $_smarty_tpl->getValue('partner')['title'];?>
">
                                    <?php if ($_smarty_tpl->getValue('partner')['information_image']) {?>
                                        <figcaption class="partner-image-caption"><?php echo $_smarty_tpl->getValue('partner')['information_image'];?>
</figcaption>
                                    <?php }?>
                                </figure>
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
        <!-- Здесь добавь контент для сертификатов, если есть, например, галерею изображений -->
        <p>Список сертификатов (добавьте изображения или ссылки).</p> <!-- Placeholder, если пусто -->
    </div>
</section>

<section class="contacts-section">
    <div class="container">
        <div class="contacts-wrapper" style="display: flex; gap: 250px;">
            <div class="contacts-qr">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/contacts-main-qr-code.png" alt="QR-код контактов">
            </div>
            <div class="contacts-info">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/contacts-image.png" alt="Изображение контактов">
                <h2>Офис в Москве:</h2>
                <p>Российская Федерация</p>
                <p>г. Москва, ул. Мотросская Тишина, 23с1,</p>
                <p>помещение XXVI, ком.1</p>
                <p>Email: <a href="mailto:office@s-nk.su">office@s-nk.su</a></p>
                <h2>Офис и производственная база в Нижнекамске:</h2>
                <p>Российская Федерация</p>
                <p>Республика Татарстан</p>
                <p>г. Нижнекамск, БСИ, ул. Заводская 3 В</p>
                <p>Email: <a href="mailto:info@s-nk.su">info@s-nk.su</a></p>
            </div>
        </div>
    </div>
</section><?php }
}
