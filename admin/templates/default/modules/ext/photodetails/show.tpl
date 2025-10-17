{if $errorText == ''}
    {if count($allPhotos) != 0}
        <form action="" method="POST">
        {foreach from=$allPhotos key=k item=v}
            <div class="photo">
                <img src="{$allPhotos.$k.imageUrl}" width="100"><br>
                <input type="text" name="msort[{$allPhotos.$k.id}]" value="{$allPhotos.$k.msort}" style="width:30px;text-align: center;"><br>
                <input type="checkbox" value="{$allPhotos.$k.id}" name="photo[]"><br>
                <hr noshade size="1" style="margin-top: 5px;">
            </div>
        {/foreach}
            <div class="dialog_button">
                <input type="submit" name="delPhotos" value="Сохранить сортировку и удалить выбранные фотографии" style="clear:both;">
            </div>
        </form>
    {/if}
{else}
    {$errorText}
{/if}