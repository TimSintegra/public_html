{include file="$TPL_PATH/header.tpl"}
<body>
<div id="wrapper">
    <div id="header">
        <a href="{$ADMIN_URL}/" class="logo">
            <img src="{$TPL_URL}/images/sintegra_logo.png" alt="" height="62"/>
        </a>
        <i class="logininfo">Вы вошли в систему как "{$loggedAdmin}"</i>
        <ul id="topmenu">
            <li><a href="{$ADMIN_URL}/../" class="web" target="_blank">Перейти на сайт</a></li>
            <li><a href="{$ADMIN_URL}/logout/" class="exit nobordertopmenuright">Выход</a></li>
        </ul>
        {include file="$TPL_PATH/mainmenu.tpl"}
    </div>
    <div id="middle">
        <div id="container">
            <div id="content">
                {if $errorText != ''}
                    {include file="$TPL_PATH/error.tpl"}
                {/if}
                {if $successText != ''}
                    {include file="$TPL_PATH/success.tpl"}
                {/if}
                <div id="bigblockshadow">
                    <div id="bigblock">
                     {include file="$TPL_PATH/modules/{$MODULE_PATH}/{$MODULE_ACT}.tpl"}
                    </div>
                </div>
            </div><!-- #content-->
        </div><!-- #container-->
        <div class="sidebar" id="sideLeft">
            {if $leftBlocks == 2}
                {include file="$TPL_PATH/blocks/{$MODULE_PATH}/{$MODULE_ACT}.tpl"}
            {elseif $leftBlocks == 1}
                {include file="$TPL_PATH/blocks/{$MODULE_PATH}/show.tpl"}
            {/if}
        </div>
    </div><!-- #middle-->
    {include file="$TPL_PATH/footer.tpl"}
</div><!-- #wrapper -->
</body>
</html>