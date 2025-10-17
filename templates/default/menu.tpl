<div id="menu-wrapper">
    <ul class="nav">
        <li><a href="{$MAIN_URL}/" {if $MODULE_PATH == 'index'}class="active"{/if}>Главная</a></li>
        {foreach from=$mainMenu key=m item=n}
            <li>
            {if count($mainMenu.$m.subcats) != 0}
                <a href="{$mainMenu.$m.url}" {if $mainMenu.$m.active == 1}class="active"{/if}>{$mainMenu.$m.title}</a>
                <div>
                <ul>
                    {foreach from=$mainMenu.$m.subcats key=s item=t}
                        <li><a href="{$mainMenu.$m.subcats.$s.url}">{$mainMenu.$m.subcats.$s.title}</a></li>
                    {/foreach}
                </ul>
                </div>
            {else}
                <a href="{$mainMenu.$m.url}" {if $mainMenu.$m.active == 1}class="active"{/if}>{$mainMenu.$m.title}</a>
            {/if}
            </li>
        {/foreach}

       <!--  <li class="more">
            <span>Ещё</span>
            <ul id="overflow">
            </ul>
        </li> -->
    </ul>
</div>