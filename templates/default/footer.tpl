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