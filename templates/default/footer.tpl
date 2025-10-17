<div class="footer">
    <div class="f sb content-wrapper">
        <a href="{$MAIN_URL}/" class="logo"><img src="{$TPL_URL}/images/new_sintegra_logo.png"/></a>
        <ul class="navfoot">
            <li><a href="{$MAIN_URL}/" {if $MODULE_PATH == 'index'}class="active"{/if}>Главная</a></li>
            {foreach from=$mainMenu key=m item=n}
                <li><a href="{$mainMenu.$m.url}" {if $mainMenu.$m.active == 1}class="active"{/if}>{$mainMenu.$m.title}</a></li>
            {/foreach}
        </ul>
        <div class="fadd">
            <span>Адрес</span>
            <i>{$mainPage.address}</i>
        </div>
        <div class="ftel">
            <span>{$mainPage.tel}</span>
            <i>{$mainPage.rejim}</i>
        </div>
    </div>
    <div class="f sb content-wrapper">
        <span>©{$smarty.now|date_format:"%Y"} ООО «Синтегра». Все права защищены.</span>
        <span>Создано в <a href="http://rbix.ru" target="_blank">“RBIX”</a></span>
    </div>
</div>

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