{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/projects/">Перейти к списку проектов</a></div>
{else}
{literal}
    <script type="text/javascript">
        $(document).ready(function() {
            $('.uploader').ajaxupload({
                url: '{/literal}{$ADMIN_URL}{literal}/upload.php',
                maxFiles: 10,
                allowExt:['jpg', 'gif', 'png'],
                form:'#productadd'
            });
        });
    </script>
{/literal}
    <div id="bigblockheader">
        <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
    </div>
    <div id="blockpadding">
        <form action="{$ADMIN_URL}/projects/add/" method="post" name="vacancyform" id="productadd" enctype="multipart/form-data">
            <div class="rowform"><label>Название проекта:</label><input type="text" name="title" value="{$_val.title}"></div>
            <div class="rowform"><label>Основное изображение:<br /><em>Условия изображения: минимум по ширине 1600px , размер файла не более 5Гб.</em></label><input type="file" name="project"></div>
            <div class="rowform"><label>Короткий текст:</label><textarea name="short_text" cols="40" rows="7">{$_val.short_text}</textarea></div>
            <div class="rowform"><label>Основная информация:</label><div class="main_content_textarea"><textarea id="main_content" name="main_content">{$_val.main_content}</textarea></div></div>
            <div class="rowform"><label>Партнер, если есть:</label>{$parentCategory}</div>
            <div class="rowform"><label>Показывать на главной:</label><input type="checkbox" value="1" name="main" class="checkboxs"> Да</div>
            <div class="rowform"><div class="uploader"></div></div>
            <div class="rowformbutton">
                {$hiddenInputs}
                <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
            </div>
        </form>
    </div>
{/if}