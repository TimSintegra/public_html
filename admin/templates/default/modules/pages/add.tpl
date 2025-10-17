{if $successText != ''}
    <div class="success"><a href="{$ADMIN_URL}/pages/">Перейти к списку страниц</a></div>
{else}
<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
</div>
<div id="blockpadding">
    <form action="{$ADMIN_URL}/pages/add/" method="post" name="vacancyform" id="pageadd" enctype="multipart/form-data">
        <div class="rowform"><label>Категория:</label>{$parentCategory}</div>
        <div class="rowform"><label>Заголовок:</label><input type="text" name="title" value="{$_val.title}"></div>
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