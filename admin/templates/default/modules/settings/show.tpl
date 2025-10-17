<div id="bigblockheader">
    <div id="bigblockheadermargin"><h1>{$formDetails.formTitle}</h1></div>
</div>
<div id="blockpadding">
    <form action="{$ADMIN_URL}/settings/show/" method="post" name="settingsform" enctype="multipart/form-data">
        {if count($_val) != 0}
            {foreach from=$_val key=k item=v}
                <div class="rowform"><label>{$_val.$k.setname_title}:
                    {if $_val.$k.settype == 'text'}
                        </label><input type="text" name="{$_val.$k.setname}" value="{$_val.$k.setvalue}">
                    {elseif $_val.$k.settype == 'textarea'}
                        </label><div class="main_content_textarea"><textarea id="main_content" name="{$_val.$k.setname}" rows="7" cols="50">{$_val.$k.setvalue}</textarea></div>
                    {elseif $_val.$k.settype == 'checkbox'}
                        </label>
                        <input type="hidden" name="hidden_{$_val.$k.setname}" value="{$_val.$k.setname}">
                        <input type="checkbox" name="{$_val.$k.setname}" value="1" {if $_val.$k.setvalue == 1} checked{/if} class="checkboxs"> Да
                    {elseif $_val.$k.settype == 'select'}
                        </label>
                        <select name="{$_val.$k.setname}">
                            {foreach from=$_val.$k.options key=l item=o}
                                <option value="{$_val.$k.options.$l.value}" {$_val.$k.options.$l.selected}>{$_val.$k.options.$l.title}</option>
                            {/foreach}
                        </select>
                    {elseif $_val.$k.settype == 'image'}
                        {if $_val.$k.setvalue != ''}
                            <img src="{$ADMIN_URL}/../content/img/main/{$_val.$k.setvalue}" width="70" border="0"><br>
                            <a href="{$ADMIN_URL}/settings/delimage/{$_val.$k.setname}/" onClick="return window.confirm('Вы действительно хотите удалить изображение?');">Удалить изображение</a>
                        {/if}
                        {if $_val.$k.setname == 'main_image'}
                            <br><em>Условия изображения: не менее 1920х787px(либо пропорционально больше), размер файла не более 5Гб.</em></label>
                            {elseif $_val.$k.setname == 'header_image'}
                            <br><em>Условия изображения: не менее 1920х429px(либо пропорционально больше), размер файла не более 5Гб.</em></label>
                        {else}
                            <br><em>Условия изображения: не менее 65х62px(либо пропорционально больше), размер файла не более 5Гб.</em></label>
                        {/if}
                        <input type="hidden" name="image_{$_val.$k.setname}" value="{$_val.$k.setname}">
                        <input type="file" name="{$_val.$k.setname}">
                    {/if}
                </div>
            {/foreach}
        {else}
            Нет настроек.
        {/if}
        <div class="rowform"><label>SEO title:</label><input type="text" name="title" value="{$seo.title}"></div>
        <div class="rowform"><label>SEO keywords:</label><input type="text" name="keywords" value="{$seo.keywords}"></div>
        <div class="rowform"><label>SEO description:</label><input type="text" name="description" value="{$seo.description}"></div>
        <div class="rowformbutton">
            {$hiddenInputs}
            <input type="submit" name="{$formDetails.submitName}" value="{$formDetails.submitValue}" class="formbutton">
        </div>
    </form>
</div>

