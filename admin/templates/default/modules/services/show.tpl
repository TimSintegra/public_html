{if $errorData != ''}
            <div id="bigblockheader">
                <div id="bigblockheadermargin">
                    <a href="#">{$errorData}</a>
                </div>
            </div>
{else}
        <div id="bigblockheader">
            <div id="bigblockheadermargin">
                {$tableHeader}
            </div>
        </div>
        <div id="blockpadding">
            <form name="saveMsort" method="post" action="{$ADMIN_URL}/services/" style="width:100%">
                <input type="submit" value="Сохранить сортировку" name="save_sorting" style="float:left;clear:both; padding:5px; margin:5px;">
                {html_table loop=$tableData cols=$colsTitles table_attr=$tableAttr tr_attr=$trAttr td_attr=$tdAttr th_attr=$thAttr}
                <input type="submit" value="Сохранить сортировку" name="save_sorting" style="float:left;clear:both; padding:5px; margin:5px;">
            </form>
        </div>
{/if}
