<section class="directions-section">
    <div class="container">
        <div class="directions-header">
            <h2>{$directionsData.title}</h2>
        </div>

        <div class="directions-list">
            {foreach from=$directionsData.items item=item}
                <article class="directions-item">
                    {if $item.icon}
                        <div class="directions-icon">
                            {$item.icon}
                        </div>
                    {/if}
                    <p class="directions-text">
                        {$item.text}
                    </p>
                </article>
            {/foreach}
        </div>
    </div>
</section>
