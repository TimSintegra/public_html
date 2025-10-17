{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/services/">Перейти к списку услуг</a></div>
{else}
    <div id="bigblockheader">
        <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
    </div>
    <div id="blockpadding">
        <form action="{$ADMIN_URL}/services/edit/" method="post" name="vacancyform" id="pageadd" enctype="multipart/form-data">
            <div class="rowform"><label>Категория:</label>{$parentCategory}</div>
            <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="{$_val.title}"></div>
            <div class="rowform"><label>Изображение:<br />
                    {if $_val.image != ''}
                        <img src="{$ADMIN_URL}/../content/img/pages/{$_val.image}" width="70" border="0"><br>
                    {/if}
                    <em>Условия изображения: 400х300px (или пропорционально больше), размер файла не более 5Гб.</em></label><input type="file" name="service"></div>
            <div class="rowform"><label>Показывать на главной:</label><input type="checkbox" value="1" name="main" class="checkboxs"{if $_val.main == 1} checked{/if}> Да</div>
            <div class="rowform"><label>Основная информация:</label><div class="main_content_textarea"><textarea id="main_content" name="main_content">{$_val.main_content}</textarea></div></div>
            <div class="rowform"><label>SEO title:</label><input type="text" name="stitle" value="{$_val.stitle}"></div>
            <div class="rowform"><label>SEO keywords:</label><input type="text" name="keywords" value="{$_val.keywords}"></div>
            <div class="rowform"><label>SEO description:</label><input type="text" name="description" value="{$_val.description}"></div>

            <div class="rowformbutton">
                {$hiddenInputs}
                <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
            </div>
        </form>
    </div>
{/if}