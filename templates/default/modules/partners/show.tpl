<section class="partners-section">
    <div class="container">
        <h2 class="section-title">Партнерство</h2>
        <div class="partners-list">
            {foreach from=$partners item=partner}
                <article class="partner-card">
                    <div class="partner-visual">
                        {if $partner.image}
                            <figure class="partner-image">
                                <img src="{$TPL_URL}/assets/images/{$partner.image}" alt="{$partner.title}">
                            </figure>
                        {/if}
                        <div class="partner-logo">
                            <img src="{$TPL_URL}/assets/images/{$partner.icon}" alt="{$partner.title}">
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