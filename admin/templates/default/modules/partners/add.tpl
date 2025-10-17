{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/partners/">Перейти к списку слайдев</a></div>
{else}
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
</div>
<div id="blockpadding">
    <form action="{$ADMIN_URL}/partners/add/" method="post" name="newsform" enctype="multipart/form-data">
        <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="{$_val.title}"></div>
        <div class="rowform"><label>Показывать на главной:</label><input type="checkbox" value="1" name="main" class="checkboxs"> Да</div>
        <div class="rowform"><label>Изображение:<br /><em>Условия изображения: минимум по ширине 240px , размер файла не более 5Гб.</em></label><input type="file" name="partners"></div>
        <div class="rowformbutton">
            {$hiddenInputs}
            <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
        </div>
    </form>
</div>
{/if}