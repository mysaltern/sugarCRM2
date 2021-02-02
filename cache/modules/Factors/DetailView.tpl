

<table cellpadding="1" cellspacing="0" border="0" width="100%">
<tr>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Factors'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Factors'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Factors'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
<td class="buttons" align="left" NOWRAP>
<input title="{$APP.LBL_DUP_MERGE}" accesskey="M" class="button" onclick="this.form.return_module.value='Factors';this.form.return_action.value='DetailView';this.form.return_id.value='{$fields.id.value}'; this.form.action.value='Step1'; this.form.module.value='MergeRecords';" name="button" value="{$APP.LBL_DUP_MERGE}" type="submit">
</td>
</form>
</td>
<td class="buttons" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Factors", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}</td>
</tr>
</table>{sugar_include include=$includes}
<div id='' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='detailpanel_1' cellspacing='{$gridline}'>
{$PAGINATION}
<tr>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_FACTOR_NAME' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' >
{counter name="panelFieldCount"}

<span id='{$fields.name.name}'>{$fields.name.value}</span>
</td>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{$MOD.LBL_AMOUNT} ({$CURRENCY})
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' >
{counter name="panelFieldCount"}

<span id='{$fields.amount.name}'>{$fields.amount.value}</span>
</td>
</tr>
<tr>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_ACCOUNT_NAME' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' >
{counter name="panelFieldCount"}

{if !empty($fields.account_id.value)}<a href="index.php?module=Accounts&action=DetailView&record={$fields.account_id.value}">{/if}
{$fields.account_name.value}
{if !empty($fields.account_id.value)}</a>{/if}
</td>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_DATE_CLOSED' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' >
{counter name="panelFieldCount"}

<span id='{$fields.date_closed.name}'>{$fields.date_closed.value}</span>
</td>
</tr>
<tr>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_RELATED_TO' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' >
{counter name="panelFieldCount"}

<a href="index.php?module={$fields.parent_type.value}&action=DetailView&record={$fields.parent_id.value}" class="tabDetailViewDFLink">{$fields.parent_name.value}</a>
</td>
<td width='8.33%' scope="row">
&nbsp;
</td>
<td width='25%' >
</td>
</tr>
<tr>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_LEAD_SOURCE' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' >
{counter name="panelFieldCount"}

{ $fields.lead_source.options[$fields.lead_source.value]}
</td>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_SALES_STAGE' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' >
{counter name="panelFieldCount"}

{ $fields.sales_stage.options[$fields.sales_stage.value]}
</td>
</tr>
<tr>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_CAMPAIGN' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' colspan='3'>
{counter name="panelFieldCount"}

{if !empty($fields.campaign_id.value)}<a href="index.php?module=Campaigns&action=DetailView&record={$fields.campaign_id.value}">{/if}
{$fields.campaign_name.value}
{if !empty($fields.campaign_id.value)}</a>{/if}
</td>
</tr>
<tr>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_PROBABILITY' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' colspan='3'>
{counter name="panelFieldCount"}

<span id='{$fields.probability.name}'>{$fields.probability.value}</span>
</td>
</tr>
<tr>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' >
{counter name="panelFieldCount"}

{$fields.assigned_user_name.value}
</td>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_DATE_MODIFIED' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' >
{counter name="panelFieldCount"}
{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}	
</td>
</tr>
<tr>
<td width='8.33%' scope="row">
&nbsp;
</td>
<td width='25%' >
</td>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_DATE_ENTERED' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' >
{counter name="panelFieldCount"}
{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}	
</td>
</tr>
<tr>
<td width='8.33%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_DESCRIPTION' module='Factors'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='25%' colspan='3'>
{counter name="panelFieldCount"}

{$fields.description.value|url2html|nl2br}
</td>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("").style.display='none';</script>
{/if}

</form>