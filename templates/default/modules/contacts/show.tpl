<section class="contacts-section">
    <div class="container">
        <div class="contacts-header">
            <h1>{$contactsData.title}</h1>
        </div>
        
        <div class="contacts-content">
            <!-- Левая колонка: Офисы -->
            <div class="offices-block">
                {foreach from=$contactsData.offices item=office}
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
                        <p class="email">Email: <a href="mailto:{$office.email}">{$office.email}</a></p>
                    </div>
                {/foreach}
            </div>
            
            <!-- Правая колонка: QR-код -->
            <div class="qr-block">
                <div class="qr-card">
                    <h3>{$contactsData.qr.title}</h3>
                    <img src="{$TPL_URL}/images/{$contactsData.qr.image}" alt="QR-код" class="qr-code">
                    <p class="qr-description">{$contactsData.qr.description}</p>
                </div>
            </div>
        </div>
    </div>
</section>



{include file="$TPL_PATH/scripts.tpl"}

<div style="display: none;" id="bell2">
    <h2>Перезвонить Вам?</h2>
    <p>Оставьте Ваши данные и мы Вам перезвоним!</p>
    <form>
        <div class="frm-blk w12">
            <input name="uname1" id="uname1" type="text" class="styler" placeholder="Ваше Имя">
        </div>
        <div class="frm-blk w12">
            <input name="tel1" id="tel1" type="text" class="styler" placeholder="Телефон">
        </div>
        <div class="frm-blk w12">
            <input name="email1" id="email1" type="text" class="styler" placeholder="E-mail">
        </div>
        <div class="frm-blk w12">
            <textarea  name="message1" id="message1" class="styler" placeholder="Текст сообщения" rows="5"></textarea>
        </div>
        <div class="w12 center">
            <input type="submit" value="Отправить заявку" class="wh_btn mbtn" id="submit1">
        </div>
    </form>
</div>