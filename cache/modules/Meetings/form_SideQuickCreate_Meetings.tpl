

<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if !empty($smarty.request.return_module)}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{else}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="isSaveAndNew" value="false">   
<input type="hidden" name="send_invites">   
<input type="hidden" name="user_invitees">   
<input type="hidden" name="contact_invitees">   
<input type="hidden" name="duration_hours" value="0">   
<input type="hidden" name="duration_minutes" value="15">   
<input type="hidden" name="status" id="status" value="Planned">   
</td>
<td align='right'></td>
</tr>
</table>{sugar_include include=$includes}
<table width="100%" cellspacing="0" cellpadding="0" class='detail view' id='tabFormPagination'>
{$PAGINATION}
</table>
<div id="DEFAULT">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<td valign="top" width='75%' >
{counter name="panelFieldCount"}
<div valign="top">{literal}<input tabindex="100"  type="radio" name="appttype" onchange="if(this.checked){this.form.module.value='Calls'; this.form.return_module.value='Calls'; this.form.direction.style.display = '';}">{/literal}{sugar_translate label="LBL_CALL"}{literal}<input tabindex="100"  type="radio" name="appttype" checked=true onchange="if(this.checked){this.form.module.value='Meetings'; this.form.return_module.value='Meetings'; this.form.direction.style.display='none'}">{/literal}{sugar_translate label="LBL_MEETING"}</div>
</tr>
<tr>
<td valign="top" width='75%' >
{sugar_translate label='LBL_SUBJECT' module='Meetings'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='20' maxlength='' value='{$value}' title='' tabindex='101' > 
</tr>
<tr>
<td valign="top" width='75%' >
{sugar_translate label='LBL_DATE_TIME' module='Meetings'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="{$fields.date_start.name}_date" value="{$fields[$fields.date_start.name].value}" size="11" maxlength="10" title='' tabindex="102" onblur="combo_{$fields.date_start.name}.update(); ">
<img border="0" src="{sugar_getimagepath file='jscalendar.gif'}" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.date_start.name}_trigger" align="absmiddle">&nbsp;
<br>
<div id="{$fields.date_start.name}_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" id="{$fields.date_start.name}" name="{$fields.date_start.name}" value="{$fields[$fields.date_start.name].value}">
<script type="text/javascript" src="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"></script>
<script type="text/javascript">
var combo_{$fields.date_start.name} = new Datetimecombo("{$fields[$fields.date_start.name].value}", "{$fields.date_start.name}", "{$TIME_FORMAT}", 102, '', '{$fields[$fields.date_start.name_flag].value}'); 
//Render the remaining widget fields
text = combo_{$fields.date_start.name}.html('');
document.getElementById('{$fields.date_start.name}_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_{$fields.date_start.name}.jsscript(''));
</script>
<script type="text/javascript">
function update_{$fields.date_start.name}_available() {ldelim}
      YAHOO.util.Event.onAvailable("{$fields.date_start.name}_date", this.handleOnAvailable, this); 
{rdelim}

update_{$fields.date_start.name}_available.prototype.handleOnAvailable = function(me) {ldelim}
	Calendar.setup ({ldelim}
	onClose : update_{$fields.date_start.name},
	inputField : "{$fields.date_start.name}_date",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "{$fields.date_start.name}_trigger",
	singleClick : true,
	step : 1,
	weekNumbers:false
	{rdelim});
	
	//Call update for first time to round hours and minute values
	combo_{$fields.date_start.name}.update();
{rdelim}

var obj_{$fields.date_start.name} = new update_{$fields.date_start.name}_available(); 
</script>
</tr>
<tr>
<td valign="top" width='75%' >
{sugar_translate label='LBL_LIST_RELATED_TO' module='Meetings'}:
<br>
{counter name="panelFieldCount"}

<select name='parent_type' tabindex="103" id='parent_type' title='' onchange='document.{$form_name}.{$fields.parent_name.name}.value="";document.{$form_name}.parent_id.value=""; changeQS(); checkParentType(document.{$form_name}.parent_type.value, document.{$form_name}.btn_{$fields.parent_name.name});'>
{html_options options=$fields.parent_name.options selected=$fields.parent_type.value}
</select>
<br>
{if empty($fields.parent_name.options[$fields.parent_type.value])}
{assign var="keepParent" value = 0}
{else}
{assign var="keepParent value = 1}
{/if}
<input type="text" name="{$fields.parent_name.name}" id="{$fields.parent_name.name}" class="sqsEnabled" tabindex="103" size="11" {if $keepParent}value="{$fields.parent_name.value}"{/if} autocomplete="off">
<input type="hidden" name="{$fields.parent_id.name}" id="{$fields.parent_id.name}"  {if $keepParent}value="{$fields.parent_id.value}"{/if}>
<input type="button" name="btn_{$fields.parent_name.name}" id="btn_{$fields.parent_name.name}" tabindex="103" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup(document.{$form_name}.parent_type.value, 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Meetings","field_to_name_array":{"id":"parent_id","name":"parent_name"}}{/literal}, "single", true);' >
{literal}
<script type="text/javascript">
function changeQS() {
{/literal}
	new_module = document.forms["{$form_name}"].elements["parent_type"].value;
{literal}
	if(typeof(disabledModules[new_module]) != 'undefined') {
{/literal}
		sqs_objects["{$form_name}_parent_name"]["disable"] = true;
		document.forms["{$form_name}"].elements["parent_name"].readOnly = true;
{literal}
	} else {
{/literal}
		sqs_objects["{$form_name}_parent_name"]["disable"] = false;
		document.forms["{$form_name}"].elements["parent_name"].readOnly = false;
{literal}
	}
{/literal}
	sqs_objects["{$form_name}_parent_name"]["modules"] = new Array(new_module);
	if(typeof QSProcessedFieldsArray != 'undefined')
{literal}
    {
{/literal}
	   QSProcessedFieldsArray["{$form_name}_parent_name"] = false;
{literal}
	}	
{/literal}    
    enableQS(false);
{literal}
}
{/literal}
</script>
{literal}
<script>var disabledModules=[];</script>
{/literal}
</tr>
<tr>
<td valign="top" width='75%' >
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Meetings'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="104" id="{$fields.assigned_user_name.name}" size="11" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="104" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"form_SideQuickCreate_Meetings","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, "single", true);' >
<script type="text/javascript">
<!--
enableQS(false);
-->
</script>
</tr>
<tr>
<td valign="top" width='75%' >
{sugar_translate label='LBL_STATUS' module='Meetings'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

<select name="{$fields.status.name}" id="{$fields.status.name}" title='' tabindex="105"  >
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>&nbsp;
{counter name="panelFieldCount"}

<select name="{$fields.direction.name}" id="{$fields.direction.name}" title='' tabindex="105"  >
{if isset($fields.direction.value) && $fields.direction.value != ''}
{html_options options=$fields.direction.options selected=$fields.direction.value}
{else}
{html_options options=$fields.direction.options selected=$fields.direction.default}
{/if}
</select>&nbsp;
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('form_SideQuickCreate_Meetings');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Meetings", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script type="text/javascript">document.getElementById('direction').style.display='none';</script>
<!-- End Meta-Data Javascript -->{literal}
<script type="text/javascript">
addToValidate('form_SideQuickCreate_Meetings', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_SUBJECT' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SideQuickCreate_Meetings', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_SideQuickCreate_Meetings', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'assigned_user_name', 'relate', true,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'accept_status', 'varchar', false,'{/literal}{sugar_translate label='LBL_SUBJECT' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'location', 'varchar', false,'{/literal}{sugar_translate label='LBL_LOCATION' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'duration_hours', 'int', false,'{/literal}{sugar_translate label='LBL_DURATION_HOURS' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'duration_minutes', 'int', false,'{/literal}{sugar_translate label='LBL_DURATION_MINUTES' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'date_start_date', 'date', true,'Start Date' );
addToValidate('form_SideQuickCreate_Meetings', 'date_end', 'date', false,'{/literal}{sugar_translate label='LBL_DATE_END' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'parent_type', 'parent_type', false,'{/literal}{sugar_translate label='LBL_LIST_RELATED_TO' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'status', 'enum', true,'{/literal}{sugar_translate label='LBL_STATUS' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'direction', 'enum', false,'{/literal}{sugar_translate label='LBL_DIRECTION' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_LIST_RELATED_TO' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'reminder_checked', 'bool', false,'{/literal}{sugar_translate label='LBL_REMINDER' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'reminder_time', 'int', false,'{/literal}{sugar_translate label='LBL_REMINDER_TIME' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'outlook_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_OUTLOOK_ID' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'contact_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CONTACT_NAME' module='Meetings'}{literal}' );
addToValidate('form_SideQuickCreate_Meetings', 'parent_name', 'parent', false,'{/literal}{sugar_translate label='LBL_LIST_RELATED_TO' module='Meetings'}{literal}' );
addToValidateBinaryDependency('form_SideQuickCreate_Meetings', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Meetings'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Meetings'}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SideQuickCreate_Meetings_parent_name']={"form":"form_SideQuickCreate_Meetings","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['form_SideQuickCreate_Meetings_assigned_user_name']={"form":"form_SideQuickCreate_Meetings","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}
