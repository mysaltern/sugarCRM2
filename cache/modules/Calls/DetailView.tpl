

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
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Calls'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Calls'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Calls'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
<td class="buttons" align="left" NOWRAP>
{if $fields.status.value != "Held"} <input type="hidden" name="isSaveAndNew" value="false">  <input type="hidden" name="status" value="">  <input type="hidden" name="isSaveFromDetailView" value="true">  <input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  accesskey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}"  class="button"  onclick="this.form.status.value='Held'; this.form.action.value='Save';this.form.return_module.value='Calls';this.form.isDuplicate.value=true;this.form.isSaveAndNew.value=true;this.form.return_action.value='EditView'; this.form.return_id.value='{$fields.id.value}'"  name="button"  value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  type="submit">{/if}
</td>
<td class="buttons" align="left" NOWRAP>
{if $fields.status.value != "Held"} <input type="hidden" name="isSave" value="false">  <input title="{$APP.LBL_CLOSE_BUTTON_TITLE}"  accesskey="{$APP.LBL_CLOSE_BUTTON_KEY}"  class="button"  onclick="this.form.status.value='Held'; this.form.action.value='Save';this.form.return_module.value='Calls';this.form.isSave.value=true;this.form.return_action.value='DetailView'; this.form.return_id.value='{$fields.id.value}'"  name="button1"  value="{$APP.LBL_CLOSE_BUTTON_TITLE}"  type="submit">{/if}
</td>
</form>
</td>
<td class="buttons" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Calls", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}</td>
</tr>
</table>{sugar_include include=$includes}
<div id='DEFAULT' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='detailpanel_1' cellspacing='{$gridline}'>
{$PAGINATION}
<tr>
<td width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_SUBJECT' module='Calls'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' >
{counter name="panelFieldCount"}

<span id='{$fields.name.name}'>{$fields.name.value}</span>
</td>
<td width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_STATUS' module='Calls'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' >
{counter name="panelFieldCount"}
{$fields.direction.options[$fields.direction.value]} {$fields.status.options[$fields.status.value]}	
</td>
</tr>
<tr>
<td width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_DATE_TIME' module='Calls'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' >
{counter name="panelFieldCount"}
{$fields.date_start.value} {$fields.time_start.value}&nbsp;	
</td>
<td width='12.5%' scope="row">
{sugar_translate label='LBL_MODULE_NAME' module=$fields.parent_type.value}
</td>
<td width='37.5%' >
{counter name="panelFieldCount"}

<a href="index.php?module={$fields.parent_type.value}&action=DetailView&record={$fields.parent_id.value}" class="tabDetailViewDFLink">{$fields.parent_name.value}</a>
</td>
</tr>
<tr>
<td width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_DURATION' module='Calls'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' colspan='3'>
{counter name="panelFieldCount"}
{$fields.duration_hours.value}{$MOD.LBL_HOURS_ABBREV} {$fields.duration_minutes.value}{$MOD.LBL_MINSS_ABBREV}&nbsp;	
</td>
</tr>
<tr>
<td width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_DATE_MODIFIED' module='Calls'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' >
{counter name="panelFieldCount"}
{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}&nbsp;	
</td>
<td width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_ASSIGNED_TO' module='Calls'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' >
{counter name="panelFieldCount"}
{$fields.assigned_user_name.value}	
</td>
</tr>
<tr>
<td width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_DATE_ENTERED' module='Calls'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' colspan='3'>
{counter name="panelFieldCount"}
{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}&nbsp;	
</td>
</tr>
<tr>
<td width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_REMINDER' module='Calls'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if strval($fields.reminder_checked.value) == "1" || strval($fields.reminder_checked.value) == "yes" || strval($fields.reminder_checked.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.reminder_checked.name}" disabled="true" {$checked}>
&nbsp;
{counter name="panelFieldCount"}

<span id='{$fields.reminder_time.name}'>{$fields.reminder_time.value}</span>
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' scope="row">
{capture name="label" assign="label"}
{sugar_translate label='LBL_DESCRIPTION' module='Calls'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{$fields.description.value|url2html|nl2br}
</td>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}

</form>