<div>
    <p>{$text_about_company}</p>
</div>
<div>
    <p>{$text_about_company_info}</p>
</div>
<div>
    <ul>
    {foreach $services_list as $service}
        <li>{$service}</li>
    {/foreach}
    </ul>
</div>
<div>
    <p>{$header_way}</p>
</div>
<div>
    <p>{$header_milestone}</p>
</div>
<div class="timeline">
{foreach from=$milestones key=year item=description}
    <div class="milestone">
        <div class="year">{$year}</div>
        <div class="description">{$description}</div>
    </div>
{/foreach}
</div>
<div>
    <ul>
    {foreach $cities_list as $cities}
        <li>{$cities}</li>
    {/foreach}
    </ul>
</div>
<div class="stats-sections">
    {foreach from=$stats_data key=section_name item=section}
        <div class="stats-section">
            <h3 class="stats-title">{$section.title}</h3>
            <div class="stats-grid">
                {foreach from=$section.items item=item}
                    <div class="stat-item">
                        <div class="stat-icon">
                            <img src="{$TPL_URL}/images/{$item.icon}" alt="{$item.text}">
                        </div>
                        <div class="stat-value">{$item.value}</div>
                        <div class="stat-text">{$item.text}</div>
                    </div>
                {/foreach}
            </div>
        </div>
    {/foreach}
</div>
<section class="partners-section">
    <h2 class="section-title">Партнерство</h2>
    
    <div class="partners-list">
        {foreach from=$partners item=partner}
            <div class="partner-card">
                <div class="partner-content">
                    <div class="partner-info-left">
                        <div class="partner-header">
                            <div class="partner-icon">
                                <img src="{$TPL_URL}/images/partners/{$partner.icon}" alt="{$partner.title}">
                            </div>
                            <h3 class="partner-title">{$partner.title}</h3>
                        </div>
                        
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
                            <div class="partner-image">
                                <img src="{$TPL_URL}/images/partners/{$partner.image}" alt="{$partner.title}">
                            </div>
                            {if $partner.information_image}
                                <div class="partner-image-caption">
                                    <p>{$partner.information_image}</p>
                                </div>
                            {/if}
                        </div>
                    {/if}
                </div>
            </div>
        {/foreach}
    </div>
</section>
<section class="projects-section">
    <h2 class="section-title">{$header_key_projects_partners}</h2>
    
    <div class="projects-columns">
        <div class="projects-column">
            {foreach from=$projects item=project name=projects}
                {if $smarty.foreach.projects.iteration <= 6}
                    <div class="project-item">
                        <h3 class="project-client">{$project.client}</h3>
                        <div class="project-description">
                            {$project.description}
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
        
        <div class="projects-column">
            {foreach from=$projects item=project name=projects}
                {if $smarty.foreach.projects.iteration > 6}
                    <div class="project-item">
                        <h3 class="project-client">{$project.client}</h3>
                        <div class="project-description">
                            {$project.description}
                        </div>
                    </div>
                {/if}
            {/foreach}
        </div>
    </div>
</section>
<!--  -->
<div>
    <p>{$header_result}</p>
</div>
<div>
    <p>{$header_certificates}</p>
</div>
