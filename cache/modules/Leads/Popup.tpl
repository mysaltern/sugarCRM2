

<script type="text/javascript" src="{sugar_getjspath file='include/javascript/sugar_3.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/JSON.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/popup_helper.js'}"></script>
<script type='text/javascript' src='{sugar_getjspath file='include/javascript/sugar_grp_overlib.js'}'></script>
<script type="text/javascript">
	{$ASSOCIATED_JAVASCRIPT_DATA}
</script>
{$SEARCH_FORM_HEADER}
<table cellpadding="0" cellspacing="0" border="0" width="100%" class="edit view">
<tr>
<td>
<form action="index.php" method="post" name="popup_query_form" id="popup_query_form">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td>
{$searchForm}
</td></tr>
<tr>
<td>
<input type="hidden" name="module" value="{$module}" />
<input type="hidden" name="action" value="Popup" />
<input type="hidden" name="query" value="true" />
<input type="hidden" name="func_name" value="" />
<input type="hidden" name="request_data" value="{$request_data}" />
<input type="hidden" name="populate_parent" value="false" />
<input type="hidden" name="hide_clear_button" value="true" />
<input type="hidden" name="record_id" value="" />
{$MODE}
<input type="submit" name="button" class="button"
	title="{$APP.LBL_SEARCH_BUTTON_TITLE}"
	accessKey="{$APP.LBL_SEARCH_BUTTON_KEY}"
	value="{$APP.LBL_SEARCH_BUTTON_LABEL}" />
