<div class="leftbuttons">
    <a href="{$ADMIN_URL}/services/add/" class="linktheme dobserv">Добавить услугу</a>
</div>
<div class="leftbuttons">
    <a href="{$ADMIN_URL}/services/" class="linktheme listserv">Список услуг</a>
</div>
<div class="leftbuttons">
    <a href="{$ADMIN_URL}/servicescats/" class="linktheme dobrazdel">Список категорий</a>
</div>
{if count($blockexpSpecs) != 0}
    <div class="menu">
        <ul id="my-menu" class="sample-menu">
            <li><a href="#">Категории</a>
                <ul>
                    {foreach from=$blockexpSpecs key=s item=t}
                        <li>
                            <a href="{$ADMIN_URL}/services/show/{$blockexpSpecs.$s.id}/">
                                {$blockexpSpecs.$s.title}
                            </a>
                        </li>
                    {/foreach}
                </ul>
            </li>
        </ul>
    </div>
{/if}