{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/advantages/">Перейти к списку преимуществ</a></div>
{else}
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
</div>
<div id="blockpadding">
    <form action="{$ADMIN_URL}/advantages/edit/" method="post" name="newsform" enctype="multipart/form-data">
        <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="{$_val.title}"></div>
        <div class="rowform"><label>Изображение:<br /><br />
                {if $_val.image != ''}
                    <img src="{$ADMIN_URL}/../content/img/main/{$_val.image}" width="50" border="0"><br><br>
                {/if}
                <em>Условия изображения: минимум по ширине 97px , размер файла не более 5Гб.</em></label><input type="file" name="adv"></div>
        <div class="rowformbutton">
            {$hiddenInputs}
            <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
        </div>
    </form>
</div>
{/if}