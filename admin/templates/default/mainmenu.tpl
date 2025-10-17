<div id="myslidemenu" class="jqueryslidemenu">
{if count($adminMenu) gt 0}
    <ul>
        {foreach $adminMenu as $step1value}
            {if is_array($step1value.submenu) && count($step1value.submenu) > 0}
                {if ($step1value.module) != 'none'}
                    <li>
                        <a href="{$ADMIN_URL}/{$step1value.module}/" class="{$step1value.class}">
                            {$step1value.title}
                        </a>
                {else}
                    <li>
                        <a href="#" class="{$step1value.class}">
                            {$step1value.title}
                        </a>
                {/if}
                    <ul>
                        {foreach $step1value.submenu as $step2value}
                            {if ($step2value.module) != 'none'}
                                <li><a href="{$ADMIN_URL}/{$step2value.module}/" class="{$step2value.class}">{$step2value.title}</a></li>
                            {else}
                                <li><a href="#" class="{$step2value.class}">{$step2value.title}</a></li>
                            {/if}
                        {/foreach}
                    </ul>
                </li>
            {else}
                {if ($step1value.module) != 'none'}
                    <li><a href="{$ADMIN_URL}/{$step1value.module}/" class="{$step1value.class}">{$step1value.title}</a></li>
                {else}
                    <li><a href="#" class="{$step1value.class}">{$step1value.title}</a></li>
                {/if}
            {/if}
        {/foreach}
    </ul>
{/if}
    <br style="clear: left" />
</div>
