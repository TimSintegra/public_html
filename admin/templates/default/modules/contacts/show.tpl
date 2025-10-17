<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
</div>
<div id="blockpadding">
    <form action="{$ADMIN_URL}/contacts/show/" method="post" name="aboutform">
        <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="{$_val.title}"></div>
        <div class="rowform"><label>Доп.заголовок:</label><input type="text" name="title2" value="{$_val.title2}"></div>
        <div class="rowform"><label>Телефон:</label><input type="text" name="tel" value="{$_val.tel}"></div>
        <div class="rowform"><label>E-mail:</label><input type="text" name="mail" value="{$_val.mail}"></div>
        <div class="rowform"><label>Адрес:</label><input type="text" name="address" value="{$_val.address}"></div>
        <div class="rowform"><label>Координаты яндекс:</label><input type="text" name="shema" value="{$_val.shema}"></div>
        <div class="rowformbutton">
            {$hiddenInputs}
            <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
        </div>
    </form>
</div>

