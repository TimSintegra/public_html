<section class="contacts-section">
    <div class="container">
        <div class="contacts-header">
            <h1>{$contactsData.title}</h1>
        </div>
        
        <div class="contacts-content">
            <!-- Левая колонка: Офисы -->
            <div class="offices-block">
                {foreach from=$contactsData.offices item=office}
                    <!-- 🔗 Карточка теперь ссылка -->
                    <a href="{$office.map_url}" target="_blank" rel="noopener noreferrer" class="office-card-link">
                        <div class="office-card">
                            {if $office.icon}
                                <div class="office-icon">{$office.icon}</div>
                            {/if}
                            <h2>{$office.title}</h2>
                            <p class="country">{$office.country}</p>
                            {if $office.region}
                                <p class="region">{$office.region}</p>
                            {/if}
                            <p class="address">{$office.address}</p>
                            <p class="email">Email: <a href="mailto:{$office.email}" onclick="event.stopPropagation()">{$office.email}</a></p>
                        </div>
                    </a>
                {/foreach}
            </div>
            
            <!-- Правая колонка: QR-код -->
            <div class="qr-block">
                <div class="qr-card">
                    <h3>{$contactsData.qr.title}</h3>
                    <img src="{$TPL_URL}/assets/images/{$contactsData.qr.image}" alt="QR-код" class="qr-code">
                    <p class="qr-description">{$contactsData.qr.description}</p>
                </div>
            </div>
        </div>
    </div>
</section>