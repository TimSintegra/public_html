<!-- ═══════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════ -->
<section class="impl-hero">
    <div class="container">
        <h1 class="impl-hero__title">{$implants_title}</h1>
        <p class="impl-hero__lead">{$implants_lead}</p>
        <p class="impl-hero__intro">{$implants_intro}</p>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ИЗОБРАЖЕНИЕ ПРИНТЕРА
     ═══════════════════════════════════════════════════════ -->
<section class="impl-hero-img">
    <div class="container">
        <div class="impl-hero-img__wrapper">
            <img src="{$TPL_URL}/assets/images/{$implants_hero_img}" alt="3D-принтер HBD 400" class="impl-hero-img__img" loading="lazy">
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     МАТЕРИАЛ: 4 карточки
     ═══════════════════════════════════════════════════════ -->
<section class="impl-material">
    <div class="container">
        <h2 class="impl-section-title">{$implants_material_title}</h2>

        <div class="impl-material__grid">
            {foreach from=$implants_material item=card}
                <div class="impl-material__card">
                    <div class="impl-material__icon">{$card.icon}</div>
                    <h3 class="impl-material__card-title">{$card.title}</h3>
                    <p class="impl-material__card-text">{$card.text}</p>
                </div>
            {/foreach}
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     МЕХАНИЧЕСКИЕ СВОЙСТВА TC4
     ═══════════════════════════════════════════════════════ -->
<section class="impl-properties">
    <div class="container">
        <h2 class="impl-section-title">{$implants_properties_title}</h2>

        <div class="impl-table-wrapper">
            <table class="impl-table">
                <thead>
                    <tr>
                        <th>Параметр</th>
                        <th>Значение</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$implants_properties item=row}
                        <tr>
                            <td>{$row.property}</td>
                            <td>{$row.value}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     3D‑ПРИНТЕР HBD 400
     ═══════════════════════════════════════════════════════ -->
<section class="impl-hbd">
    <div class="container">
        <h2 class="impl-section-title">{$implants_hbd_title}</h2>
        <p class="impl-hbd__intro">{$implants_hbd_intro}</p>

        <div class="impl-table-wrapper">
            <table class="impl-table">
                <thead>
                    <tr>
                        <th>Параметр</th>
                        <th>Значение</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$implants_hbd_spec item=row}
                        <tr>
                            <td>{$row.label}</td>
                            <td>{$row.value}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ПОРОШКОВАЯ СИСТЕМА
     ═══════════════════════════════════════════════════════ -->
<section class="impl-powder">
    <div class="container">
        <h2 class="impl-section-title">{$implants_powder_title}</h2>
        <p class="impl-powder__intro">{$implants_powder_intro}</p>

        <div class="impl-powder__steps">
            {foreach from=$implants_powder_steps item=step}
                <div class="impl-powder__step">
                    <div class="impl-powder__step-img">
                        <img src="{$TPL_URL}/assets/images/{$step.icon}" alt="{$step.title}" loading="lazy">
                    </div>
                    <h3 class="impl-powder__step-title">{$step.title}</h3>
                    <p class="impl-powder__step-text">{$step.text}</p>
                </div>
            {/foreach}
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ФИЛЬТРАЦИЯ
     ═══════════════════════════════════════════════════════ -->
<section class="impl-filtration">
    <div class="container">
        <h2 class="impl-section-title">{$implants_filtration_title}</h2>
        <p class="impl-filtration__text">{$implants_filtration_intro}</p>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     КАЧЕСТВО И СТАБИЛЬНОСТЬ
     ═══════════════════════════════════════════════════════ -->
<section class="impl-quality">
    <div class="container">
        <h2 class="impl-section-title">{$implants_quality_title}</h2>

        <div class="impl-quality__grid">
            {foreach from=$implants_quality_items item=item}
                <div class="impl-quality__card">
                    <div class="impl-quality__icon">{$item.icon}</div>
                    <h3 class="impl-quality__card-title">{$item.title}</h3>
                    <p class="impl-quality__card-text">{$item.text}</p>
                </div>
            {/foreach}
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     SLM-ПРИНТЕР: описание + таблица
     ═══════════════════════════════════════════════════════ -->
