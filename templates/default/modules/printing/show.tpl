<section class="print-hero">
    <div class="container">
        <h1 class="print-title">{$print_title}</h1>
        <p class="print-intro">{$print_intro}</p>

        <ul class="print-benefits">
            {foreach from=$print_benefits item=li}
                <li>{$li}</li>
            {/foreach}
        </ul>
    </div>
</section>

<section class="print-gallery">
    <div class="container">
        <h2 class="print-gallery__title">Примеры изделий</h2>
        <div class="print-gallery__grid">
            {foreach from=$print_gallery item=photo}
                <figure class="print-photo">
                    <img src="{$photo.src}" alt="{$photo.caption|escape}" loading="lazy">
                    <figcaption>{$photo.caption}</figcaption>
                </figure>
            {/foreach}
        </div>
    </div>
</section>
