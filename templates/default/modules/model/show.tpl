<section class="model3d-hero">
    <div class="container model3d-hero__inner">
        <div class="model3d-hero__text">
            <h1 class="model3d-title">{$model_title}</h1>
            <p class="model3d-intro">{$model_lead}</p>
            <p class="model3d-intro">{$model_intro}</p>
            <p class="model3d-intro">{$model_graphics}</p>
        </div>

        <div class="model3d-hero__image">
            <div class="model3d-photo-placeholder">
                <img src="{$TPL_URL}/assets/images/{$model_image}" alt="3D‑моделирование" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="model3d-sections">
    <div class="container model3d-sections__inner">

        <article class="model3d-card">
            <h2 class="model3d-card__title">{$model_poly.title}</h2>
            <p class="model3d-card__text">{$model_poly.text}</p>
        </article>

        <article class="model3d-card">
            <h2 class="model3d-card__title">{$model_cad.title}</h2>
            <p class="model3d-card__text">{$model_cad.text}</p>
        </article>

    </div>
</section>
