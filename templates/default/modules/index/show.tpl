<section class="company-section">
    <div class="container">
        <div class="company-content">
            <div class="company-text-wrapper">
                <article class="company-text">
                    <p>{$text_about_company}</p>
                </article>
                <article class="company-info">
                    <p>{$text_about_company_info}</p>
                </article>
            </div>
            <div class="company-image">
                <img src="{$TPL_URL}/images/company-section.png" alt="Company">
            </div>
        </div>
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
            <ul class="cities-items">
                {foreach $cities_list as $cities}
                    <li>{$cities}</li>
                {/foreach}
            </ul>
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
        </div>
    </div>
</section>

<section class="partners-section">
    <div class="container">
        <h2 class="section-title">Партнерство</h2>
        <div class="partners-list">
            {foreach from=$partners item=partner}
                <article class="partner-card">
                    <div class="partner-visual">
                        {if $partner.image}
                            <figure class="partner-image">
                                <img src="{$TPL_URL}/images/{$partner.image}" alt="{$partner.title}">
                            </figure>
                        {/if}
                        <div class="partner-logo">
                            <img src="{$TPL_URL}/images/{$partner.icon}" alt="{$partner.title}">
                        </div>
                    </div>
                    <div class="partner-info">
                        <h3 class="partner-title">{$partner.title}</h3>
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
        <p>Список сертификатов (добавьте изображения или ссылки).</p> 
    </div>
</section>

<section class="contacts-section">
    <div class="container">
        <div class="contacts-header">
            <h1>{$contactsData.title}</h1>
        </div>
        
        <div class="contacts-content">
            <!-- Левая колонка: Офисы -->
            <div class="offices-block">
                {foreach from=$contactsData.offices item=office}
                    <div class="office-card">
                        {if $office.icon}
                            <div class="office-icon">{$office.icon}</div>
                        {/if}
                        <h2>{$office.title}</h2>
                        <p class="country">{$office.country}</p>
                        {if $office.region}
                            <p class="region">{$office.region}</p>
                        {/if}
                        <p class="address">{$office.address}</p>
                        <p class="email">Email: <a href="mailto:{$office.email}">{$office.email}</a></p>
                    </div>
                {/foreach}
            </div>
            
            <!-- Правая колонка: QR-код -->
            <div class="qr-block">
                <div class="qr-card">
                    <h3>{$contactsData.qr.title}</h3>
                    <img src="{$TPL_URL}/images/{$contactsData.qr.image}" alt="QR-код" class="qr-code">
                    <p class="qr-description">{$contactsData.qr.description}</p>
                </div>
            </div>
        </div>
    </div>
</section>