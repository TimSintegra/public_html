<section class="company-section">
    <div class="container">
        <article class="company-text">
            <p>{$text_about_company}</p>
        </article>
        <article class="company-info">
            <p>{$text_about_company_info}</p>
        </article>
        <div class="services-list">
            <ul class="services-items">
                {foreach $services_list as $service}
                    <li>{$service}</li>
                {/foreach}
            </ul>
        </div>
    </div>
</section>

<section class="company-way">
    <div class="container">
        <h2 class="section-title">{$header_way}</h2>
        <h3 class="subsection-title">{$header_milestone}</h3>
        <div class="timeline">
            {foreach from=$milestones key=year item=description}
                <div class="milestone">
                    <div class="year">{$year}</div>
                    <div class="description">{$description}</div>
                </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="city-stats-section">
    <div class="container">
        <div class="cities-list">
            <h2 class="section-subtitle facts-title">{$header_facts}</h2>
            <h2 class="section-subtitle geography-title">{$header_geography_projects}</h2>
            <img src="{$TPL_URL}/images/mappng.png" alt="" class="section-image">
            <ul class="cities-items">
                {foreach $cities_list as $cities}
                    <li>{$cities}</li>
                {/foreach}
            </ul>
            <img src="{$TPL_URL}/images/city.png" alt="" class="city-image">
        </div>
        <div class="stats-sections">
            {foreach from=$stats_data key=section_name item=section}
                <div class="stats-section">
                    <h3 class="stats-title {$section.title|replace:' ':'-'|lower}">{$section.title}</h3>
                    <div class="stats-grid">
                        {foreach from=$section.items item=item name=itemLoop}
                            {if $smarty.foreach.itemLoop.index < 4}
                                <div class="stat-item">
                                    <div class="stat-icon">
                                        <img src="{$TPL_URL}/images/{$item.icon}" alt="{$item.text}">
                                    </div>
                                    <div class="stat-value">{$item.value}</div>
                                    <div class="stat-text">{$item.text}</div>
                                </div>
                            {/if}
                        {/foreach}
                    </div>
                </div>
            {/foreach}
            <img src="{$TPL_URL}/images/mapping.png" alt="" class="section-image">
        </div>
    </div>
</section>

<section class="partners-section">
    <div class="container">
        <h2 class="section-title">Партнерство</h2>
        <div class="partners-list">
            {foreach from=$partners item=partner}
                <article class="partner-card">
                    <div class="partner-content">
                        <div class="partner-info-left">
                            <header class="partner-header">
                                <div class="partner-icon">
                                    <img src="{$TPL_URL}/images/{$partner.icon}" alt="{$partner.title}">
                                </div>
                                <h3 class="partner-title">{$partner.title}</h3>
                            </header>
                            <div class="partner-works">
                                <h4 class="works-title">Выполненные работы:</h4>
                                <ul class="works-list">
                                    {foreach from=$partner.works item=work}
                                        <li>{$work}</li>
                                    {/foreach}
                                </ul>
                            </div>
                            {if $partner.info}
                                <div class="partner-additional-info">
                                    <p>{$partner.info}</p>
                                </div>
                            {/if}
                        </div>
                        {if $partner.image}
                            <div class="partner-info-right">
                                <figure class="partner-image">
                                    <img src="{$TPL_URL}/images/{$partner.image}" alt="{$partner.title}">
                                    {if $partner.information_image}
                                        <figcaption class="partner-image-caption">{$partner.information_image}</figcaption>
                                    {/if}
                                </figure>
                            </div>
                        {/if}
                    </div>
                </article>
            {/foreach}
        </div>
    </div>
</section>

<section class="projects-section">
    <div class="container">
        <h2 class="section-title">{$header_key_projects_partners}</h2>
        <div class="projects-columns">
            <div class="projects-column">
                {foreach from=$projects item=project name=projects}
                    {if $smarty.foreach.projects.iteration <= 6}
                        <article class="project-item">
                            <h3 class="project-client">{$project.client}</h3>
                            <div class="project-description">{$project.description}</div>
                        </article>
                    {/if}
                {/foreach}
            </div>
            <div class="projects-column">
                {foreach from=$projects item=project name=projects}
                    {if $smarty.foreach.projects.iteration > 6}
                        <article class="project-item">
                            <h3 class="project-client">{$project.client}</h3>
                            <div class="project-description">{$project.description}</div>
                        </article>
                    {/if}
                {/foreach}
            </div>
        </div>
    </div>
</section>

<section class="certificates-section">
    <div class="container">
        <h2 class="section-title">{$header_result}</h2>
        <h3 class="subsection-title">{$header_certificates}</h3>
        <!-- Здесь добавь контент для сертификатов, если есть, например, галерею изображений -->
        <p>Список сертификатов (добавьте изображения или ссылки).</p> <!-- Placeholder, если пусто -->
    </div>
</section>

<section class="contacts-section">
    <div class="container">
        <div class="contacts-wrapper" style="display: flex; gap: 250px;">
            <div class="contacts-qr">
                <img src="{$TPL_URL}/images/contacts-main-qr-code.png" alt="QR-код контактов">
            </div>
            <div class="contacts-info">
                <img src="{$TPL_URL}/images/contacts-image.png" alt="Изображение контактов">
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
</section>