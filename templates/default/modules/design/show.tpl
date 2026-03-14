<!-- Hero -->
<section class="design-hero">
    <div class="container design-hero__inner">
        <h1 class="design-title">{$designData.hero.title}</h1>
        <p class="design-lead">{$designData.hero.lead}</p>
    </div>
</section>

<!-- Услуги -->
<section class="design-services">
    <div class="container">
        <h2 class="design-subtitle">{$designData.services.title}</h2>

        <div class="design-services__grid">
            {foreach from=$designData.services.items item=service}
                <div class="design-service-card">
                    <!-- <div class="design-service-card__icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48
                                     10-10S17.52 2 12 2zm-1 15l-5-5 1.41-1.41L11
                                     14.17l7.59-7.59L20 8l-9 9z"/>
                        </svg>
                    </div> -->
                    <span class="design-service-card__text">{$service}</span>
                </div>
            {/foreach}
        </div>
    </div>
</section>

<!-- Проекты -->
<section class="design-projects">
    <div class="container">
        <h2 class="design-subtitle">{$designData.projects.title}</h2>

        {foreach from=$designData.projects.items item=project}
            <div class="design-project">
                {if $project.title}
                    <h3 class="design-project__title">{$project.title}</h3>
                {/if}

                <p class="design-project__desc">{$project.description}</p>

                {if $project.images|@count > 0}
                    <div class="design-project__gallery">
                        {foreach from=$project.images item=img}
                            <img src="{$TPL_URL}/assets/images/{$img}"
                                 alt="{$project.title}"
                                 loading="lazy"
                                 onclick="openDesignLightbox(this.src)">
                        {/foreach}
                    </div>
                {/if}
            </div>
        {/foreach}
    </div>
</section>

<!-- Lightbox -->
<div class="design-lightbox" id="designLightbox" onclick="closeDesignLightbox()">
    <img src="" alt="Увеличенное фото" id="designLightboxImg">
</div>

<script>
    function openDesignLightbox(src) {
        var lb  = document.getElementById('designLightbox');
        var img = document.getElementById('designLightboxImg');
        img.src = src;
        lb.classList.add('is-active');
    }

    function closeDesignLightbox() {
        document.getElementById('designLightbox').classList.remove('is-active');
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeDesignLightbox();
    });
</script>