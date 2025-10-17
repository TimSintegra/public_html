{if $errorText != ''}
{include file="$TPL_PATH/error.tpl"}
{/if}
<div id="bigblockshadow_l">
    <div id="bigblock_l">
        <div id="bigblockheader_l">
            <div id="bigblockheadermargin_l"><h1>Вход в административный раздел</h1></div>
        </div>
        <div id="blockpadding">
            <form action="{$ADMIN_URL}/login/" method="post">
                <div class="rowform"><label>Логин:</label><input type="text" name="username" value=""></div>
                <div class="rowform"><label>Пароль:</label><input type="password" name="password"></div>
                <div class="rowformbutton">
                    <input type="submit" name="sublogin" value="Войти" class="formbutton">
                </div>
            </form>
        </div>
    </div>
</div>

