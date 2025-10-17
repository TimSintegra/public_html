{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/certificates/">Перейти к списку сертификатов</a></div>
{else}
    <div id="bigblockheader">
        <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
    </div>
    <div id="blockpadding">
        <form action="{$ADMIN_URL}/certificates/edit/" method="post" name="newsform" enctype="multipart/form-data">
            <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="{$_val.title}"></div>
            <div class="rowform"><label>Изображение:<br />
                    {if $_val.image != ''}
                        <img src="{$ADMIN_URL}/../content/img/cert/sm/{$_val.image}" width="70" border="0"><br>
                    {/if}
                    <em>Условия изображения: 228х325px (или пропорционально больше), размер файла не более 5Гб.</em></label><input type="file" name="cert"></div>
            <div class="rowformbutton">
                {$hiddenInputs}
                <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
            </div>
        </form>
    </div>
{/if}