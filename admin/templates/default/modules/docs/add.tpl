{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/docs/">Перейти к списку документов</a></div>
{else}
    <div id="bigblockheader">
        <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
    </div>
    <div id="blockpadding">
        <form action="{$ADMIN_URL}/docs/add/" method="post" name="newsform" enctype="multipart/form-data">
            <div class="rowform"><label>Заголовок/Название:</label><input type="text" name="title" value="{$_val.title}"></div>
            <div class="rowform"><label>Файл:<br /><em>Условия файла: файл должен быть в формате doc, docx, xls, xlsx, txt, rtf, pdf. Максимальный размер файла - 5Gb</em></label><input type="file" name="docs"></div>
            <div class="rowformbutton">
                {$hiddenInputs}
                <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
            </div>
        </form>
    </div>
{/if}