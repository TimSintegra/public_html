<nav id="menu">
    <ul>
        <li><a href="{$MAIN_URL}/">Главная</a></li>
        {foreach from=$mainMenu key=m item=n}
            <li>
                {if count($mainMenu.$m.subcats) != 0}
                    <span>{$mainMenu.$m.title}</span>
                    <ul>
                        {foreach from=$mainMenu.$m.subcats key=s item=t}
                            <li><a href="{$mainMenu.$m.subcats.$s.url}">{$mainMenu.$m.subcats.$s.title}</a></li>
                        {/foreach}
                    </ul>
                {else}
                    <a href="{$mainMenu.$m.url}">{$mainMenu.$m.title}</a>
                {/if}
            </li>
        {/foreach}
    </ul>
</nav>
