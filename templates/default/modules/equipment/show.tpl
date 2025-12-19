<section class="equip-block">
    <div class="container equip-block__inner">
        <div class="equip-block__text">
            <h1 class="equip-title">{$equip1_title}</h1>
            <p class="equip-lead">{$equip1_lead}</p>
            <p class="equip-text">{$equip1_text}</p>
        </div>

        <div class="equip-block__image">
            <div class="equip-photo">
                <img src="{$TPL_URL}/{$equip1_image}" alt="{$equip1_title}" loading="lazy">
                <span class="equip-photo__label">{$equip1_title}</span>
            </div>
        </div>
    </div>
</section>

<section class="equip-table">
    <div class="container">
        <h2 class="equip-table__title">Характеристики {$equip1_title}</h2>
        <div class="equip-table__wrapper">
            <table class="equip-spec">
                <tbody>
                    {foreach from=$equip1_spec key=label item=value}
                        <tr>
                            <th>{$label}</th>
                            <td>{$value}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="equip-block">
    <div class="container equip-block__inner equip-block__inner--reverse">
        <div class="equip-block__text">
            <h2 class="equip-title">{$equip2_title}</h2>
            <p class="equip-lead">{$equip2_lead}</p>
            <p class="equip-text">{$equip2_text}</p>
        </div>

        <div class="equip-block__image">
            <div class="equip-photo">
                <img src="{$TPL_URL}/{$equip2_image}" alt="{$equip2_title}" loading="lazy">
                <span class="equip-photo__label">{$equip2_title}</span>
            </div>
        </div>
    </div>
</section>

<section class="equip-table">
    <div class="container">
        <h2 class="equip-table__title">Характеристики {$equip2_title}</h2>
        <div class="equip-table__wrapper">
            <table class="equip-spec">
                <tbody>
                    {foreach from=$equip2_spec key=label item=value}
                        <tr>
                            <th>{$label}</th>
                            <td>{$value}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</section>
