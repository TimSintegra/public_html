<section class="impl-hero">
    <div class="container">
        <h1 class="impl-hero__title">{$page_title}</h1>
        <p class="impl-hero__lead">{$page_lead}</p>
        <p class="impl-hero__intro">{$page_intro}</p>
    </div>
</section>

<section class="impl-section">
    <div class="container">
        <div class="impl-row">
            <div class="impl-row__text">
                <h2 class="impl-title">{$printer_name}</h2>
                <p class="impl-text">{$printer_intro}</p>
                <ul class="impl-list">
                    {foreach from=$printer_highlights item=h}
                    <li><strong>{$h.label}:</strong> {$h.value}</li>
                    {/foreach}
                </ul>
            </div>
            <div class="impl-row__img">
                <img src="{$printer_img}" alt="HBD 400" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="impl-section impl-section--alt">
    <div class="container">
        <h2 class="impl-title impl-title--center">Технологические возможности HBD</h2>
        <div class="impl-grid2">
            {foreach from=$tech_features item=f}
            <div class="impl-card-h">
                <div class="impl-card-h__img">
                    <img src="{$f.img}" alt="{$f.title}" loading="lazy">
                </div>
                <div class="impl-card-h__body">
                    <h3 class="impl-card-h__title">{$f.title}</h3>
                    <p class="impl-card-h__text">{$f.text}</p>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-section">
    <div class="container">
        <h2 class="impl-title impl-title--center">Материалы</h2>
        <p class="impl-lead">{$materials_intro}</p>
        <div class="impl-grid2">
            {foreach from=$materials item=m}
            <div class="impl-card-mat">
                <h3 class="impl-card-mat__name">{$m.name}</h3>
                <p class="impl-card-mat__desc">{$m.desc}</p>
                <div class="impl-card-mat__props">
                    <span><b>Текучесть:</b> {$m.yield} МПа</span>
                    <span><b>Прочность:</b> {$m.tensile} МПа</span>
                    <span><b>Удлинение:</b> {$m.elong}%</span>
                    <span><b>Твёрдость:</b> {$m.hardness}</span>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-section">
    <div class="container">
        <h2 class="impl-title impl-title--center">{$tc4_title}</h2>
        <div class="impl-grid2">
            {foreach from=$tc4_cards item=c}
            <div class="impl-card-mat">
                <div style="font-size:2rem;margin-bottom:10px">{$c.icon}</div>
                <h3 class="impl-card-mat__name">{$c.title}</h3>
                <p class="impl-card-mat__desc">{$c.text}</p>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-section impl-section--alt">
    <div class="container">
        <h2 class="impl-title impl-title--center">Ключевые преимущества</h2>
        <div class="impl-grid3">
            {foreach from=$advantages item=a}
            <div class="impl-card-v">
                <div class="impl-card-v__img">
                    <img src="{$a.img}" alt="{$a.title}" loading="lazy">
                </div>
                <div class="impl-card-v__body">
                    <h3 class="impl-card-v__title">{$a.title}</h3>
                    <p class="impl-card-v__text">{$a.text}</p>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-section">
    <div class="container">
        <h2 class="impl-title impl-title--center">{$industries_title}</h2>
        <p class="impl-lead">{$industries_intro}</p>
        <div class="impl-grid4">
            {foreach from=$industries item=ind}
            <div class="impl-card-v">
                <div class="impl-card-v__img">
                    <img src="{$ind.img}" alt="{$ind.title}" loading="lazy">
                </div>
                <div class="impl-card-v__body">
                    <h3 class="impl-card-v__title">{$ind.title}</h3>
                    <p class="impl-card-v__text">{$ind.text}</p>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-section impl-section--alt">
    <div class="container">
        <h2 class="impl-title impl-title--center">{$med_title}</h2>
        <div class="impl-med">
            <div class="impl-med__list">
                {foreach from=$med_directions item=d}
                <div class="impl-med__item">
                    <h3 class="impl-med__title">{$d.title}</h3>
                    <p class="impl-med__text">{$d.text}</p>
                </div>
                {/foreach}
            </div>
            <div class="impl-med__img">
                <img src="{$med_img}" alt="Медицинские импланты" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="impl-section">
    <div class="container">
        <h2 class="impl-title impl-title--center">Примеры реализации</h2>
        <div class="impl-grid3">
            {foreach from=$cases item=c}
            <div class="impl-card-v">
                <div class="impl-card-v__img">
                    <img src="{$c.img}" alt="{$c.title}" loading="lazy">
                </div>
                <div class="impl-card-v__body">
                    <h3 class="impl-card-v__title">{$c.title}</h3>
                    <p class="impl-card-v__text">{$c.desc}</p>
                    <ul class="impl-bullet">
                        {foreach from=$c.specs item=s}
                        <li>{$s}</li>
                        {/foreach}
                    </ul>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</section>
