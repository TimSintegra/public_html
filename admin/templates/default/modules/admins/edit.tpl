{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/admins/">Перейти к спискам администраторов</a></div>
{else}
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
</div>
<div id="blockpadding">
    <form action="{$ADMIN_URL}/admins/edit/" method="post" name="admineditform">
        <div class="rowform"><label>Тип администратора:</label>{$roleSelect}</div>
        <div class="rowform"><label>Логин:</label><input type="text" name="admin_username" value="{$_val.admin_username}" readonly></div>
        <div class="rowform"><label>Email:<br /><em>Пароль сформируется автоматически и отправится на эл. почту</em></label><input type="text" name="admin_email" value="{$_val.admin_email}"></div>
        <div class="rowformbutton">
            {$hiddenInputs}
            <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
        </div>
    </form>
</div>
{/if}