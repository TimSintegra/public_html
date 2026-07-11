<section class="impl-hero">
    <div class="container">
        <h1 class="impl-hero__title">{$page_title}</h1>
        <p class="impl-hero__lead">{$page_lead}</p>
        <p class="impl-hero__intro">{$page_intro}</p>
    </div>
</section>

<section class="impl-printer">
    <div class="container">
        <h2 class="impl-section-title">{$printer_name}</h2>
        <p class="impl-printer__intro">{$printer_intro}</p>
        <div class="impl-table-wrapper">
            <table class="impl-table">
                <thead>
                    <tr><th>Параметр</th><th>Значение</th></tr>
                </thead>
                <tbody>
                    {foreach from=$printer_specs item=s}
                    <tr><td>{$s.param}</td><td>{$s.value}</td></tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="impl-tech">
    <div class="container">
        <h2 class="impl-section-title">Технологические возможности</h2>
        <div class="impl-tech__grid">
            {foreach from=$tech_features item=f}
            <div class="impl-tech__card">
                <div class="impl-tech__icon">{$f.icon}</div>
                <h3 class="impl-tech__card-title">{$f.title}</h3>
                <p class="impl-tech__card-text">{$f.text}</p>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-materials">
    <div class="container">
        <h2 class="impl-section-title">Материалы</h2>
        <p class="impl-materials__intro">{$materials_intro}</p>
        <div class="impl-table-wrapper">
            <table class="impl-table impl-table--wide">
                <thead>
                    <tr>
                        <th>Материал</th>
                        <th>Описание</th>
                        <th>Предел текучести, МПа</th>
                        <th>Предел прочности, МПа</th>
                        <th>Относит. удлинение, %</th>
                        <th>Твёрдость</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$materials item=m}
                    <tr>
                        <td><strong>{$m.name}</strong></td>
                        <td>{$m.desc}</td>
                        <td>{$m.yield}</td>
                        <td>{$m.tensile}</td>
                        <td>{$m.elong}</td>
                        <td>{$m.hardness}</td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="impl-advantages">
    <div class="container">
        <h2 class="impl-section-title">Ключевые преимущества</h2>
        <div class="impl-advantages__grid">
            {foreach from=$advantages item=a}
            <div class="impl-advantages__card">
                <div class="impl-advantages__icon">{$a.icon}</div>
                <h3 class="impl-advantages__card-title">{$a.title}</h3>
                <p class="impl-advantages__card-text">{$a.text}</p>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-industries">
    <div class="container">
        <h2 class="impl-section-title">{$industries_title}</h2>
        <p class="impl-industries__intro">{$industries_intro}</p>
        <div class="impl-industries__grid">
            {foreach from=$industries item=ind}
            <div class="impl-industries__card">
                <div class="impl-industries__icon">{$ind.icon}</div>
                <h3 class="impl-industries__card-title">{$ind.title}</h3>
                <p class="impl-industries__card-text">{$ind.text}</p>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-medical">
    <div class="container">
        <h2 class="impl-section-title">Медицинские направления</h2>
        <div class="impl-medical__grid">
            {foreach from=$med_directions item=d}
            <div class="impl-medical__card">
                <div class="impl-medical__icon">{$d.icon}</div>
                <h3 class="impl-medical__card-title">{$d.title}</h3>
                <p class="impl-medical__card-text">{$d.text}</p>
            </div>
            {/foreach}
        </div>
    </div>
</section>

<section class="impl-cases">
    <div class="container">
        <h2 class="impl-section-title">Примеры реализации</h2>
        <div class="impl-cases__grid">
            {foreach from=$cases item=c}
            <div class="impl-cases__card">
                <h3 class="impl-cases__card-title">{$c.title}</h3>
                <p class="impl-cases__card-text">{$c.desc}</p>
                <ul class="impl-cases__specs">
                    {foreach from=$c.specs item=s}
                    <li>{$s}</li>
                    {/foreach}
                </ul>
            </div>
            {/foreach}
        </div>
    </div>
</section>