<section class="impl-printer">
    <div class="container">
        <h2 class="impl-section-title">{$implants_printer_title}</h2>
        <p class="impl-printer__intro">{$implants_printer_intro}</p>

        <div class="impl-table-wrapper">
            <table class="impl-table">
                <thead>
                    <tr>
                        <th>Параметр</th>
                        <th>Значение</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$implants_printer_spec item=row}
                        <tr>
                            <td>{$row.label}</td>
                            <td>{$row.value}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ПРОЦЕСС ИЗГОТОВЛЕНИЯ: 4 шага
     ═══════════════════════════════════════════════════════ -->
<section class="impl-process">
    <div class="container">
        <h2 class="impl-section-title">{$implants_process_title}</h2>

        <div class="impl-process__steps">
            {foreach from=$implants_process item=step name=process}
                <div class="impl-process__step">
                    <div class="impl-process__number">{$step.step}</div>
                    <h3 class="impl-process__step-title">{$step.title}</h3>
                    <p class="impl-process__step-text">{$step.text}</p>
                </div>
                {if !$smarty.foreach.process.last}
                    <div class="impl-process__arrow">→</div>
                {/if}
            {/foreach}
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     КЛЮЧЕВЫЕ ПРЕИМУЩЕСТВА
     ═══════════════════════════════════════════════════════ -->
<section class="impl-advantages">
    <div class="container">
        <h2 class="impl-section-title">{$implants_advantages_title}</h2>

        <div class="impl-advantages__grid">
            {foreach from=$implants_advantages item=adv}
                <div class="impl-advantages__card">
                    <h3 class="impl-advantages__card-title">{$adv.title}</h3>
                    <p class="impl-advantages__card-text">{$adv.text}</p>
                </div>
            {/foreach}
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ОБЛАСТИ ПРИМЕНЕНИЯ
     ═══════════════════════════════════════════════════════ -->
<section class="impl-directions">
    <div class="container">
        <h2 class="impl-section-title">{$implants_directions_title}</h2>

        <div class="impl-directions__grid">
            {foreach from=$implants_directions item=dir}
                <div class="impl-directions__card">
                    <div class="impl-directions__icon">{$dir.icon}</div>
                    <h3 class="impl-directions__card-title">{$dir.title}</h3>
                    <p class="impl-directions__card-text">{$dir.text}</p>
                </div>
            {/foreach}
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ПОЛНЫЙ ЦИФРОВОЙ ЦИКЛ
     ═══════════════════════════════════════════════════════ -->
<section class="impl-digital">
    <div class="container">
        <h2 class="impl-section-title">{$implants_digital_title}</h2>

        <div class="impl-digital__steps">
            {foreach from=$implants_digital_steps item=step}
                <div class="impl-digital__step">
                    <div class="impl-digital__step-img">
                        <img src="{$TPL_URL}/assets/images/{$step.img}" alt="{$step.title}" loading="lazy">
                    </div>
                    <h3 class="impl-digital__step-title">{$step.title}</h3>
                    <p class="impl-digital__step-text">{$step.text}</p>
                </div>
            {/foreach}
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ПОДДЕРЖИВАЕМЫЕ МАТЕРИАЛЫ
     ═══════════════════════════════════════════════════════ -->
<section class="impl-materials">
    <div class="container">
        <h2 class="impl-section-title">{$implants_materials_title}</h2>
        <p class="impl-materials__text">{$implants_materials_text}</p>

        <div class="impl-materials__logos">
            {foreach from=$implants_materials_logos item=logo}
                <div class="impl-materials__logo-item">
                    <img src="{$TPL_URL}/assets/images/{$logo}" alt="Логотип производителя порошка" class="impl-materials__logo-img" loading="lazy">
                </div>
            {/foreach}
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ПРИМЕРЫ МЕДИЦИНСКИХ ПРИМЕНЕНИЙ
     ═══════════════════════════════════════════════════════ -->
<section class="impl-cases">
    <div class="container">
        <h2 class="impl-section-title">{$implants_cases_title}</h2>

        <div class="impl-cases__grid">
            {foreach from=$implants_cases item=case}
                <div class="impl-cases__card">
                    <div class="impl-cases__card-img">
                        <img src="{$TPL_URL}/assets/images/{$case.img}" alt="{$case.title}" loading="lazy">
                    </div>
                    <div class="impl-cases__card-body">
                        <h3 class="impl-cases__card-title">{$case.title}</h3>
                        <p class="impl-cases__card-text">{$case.text}</p>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
</section>
