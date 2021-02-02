

<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="{$smarty.request.isDuplicate}">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="contact_role">
{if !empty($smarty.request.return_module)}
<input type="hidden" name="relate_to" value="{$smarty.request.return_module}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Notes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
<td valign="top" id='contact_name_label' width='12.5%' scope="row">
{capture name="label" assign="label}
{sugar_translate label='LBL_CONTACT_NAME' module='Notes'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.contact_name.name}" class="sqsEnabled" tabindex="100" id="{$fields.contact_name.name}" size="" value="{$fields.contact_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.contact_name.id_name}" id="{$fields.contact_name.id_name}" value="{$fields.contact_id.value}">
<input type="button" name="btn_{$fields.contact_name.name}" id="btn_{$fields.contact_name.name}" tabindex="100" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.contact_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"contact_id","last_name":"contact_name"}}{/literal}, "single", true);' >
<input type="button" name="btn_clr_{$fields.contact_name.name}" id="btn_clr_{$fields.contact_name.name}" tabindex="100" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.contact_name.name}.value = ''; this.form.{$fields.contact_name.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}" >
<script type="text/javascript">
<!--
enableQS(false);
-->
</script>
<td valign="top" id='parent_name_label' width='12.5%' scope="row">
{capture name="label" assign="label}
{sugar_translate label='LBL_RELATED_TO' module='Notes'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<select name='parent_type' tabindex="101" id='parent_type' title='' onchange='document.{$form_name}.{$fields.parent_name.name}.value="";document.{$form_name}.parent_id.value=""; changeQS(); checkParentType(document.{$form_name}.parent_type.value, document.{$form_name}.btn_{$fields.parent_name.name});'>
{html_options options=$fields.parent_name.options selected=$fields.parent_type.value}
</select>
{if empty($fields.parent_name.options[$fields.parent_type.value])}
{assign var="keepParent" value = 0}
{else}
{assign var="keepParent value = 1}
{/if}
<input type="text" name="{$fields.parent_name.name}" id="{$fields.parent_name.name}" class="sqsEnabled" tabindex="101" size="" {if $keepParent}value="{$fields.parent_name.value}"{/if} autocomplete="off">
<input type="hidden" name="{$fields.parent_id.name}" id="{$fields.parent_id.name}"  {if $keepParent}value="{$fields.parent_id.value}"{/if}>
<input type="button" name="btn_{$fields.parent_name.name}" id="btn_{$fields.parent_name.name}" tabindex="101" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup(document.{$form_name}.parent_type.value, 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"parent_id","name":"parent_name"}}{/literal}, "single", true);' >
<input type="button" name="btn_clr_{$fields.parent_name.name}" id="btn_clr_{$fields.parent_name.name}" tabindex="101" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.parent_name.name}.value = ''; this.form.{$fields.parent_id.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}" >
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
<td valign="top" id='name_label' width='12.5%' scope="row">
{capture name="label" assign="label}
{sugar_translate label='LBL_SUBJECT' module='Notes'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='100' maxlength='' value='{$value}' title='' tabindex='102' > 
</tr>
<tr>
<td valign="top" id='filename_label' width='12.5%' scope="row">
{capture name="label" assign="label}
{sugar_translate label='LBL_FILENAME' module='Notes'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}
<span id='new_attachment' style='display:{if !empty($fields.filename.value)}none{/if}'>
<input tabindex="103"  name="uploadfile" tabindex="3" type="file" size="60"/>
</span>
<span id='old_attachment' style='display:{if empty($fields.filename.value)}none{/if}'>
<input tabindex="103"  type='hidden' name='deleteAttachment' value='0'>
{$fields.filename.value}<input tabindex="103"  type='hidden' name='old_filename' value='{$fields.filename.value}'/><input tabindex="103"  type='hidden' name='old_id' value='{$fields.id.value}'/>
<input tabindex="103"  type='button' class='button' value='{$APP.LBL_REMOVE}' onclick='ajaxStatus.showStatus(SUGAR.language.get("Notes", "LBL_REMOVING_ATTACHMENT"));this.form.deleteAttachment.value=1;this.form.action.value="EditView";SUGAR.dashlets.postForm(this.form, deleteAttachmentCallBack);this.form.deleteAttachment.value=0;this.form.action.value="";' >       
</span>
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' scope="row">
{capture name="label" assign="label}
{sugar_translate label='LBL_NOTE_STATUS' module='Notes'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea id="{$fields.description.name}" name="{$fields.description.name}" rows="30" cols="90" title='' tabindex="104" >{$value}</textarea>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Notes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" src="include/javascript/dashlets.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script>
function deleteAttachmentCallBack(text) 
{literal} { {/literal} 
if(text == 'true') {literal} { {/literal} 
document.getElementById('new_attachment').style.display = '';
ajaxStatus.hideStatus();
document.getElementById('old_attachment').innerHTML = ''; 
{literal} } {/literal} else {literal} { {/literal} 
document.getElementById('new_attachment').style.display = 'none';
ajaxStatus.flashStatus(SUGAR.language.get('Notes', 'ERR_REMOVING_ATTACHMENT'), 2000); 
{literal} } {/literal}  
{literal} } {/literal} 
</script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>
<!-- End Meta-Data Javascript -->{literal}
<script type="text/javascript">
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Notes'}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Last Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Notes'}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY' module='Notes'}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Notes'}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED_BY' module='Notes'}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NOTE_SUBJECT' module='Notes'}{literal}' );
addToValidate('EditView', 'filename', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILENAME' module='Notes'}{literal}' );
addToValidate('EditView', 'file_mime_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILE_MIME_TYPE' module='Notes'}{literal}' );
addToValidate('EditView', 'file_url', 'function', false,'{/literal}{sugar_translate label='LBL_FILE_URL' module='Notes'}{literal}' );
addToValidate('EditView', 'parent_type', 'parent_type', false,'{/literal}{sugar_translate label='LBL_PARENT_TYPE' module='Notes'}{literal}' );
addToValidate('EditView', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ID' module='Notes'}{literal}' );
addToValidate('EditView', 'contact_id', 'id', false,'{/literal}{sugar_translate label='LBL_CONTACT_ID' module='Notes'}{literal}' );
addToValidate('EditView', 'portal_flag', 'bool', true,'{/literal}{sugar_translate label='LBL_PORTAL_FLAG' module='Notes'}{literal}' );
addToValidate('EditView', 'embed_flag', 'bool', true,'{/literal}{sugar_translate label='LBL_EMBED_FLAG' module='Notes'}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Notes'}{literal}' );
addToValidate('EditView', 'deleted', 'bool', true,'{/literal}{sugar_translate label='LBL_DELETED' module='Notes'}{literal}' );
addToValidate('EditView', 'parent_name', 'parent', false,'{/literal}{sugar_translate label='LBL_RELATED_TO' module='Notes'}{literal}' );
addToValidate('EditView', 'contact_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CONTACT_NAME' module='Notes'}{literal}' );
addToValidate('EditView', 'contact_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE' module='Notes'}{literal}' );
addToValidate('EditView', 'contact_email', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Notes'}{literal}' );
addToValidate('EditView', 'account_id', 'id', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Notes'}{literal}' );
addToValidate('EditView', 'opportunity_id', 'id', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_ID' module='Notes'}{literal}' );
addToValidate('EditView', 'acase_id', 'id', false,'{/literal}{sugar_translate label='LBL_CASE_ID' module='Notes'}{literal}' );
addToValidate('EditView', 'lead_id', 'id', false,'{/literal}{sugar_translate label='LBL_LEAD_ID' module='Notes'}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Notes'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Notes'}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'contact_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Notes'}{literal}{/literal}{sugar_translate label='LBL_CONTACT_NAME' module='Notes'}{literal}', 'contact_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_contact_name']={"form":"EditView","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["contact_name","contact_id","contact_id","contact_id"],"required_list":["contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_parent_name']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>{/literal}
