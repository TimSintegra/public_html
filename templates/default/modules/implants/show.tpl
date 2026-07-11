<section class="impl-hero" style="background-image: url('{$page_img}');">
    <div class="container">
        <div class="impl-hero__overlay">
            <h1 class="impl-hero__title">{$page_title}</h1>
            <p class="impl-hero__lead">{$page_lead}</p>
            <p class="impl-hero__intro">{$page_intro}</p>
        </div>
    </div>
</section>

<section class="impl-section impl-section--white">
    <div class="container">
        <div class="impl-split">
            <div class="impl-split__text">
                <h2 class="impl-section__title">{$printer_name}</h2>
                <p class="impl-text">{$printer_intro}</p>
                <ul class="impl-specs">
                    {foreach from=$printer_highlights item=h}
                    <li><strong>{$h.label}:</strong> {$h.value}</li>
                    {/foreach}
                </ul>
            </div>
            <div class="impl-split__img">
                <img src="{$printer_img}" alt="HBD 400" loading="lazy" class="impl-photo">
            </div>
        </div>
    </div>
</section>

<section class="impl-section impl-section--light">
    <div class="container">
        <h2 class="impl-section__title impl-section__title--center">Технологические возможности HBD</h2>
        <div class="impl-grid-2">
            {foreach from=$tech_features item=f}
            <div class="impl-card impl-card--row">
                <div class="impl-card__img-col">
                    <img src="{$f.img}" alt="{$f.title}" loading="lazy" class="impl-card__img">
                </div>
                <div class="impl-card__text-col">
                    <h3 class="impl-card__title">{$f.title}</h3>
                    <p class="impl-card__text">{$f.text}</p>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-section impl-section--white">
    <div class="container">
        <h2 class="impl-section__title impl-section__title--center">Материалы</h2>
        <p class="impl-lead-text">{$materials_intro}</p>
        <div class="impl-materials-grid">
            {foreach from=$materials item=m}
            <div class="impl-mat-card">
                <h3 class="impl-mat-card__name">{$m.name}</h3>
                <p class="impl-mat-card__desc">{$m.desc}</p>
                <div class="impl-mat-card__props">
                    <span class="impl-prop"><span class="impl-prop__label">Текучесть</span> {$m.yield} МПа</span>
                    <span class="impl-prop"><span class="impl-prop__label">Прочность</span> {$m.tensile} МПа</span>
                    <span class="impl-prop"><span class="impl-prop__label">Удлинение</span> {$m.elong}%</span>
                    <span class="impl-prop"><span class="impl-prop__label">Твёрдость</span> {$m.hardness}</span>
                </div>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-section impl-section--light">
    <div class="container">
        <h2 class="impl-section__title impl-section__title--center">{$process_title}</h2>
        <div class="impl-steps">
            {foreach from=$process_steps item=s name=steps}
            <div class="impl-step">
                <div class="impl-step__num">{$s.num}</div>
                <h3 class="impl-step__title">{$s.title}</h3>
                <p class="impl-step__text">{$s.text}</p>
            </div>
            {if not $smarty.foreach.steps.last}
            <div class="impl-step-arrow"></div>
            {/if}
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-section impl-section--white">
    <div class="container">
        <h2 class="impl-section__title impl-section__title--center">Ключевые преимущества</h2>
        <div class="impl-grid-3">
            {foreach from=$advantages item=a}
            <div class="impl-card-adv">
                <div class="impl-card-adv__img-wrap">
                    <img src="{$a.img}" alt="{$a.title}" loading="lazy" class="impl-card-adv__img">
                </div>
                <h3 class="impl-card-adv__title">{$a.title}</h3>
                <p class="impl-card-adv__text">{$a.text}</p>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-section impl-section--light">
    <div class="container">
        <h2 class="impl-section__title impl-section__title--center">{$industries_title}</h2>
        <p class="impl-lead-text">{$industries_intro}</p>
        <div class="impl-grid-4">
            {foreach from=$industries item=ind}
            <div class="impl-card-adv">
                <div class="impl-card-adv__img-wrap">
                    <img src="{$ind.img}" alt="{$ind.title}" loading="lazy" class="impl-card-adv__img">
                </div>
                <h3 class="impl-card-adv__title">{$ind.title}</h3>
                <p class="impl-card-adv__text">{$ind.text}</p>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-section impl-section--white">
    <div class="container">
        <h2 class="impl-section__title impl-section__title--center">{$med_title}</h2>
        <div class="impl-med-layout">
            <div class="impl-med-grid">
                {foreach from=$med_directions item=d}
                <div class="impl-med-card">
                    <h3 class="impl-med-card__title">{$d.title}</h3>
                    <p class="impl-med-card__text">{$d.text}</p>
                </div>
                {/foreach}
            </div>
            <div class="impl-med-img">
                <img src="{$med_img}" alt="Медицинские импланты" loading="lazy" class="impl-photo">
            </div>
        </div>
    </div>
</section>

<section class="impl-section impl-section--light">
    <div class="container">
        <h2 class="impl-section__title impl-section__title--center">Примеры реализации</h2>
        <div class="impl-grid-3">
            {foreach from=$cases item=c}
            <div class="impl-card-adv">
                <div class="impl-card-adv__img-wrap">
                    <img src="{$c.img}" alt="{$c.title}" loading="lazy" class="impl-card-adv__img">
                </div>
                <h3 class="impl-card-adv__title">{$c.title}</h3>
                <p class="impl-card-adv__text">{$c.desc}</p>
                <ul class="impl-bullets">
                    {foreach from=$c.specs item=s}
                    <li>{$s}</li>
                    {/foreach}
                </ul>
            </div>
            {/foreach}
        </div>
    </div>
</section>
