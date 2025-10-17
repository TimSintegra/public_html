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
            {html_table loop=$tableData cols=$colsTitles table_attr=$tableAttr tr_attr=$trAttr td_attr=$tdAttr th_attr=$thAttr}
        </div>
{/if}