</td>
<td align='right'></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
{$jsLang}
{$LIST_HEADER}
{if $should_process}
	<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>
		<tr class='pagination'>
			<td colspan='{$colCount+1}' align='right'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%'>
					<tr>
						<td align='left' >
							&nbsp;</td>
						<td  align='right' nowrap='nowrap'>						
							{if $pageData.urls.startPage}
								<button type='button' title='{$navStrings.start}' class='button' {if $prerow}onclick='return sListView.save_checks(0, "{$moduleString}");'{else} onClick='location.href="{$pageData.urls.startPage}"' {/if}>
									<img src='{sugar_getimagepath file="start.gif"}' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>
								</button>						
								<!--<a href='{$pageData.urls.startPage}' {if $prerow}onclick="return sListView.save_checks(0, '{$moduleString}')"{/if} ><img src='{sugar_getimagepath file="start.gif"}' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>&nbsp;{$navStrings.start}</a>&nbsp;-->
							{else}
								<button type='button' title='{$navStrings.start}' class='button' disabled>
									<img src='{sugar_getimagepath file="start_off.gif"}' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>
								</button>
								<!--<img src='{sugar_getimagepath file="start_off.gif"}' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>&nbsp;{$navStrings.start}&nbsp;&nbsp;-->
							{/if}
							{if $pageData.urls.prevPage}
								<button type='button' title='{$navStrings.previous}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.prev}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.prevPage}"'{/if}>
									<img src='{sugar_getimagepath file="previous.gif"}' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>							
								</button>
								<!--<a href='{$pageData.urls.prevPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.prev}, '{$moduleString}')"{/if} ><img src='{sugar_getimagepath file="previous.gif"}' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>&nbsp;{$navStrings.previous}</a>&nbsp;-->
							{else}
								<button type='button' class='button' disabled title='{$navStrings.previous}'>
									<img src='{sugar_getimagepath file="previous_off.gif"}' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>
								</button>
								<!--<img src='{sugar_getimagepath file="previous_off.gif"}' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>&nbsp;{$navStrings.previous}&nbsp;-->
							{/if}
								<span class='pageNumbers'>({if $pageData.offsets.lastOffsetOnPage == 0}0{else}{$pageData.offsets.current+1}{/if} - {$pageData.offsets.lastOffsetOnPage} {$navStrings.of} {if $pageData.offsets.totalCounted}{$pageData.offsets.total}{else}{$pageData.offsets.total}{if $pageData.offsets.lastOffsetOnPage != $pageData.offsets.total}+{/if}{/if})</span>
							{if $pageData.urls.nextPage}
								<button type='button' title='{$navStrings.next}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.next}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.nextPage}"'{/if}>
									<img src='{sugar_getimagepath file="next.gif"}' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>
								</button>
								<!--&nbsp;<a href='{$pageData.urls.nextPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.next}, '{$moduleString}')"{/if} >{$navStrings.next}&nbsp;<img src='{sugar_getimagepath file="next.gif"}' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'></a>&nbsp;-->
							{else}
								<button type='button' class='button' title='{$navStrings.next}' disabled>
									<img src='{sugar_getimagepath file="next_off.gif"}' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>
								</button>
								<!--&nbsp;{$navStrings.next}&nbsp;<img src='{sugar_getimagepath file="next_off.gif"}' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>-->
							{/if}
							{if $pageData.urls.endPage  && $pageData.offsets.total != $pageData.offsets.lastOffsetOnPage}
								<button type='button' title='{$navStrings.end}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.end}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.endPage}"'{/if}>
									<img src='{sugar_getimagepath file="end.gif"}' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>							
								</button>
								<!--<a href='{$pageData.urls.endPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.end}, '{$moduleString}')"{/if} >{$navStrings.end}&nbsp;<img src='{sugar_getimagepath file="end.gif"}' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'></a></td>-->
							{elseif !$pageData.offsets.totalCounted || $pageData.offsets.total == $pageData.offsets.lastOffsetOnPage}
								<button type='button' class='button' disabled title='{$navStrings.end}'>
								 	<img src='{sugar_getimagepath file="end_off.gif"}' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>
								</button>
								<!--&nbsp;{$navStrings.end}&nbsp;<img src='{sugar_getimagepath file="end_off.gif"}' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>-->
							{/if}
						</td>
					</tr>
				</table>
			</td>
		</tr>
	
		<tr height='20'>
			{if $prerow}
				<th scope='col' nowrap="nowrap" width='1%'>
					<input type='checkbox' class='checkbox' name='massall' value='' onclick='sListView.check_all(document.MassUpdate, "mass[]", this.checked);' />
				</th>
			{/if}
			{counter start=0 name="colCounter" print=false assign="colCounter"}
			{foreach from=$displayColumns key=colHeader item=params}
				<th scope='col' width='{$params.width}%' nowrap="nowrap">
					<div style='white-space: nowrap;'width='100%' align='{$params.align|default:'left'}'>
	                {if $params.sortable|default:true}              
		                <a href='#' onclick='location.href="{$pageData.urls.orderBy}{$params.orderBy|default:$colHeader|lower}"; return sListView.save_checks(0, "{$moduleString}");' class='listViewThLinkS1'>{sugar_translate label=$params.label module=$pageData.bean.moduleDir}&nbsp;&nbsp;
						{if $params.orderBy|default:$colHeader|lower == $pageData.ordering.orderBy}
							{if $pageData.ordering.sortOrder == 'ASC'}
								{capture assign="imageName"}arrow_down.{$arrowExt}{/capture}
								<img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
							{else}
								{capture assign="imageName"}arrow_up.{$arrowExt}{/capture}
								<img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
							{/if}
						{else}
							{capture assign="imageName"}arrow.{$arrowExt}{/capture}
							<img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
						{/if}
						</a>
					{else}
						{sugar_translate label=$params.label module=$pageData.bean.moduleDir}
					{/if}
					</div>
				</th>
				{counter name="colCounter"}
			{/foreach}
			{if !empty($quickViewLinks)}
			<th scope='col' nowrap="nowrap" width='1%'>&nbsp;</th>
			{/if}
		</tr>
			
		{foreach name=rowIteration from=$data key=id item=rowData}
			{if $smarty.foreach.rowIteration.iteration is odd}
				{assign var='_rowColor' value=$rowColor[0]}
			{else}
				{assign var='_rowColor' value=$rowColor[1]}
			{/if}
			<tr height='20' class='{$_rowColor}S1'>
				{if $prerow}
				<td width='1%' nowrap='nowrap'>
						<input onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='{$rowData[$params.id]|default:$rowData.ID}'>
						{$pageData.additionalDetails.$id}
				</td>
				{/if}
				{counter start=0 name="colCounter" print=false assign="colCounter"}
				{foreach from=$displayColumns key=col item=params}
					<td scope='row' align='{$params.align|default:'left'}' valign=top class='{$_rowColor}S1' bgcolor='{$_bgColor}'>
						{if $params.link && !$params.customCode}
							
							<{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN} href='#' onclick="send_back('{if $params.dynamic_module}{$rowData[$params.dynamic_module]}{else}{$params.module|default:$pageData.bean.moduleDir}{/if}','{$rowData[$params.id]|default:$rowData.ID}');">{$rowData.$col}</{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN}>
	
						{elseif $params.customCode} 
							{sugar_evalcolumn_old var=$params.customCode rowData=$rowData}
						{elseif $params.currency_format} 
							{sugar_currency_format 
	                            var=$rowData.$col 
	                            round=$params.currency_format.round 
	                            decimals=$params.currency_format.decimals 
	                            symbol=$params.currency_format.symbol
	                            convert=$params.currency_format.convert
	                            currency_symbol=$params.currency_format.currency_symbol
							}
						{elseif $params.type == 'bool'}
								<input type='checkbox' disabled=disabled class='checkbox'
								{if !empty($rowData[$col])}
									checked=checked
								{/if}
								/>
	                    {elseif $params.type == 'multienum' } 
								{counter name="oCount" assign="oCount" start=0}
								{multienum_to_array string=$rowData.$col assign="vals"}
								{foreach from=$vals item=item}
									{counter name="oCount"}
									{sugar_translate label=$params.options select=$item}{if $oCount !=  count($vals)},{/if} 
								{/foreach}
						{else}	
							{$rowData.$col}
						{/if}
					</td>
					{counter name="colCounter"}
				{/foreach}
		 	
		{/foreach}
		<tr class='pagination'>
			<td colspan='{$colCount+1}' align='right'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%'>
					<tr>
						<td align='left' >
							&nbsp;</td>
						<td  align='right' nowrap='nowrap'>						
							{if $pageData.urls.startPage}
								<button type='button' title='{$navStrings.start}' class='button' {if $prerow}onclick='return sListView.save_checks(0, "{$moduleString}");'{else} onClick='location.href="{$pageData.urls.startPage}"' {/if}>
									<img src='{sugar_getimagepath file="start.gif"}' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>
								</button>						
								<!--<a href='{$pageData.urls.startPage}' {if $prerow}onclick="return sListView.save_checks(0, '{$moduleString}')"{/if} ><img src='{sugar_getimagepath file="start.gif"}' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>&nbsp;{$navStrings.start}</a>&nbsp;-->
							{else}
								<button type='button' title='{$navStrings.start}' class='button' disabled>
									<img src='{sugar_getimagepath file="start_off.gif"}' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>
								</button>
								<!--<img src='{sugar_getimagepath file="start_off.gif"}' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>&nbsp;{$navStrings.start}&nbsp;&nbsp;-->
							{/if}
							{if $pageData.urls.prevPage}
								<button type='button' title='{$navStrings.previous}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.prev}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.prevPage}"'{/if}>
									<img src='{sugar_getimagepath file="previous.gif"}' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>							
								</button>
								<!--<a href='{$pageData.urls.prevPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.prev}, '{$moduleString}')"{/if} ><img src='{sugar_getimagepath file="previous.gif"}' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>&nbsp;{$navStrings.previous}</a>&nbsp;-->
							{else}
								<button type='button' class='button' disabled title='{$navStrings.previous}'>
									<img src='{sugar_getimagepath file="previous_off.gif"}' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>
								</button>
								<!--<img src='{sugar_getimagepath file="previous_off.gif"}' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>&nbsp;{$navStrings.previous}&nbsp;-->
							{/if}
								<span class='pageNumbers'>({if $pageData.offsets.lastOffsetOnPage == 0}0{else}{$pageData.offsets.current+1}{/if} - {$pageData.offsets.lastOffsetOnPage} {$navStrings.of} {if $pageData.offsets.totalCounted}{$pageData.offsets.total}{else}{$pageData.offsets.total}{if $pageData.offsets.lastOffsetOnPage != $pageData.offsets.total}+{/if}{/if})</span>
							{if $pageData.urls.nextPage}
								<button type='button' title='{$navStrings.next}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.next}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.nextPage}"'{/if}>
									<img src='{sugar_getimagepath file="next.gif"}' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>
								</button>
								<!--&nbsp;<a href='{$pageData.urls.nextPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.next}, '{$moduleString}')"{/if} >{$navStrings.next}&nbsp;<img src='{sugar_getimagepath file="next.gif"}' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'></a>&nbsp;-->
							{else}
								<button type='button' class='button' title='{$navStrings.next}' disabled>
									<img src='{sugar_getimagepath file="next_off.gif"}' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>
								</button>
								<!--&nbsp;{$navStrings.next}&nbsp;<img src='{sugar_getimagepath file="next_off.gif"}' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>-->
							{/if}
							{if $pageData.urls.endPage  && $pageData.offsets.total != $pageData.offsets.lastOffsetOnPage}
								<button type='button' title='{$navStrings.end}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.end}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.endPage}"'{/if}>
									<img src='{sugar_getimagepath file="end.gif"}' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>							
								</button>
								<!--<a href='{$pageData.urls.endPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.end}, '{$moduleString}')"{/if} >{$navStrings.end}&nbsp;<img src='{sugar_getimagepath file="end.gif"}' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'></a></td>-->
							{elseif !$pageData.offsets.totalCounted || $pageData.offsets.total == $pageData.offsets.lastOffsetOnPage}
								<button type='button' class='button' disabled title='{$navStrings.end}'>
								 	<img src='{sugar_getimagepath file="end_off.gif"}' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>
								</button>
								<!--&nbsp;{$navStrings.end}&nbsp;<img src='{sugar_getimagepath file="end_off.gif"}' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>-->
							{/if}
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	{if $prerow}
	<a href='javascript:sListView.check_all(document.MassUpdate, "mass[]", false);'>{$clearAll}</a>
	<script>
	{literal}function lvg_dtails(id){return SUGAR.util.getAdditionalDetails( '{/literal}{$module}{literal}',id, 'adspan_'+id);}{/literal}
	</script>
	{/if}
{else}
	{$APP.LBL_SEARCH_POPULATE_ONLY}
{/if}

{literal}
<script type="text/javascript">
/* initialize the popup request from the parent */
if(window.document.forms['popup_query_form'].request_data.value == "")
{
	window.document.forms['popup_query_form'].request_data.value
		= JSON.stringify(window.opener.get_popup_request_data());
}

enableQS(false);
</script>
{/literal}