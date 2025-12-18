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