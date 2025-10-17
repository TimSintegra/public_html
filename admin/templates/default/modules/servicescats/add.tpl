{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/servicescats/">Перейти к списку категорий</a></div>
{else}
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
</div>
<div id="blockpadding">
    <form action="{$ADMIN_URL}/servicescats/add/" method="post" name="advsform">
        <div class="rowform"><label>Название категории:</label><input type="text" name="title" value="{$_val.title}"></div>
        <div class="rowform"><label>Основная информация:</label><div class="main_content_textarea"><textarea id="main_content" name="main_content">{$_val.main_content}</textarea></div></div>
        <div class="rowformbutton">
            {$hiddenInputs}
            <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
        </div>
    </form>
</div>
{/if}