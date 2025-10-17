<div class="leftbuttons">
    <a href="{$ADMIN_URL}/pages/add/" class="linktheme dobserv">Добавить страницу</a>
</div>
<div class="leftbuttons">
    <a href="{$ADMIN_URL}/pages/" class="linktheme listserv">Список страниц</a>
</div>
<div class="leftbuttons">
    <a href="{$ADMIN_URL}/pagescat/" class="linktheme dobrazdel">Список категорий</a>
</div>
{if count($blockexpSpecs) != 0}
    <div class="menu">
        <ul id="my-menu" class="sample-menu">
            <li><a href="#">Категории</a>
                <ul>
                    {foreach from=$blockexpSpecs key=s item=t}
                        <li>
                            <a href="{$ADMIN_URL}/pages/show/{$blockexpSpecs.$s.id}/">
                                {$blockexpSpecs.$s.title}
                            </a>
                        </li>
                    {/foreach}
                </ul>
            </li>
        </ul>
    </div>
{/if}