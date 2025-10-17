{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/mainmenu/">Перейти к списку пунктов</a></div>
{else}
{if $moduleSelect != ''}
{literal}
    <script type="text/javascript">
        $(document).ready(function() {
            $("#module").change(function() {
                $("#subcat").load("{/literal}{$ADMIN_URL}{literal}/ext/getsubcats/" + $("#module").val() + "/");
                $("#item").html('<input type="hidden" name="cid" value="0">');
                if ($("#module").val() == 'link') {
                    $("#link").html('<div class="rowform"><label>Ссылка:</label><input type="text" name="link" value=""></div>');
                } else {
                    $("#link").html('<input type="hidden" name="link" value="">');
                }
            });
            $("#pid").live("change", (function() {
                $("#item").load("{/literal}{$ADMIN_URL}{literal}/ext/getitem/" + $("#pid").val() + "/" + $("#module").val() + "/");
            }));
        });
</script>
{/literal}
    {/if}
    <div id="bigblockheader">
        <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
    </div>
    <div id="blockpadding">
        <form action="{$ADMIN_URL}/mainmenu/edit/" method="post" name="advsform">
            <div class="rowform"><label>Название пункта:</label><input type="text" name="title" value="{$_val.title}"></div>
            {if $moduleSelect != ''}
                <div class="rowform"><label>Модуль: <br /><em>Если выберите модуль "Страницы" или "Услуги", то можно дальше выбрать подкатегорию модуля</em></label>{$moduleSelect}</div>
                <div id="subcat">{$subcatSelect}</div>
                <div id="item">{$itemSelect}</div>
                <div id="link">{$linkText}</div>
            {/if}
            <div class="rowformbutton">
                {$hiddenInputs}
                <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
            </div>
        </form>
    </div>
{/if}