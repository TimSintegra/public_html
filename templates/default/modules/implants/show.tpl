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
