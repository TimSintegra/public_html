{literal}
    <style>
        #slider{
            margin-bottom: 60px;
        }

        ul.bjqs-controls.v-centered li a{
            display:block;
            padding:10px;
            background:#fff;
            color:#000;
            text-decoration: none;
        }

        ul.bjqs-controls.v-centered li a:hover{
            background:#000;
            color:#fff;
        }

        ol.bjqs-markers li a{
            padding:5px 10px;
            background:#000;
            color:#fff;
            margin:5px;
            text-decoration: none;
        }

        ol.bjqs-markers li.active-marker a,
        ol.bjqs-markers li a:hover{
            background: #999;
        }

        p.bjqs-caption{
            background: rgba(255,255,255,0.5);
        }
    </style>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#slider{/literal}{$smarty.now}{literal}').bjqs({
            height      : 300,
            width       : 300,
            responsive  : true
        });
    });
</script>
{/literal}
<center>
    {if count($infoText) != 0}
        <div id="slider{$smarty.now}">
            <ul class="bjqs">
                {foreach from=$infoText key=k item=v}
                    <li><img src="{$ADMIN_URL}/../content/img/products/{$v}"></li>
                {/foreach}
            </ul>
        </div>
    {else}
        Нет изображений!
    {/if}
</center>
