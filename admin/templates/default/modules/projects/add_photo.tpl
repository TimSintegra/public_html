{literal}
<script type="text/javascript">
    $(function() {
        $('.uploader').ajaxupload({
            url: '{/literal}{$ADMIN_URL}{literal}/upload.php',
            maxFiles: 10,
            maxFileSize: '1.5G',
            allowExt:['jpg', 'gif', 'png'],
            form:'#uploadphotos'
        });
    });
</script>
{/literal}
{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/projects/">Перейти к списку объектов</a></div>
{else}
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
</div>
<div id="blockpadding">
    <form action="{$ADMIN_URL}/projects/add_photo/" method="post" name="advsform" id="uploadphotos">
        <p style="padding-left:150px;width:600px;"><strong>Можно выбирать несколько фотографий. Условия для изображений: каждый файл не более 2Гб. Всего можно выбрать 10 файлов. Расширения файлов: jpg, gif, png</strong></p>
        <div class="rowform"><div class="uploader"></div></div>
        <div class="rowformbutton">
            {$hiddenInputs}
            <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
        </div>
    </form>
</div>
{/if}