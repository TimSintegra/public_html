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
                <img src="{$TPL_URL}/assets/images/company-section.png" alt="Company">
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
                                        <img src="{$TPL_URL}/assets/images/{$item.icon}" alt="{$item.text}">
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

{include file="$TPL_PATH/modules/partners/show.tpl"}

{include file="$TPL_PATH/modules/projects/show.tpl"}

{include file="$TPL_PATH/modules/certificates/show.tpl"}

{include file="$TPL_PATH/modules/contacts/show.tpl"}