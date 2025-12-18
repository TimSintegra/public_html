<section class="dim-hero">
    <div class="container dim-hero__inner">
        <div class="dim-hero__text">
            <h1 class="dim-title">{$dim_title}</h1>
            <p class="dim-intro">{$dim_intro}</p>

            <ul class="dim-list">
                {foreach from=$dim_rules item=li}
                    <li>{$li}</li>
                {/foreach}
            </ul>
        </div>

        <div class="dim-hero__image">
            <div class="dim-photo-placeholder">
                <img src="{$TPL_URL}/assets/images/{$dim_image}" alt="Образмеривание и измерения" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="dim-sections">
    <div class="container dim-sections__inner">

        <article class="dim-card">
            <h2 class="dim-card__title">{$dim_chem.title}</h2>
            <p class="dim-card__text">{$dim_chem.text}</p>
        </article>

        <article class="dim-card">
            <h2 class="dim-card__title">{$dim_hardness.title}</h2>
            <p class="dim-card__text">{$dim_hardness.text}</p>
        </article>

        <article class="dim-card dim-card--wide">
            <h2 class="dim-card__title">{$dim_rough.title}</h2>
            <p class="dim-card__text">{$dim_rough.text}</p>
        </article>

    </div>
</section>
