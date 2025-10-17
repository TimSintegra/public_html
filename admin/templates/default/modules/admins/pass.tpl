{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/admins/">Перейти к спискам администраторов</a></div>
{else}
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
</div>
<div id="blockpadding">
    <form action="{$ADMIN_URL}/admins/pass/" method="post" name="adminpassform">
        <div class="rowformbutton">
            {$hiddenInputs}
            <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
            <input type="button" name="reset" value="Отменить" onclick="javascript:history.go(-1)" class="formbutton">
        </div>
    </form>
</div>
{/if}