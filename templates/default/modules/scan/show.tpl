<section class="scan3d-hero">
    <div class="container scan3d-hero__inner">
        <div class="scan3d-hero__text">
            <h1 class="scan3d-title">{$scan_title}</h1>
            <p class="scan3d-lead">{$scan_lead}</p>
            <p class="scan3d-text">{$scan_intro}</p>
        </div>

        <div class="scan3d-hero__image">
            <img src="{$TPL_URL}/assets/images/{$scan_image}" alt="3D‑сканирование деталей" loading="lazy">
        </div>
    </div>
</section>

<section class="scan3d-spec">
    <div class="container">
        <h2 class="scan3d-subtitle">{$scan_table.header.0}</h2>

        <div class="scan3d-table-wrapper">
            <table class="scan3d-table">
                <thead>
                    <tr>
                        <th>{$scan_table.header.0}</th>
                        <th>{$scan_table.header.1}</th>
                        <th>{$scan_table.header.2}</th>
                        <th>{$scan_table.header.3}</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$scan_table.rows item=row}
                        <tr>
                            <td>{$row.label}</td>
                            <td>{$row.L}</td>
                            <td>{$row.M}</td>
                            <td>{$row.S}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="scan3d-blocks">
    <div class="container scan3d-blocks__inner">

        <div class="scan3d-card">
            <h2 class="scan3d-card__title">{$scan_handheld.title}</h2>
            <ul class="scan3d-list">
                {foreach from=$scan_handheld.items item=li}
                    <li>{$li}</li>
                {/foreach}
            </ul>
        </div>

        <div class="scan3d-card">
            <h2 class="scan3d-card__title">{$scan_l5.title}</h2>
            <ul class="scan3d-list">
                {foreach from=$scan_l5.items item=li}
                    <li>{$li}</li>
                {/foreach}
            </ul>
        </div>

    </div>
</section>
