<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
</div>
<div id="blockpadding">
    <form action="{$ADMIN_URL}/projects/settings/" method="post" name="aboutform">
        <div class="rowform"><label>Заголовок страницы:</label><input type="text" name="title" value="{$_val.title}"></div>
        <div class="rowform"><label>Основная информация:</label><div class="main_content_textarea"><textarea id="main_content" name="main_content">{$_val.main_content}</textarea></div></div>
        <div class="rowform"><label>Кол-во завершенных проектов:</label><input type="text" name="count" value="{$_val.count}"></div>
        <div class="rowformbutton">
            {$hiddenInputs}
            <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
        </div>
    </form>
</div>

