<section class="rev-hero">
    <div class="container rev-hero__inner">
        <div class="rev-hero__text">
            <h1 class="rev-title">{$rev_title}</h1>
            <p class="rev-intro">{$rev_intro}</p>

            <ul class="rev-benefits">
                {foreach from=$rev_benefits item=li}
                    <li>{$li}</li>
                {/foreach}
            </ul>
        </div>

        <div class="rev-hero__image">
            <div class="rev-photo-placeholder">
                <img src="{$TPL_URL}/assets/images/{$rev_image}" alt="Обратное проектирование и 3D‑сканирование" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="rev-process">
    <div class="container">
        <h2 class="rev-subtitle">Основные этапы обратного проектирования</h2>

        <ol class="rev-steps">
            {foreach from=$rev_process_steps item=step}
                <li>{$step}</li>
            {/foreach}
        </ol>
    </div>
</section>

<section class="rev-future">
    <div class="container rev-future__inner">
        <div class="rev-future__card">
            <h2 class="rev-future__title">Будущее обратного проектирования</h2>
            <ul class="rev-future__list">
                {foreach from=$rev_future item=item}
                    <li>{$item}</li>
                {/foreach}
            </ul>
        </div>
    </div>
</section>
