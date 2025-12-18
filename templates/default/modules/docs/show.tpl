<section class="docs-hero">
    <div class="container docs-hero__inner">
        <div class="docs-hero__text">
            <h1 class="docs-title">{$docs_title}</h1>
            <p class="docs-intro">{$docs_intro}</p>
            <p class="docs-note">{$docs_gost_note}</p>
        </div>

        <div class="docs-hero__image">
            <div class="docs-photo-placeholder">
                <img src="{$TPL_URL}/assets/images/{$docs_image}" alt="Разработка конструкторской документации" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="docs-tasks">
    <div class="container">
        <h2 class="docs-subtitle">Основные задачи конструкторского бюро</h2>

        <ul class="docs-tasks__list">
            {foreach from=$docs_tasks item=item}
                <li>{$item}</li>
            {/foreach}
        </ul>
    </div>
</section>
