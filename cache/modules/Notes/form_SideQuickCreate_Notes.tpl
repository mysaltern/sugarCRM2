

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
{sugar_translate label='LBL_NOTE_SUBJECT' module='Notes'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='20' maxlength='' value='{$value}' title='' tabindex='100' > 
</tr>
<tr>
<td valign="top" width='75%' >
{sugar_translate label='LBL_FILENAME' module='Notes'}:
<br>
{counter name="panelFieldCount"}
<input tabindex="101"  type="file" name="uploadfile" size="5">
</tr>
<tr>
<td valign="top" width='75%' >
{sugar_translate label='LBL_NOTE_STATUS' module='Notes'}:
<br>
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea id="{$fields.description.name}" name="{$fields.description.name}" rows="3" cols="20" title='' tabindex="102" >{$value}</textarea>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('form_SideQuickCreate_Notes');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Notes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
addToValidate('form_SideQuickCreate_Notes', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'date_entered_date', 'date', true,'Date Created' );
addToValidate('form_SideQuickCreate_Notes', 'date_modified_date', 'date', true,'Last Modified' );
addToValidate('form_SideQuickCreate_Notes', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED_BY' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NOTE_SUBJECT' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'filename', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILENAME' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'file_mime_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILE_MIME_TYPE' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'file_url', 'function', false,'{/literal}{sugar_translate label='LBL_FILE_URL' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'parent_type', 'parent_type', false,'{/literal}{sugar_translate label='LBL_PARENT_TYPE' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ID' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'contact_id', 'id', false,'{/literal}{sugar_translate label='LBL_CONTACT_ID' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'portal_flag', 'bool', true,'{/literal}{sugar_translate label='LBL_PORTAL_FLAG' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'embed_flag', 'bool', true,'{/literal}{sugar_translate label='LBL_EMBED_FLAG' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'deleted', 'bool', true,'{/literal}{sugar_translate label='LBL_DELETED' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'parent_name', 'parent', false,'{/literal}{sugar_translate label='LBL_RELATED_TO' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'contact_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CONTACT_NAME' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'contact_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'contact_email', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'account_id', 'id', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'opportunity_id', 'id', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_ID' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'acase_id', 'id', false,'{/literal}{sugar_translate label='LBL_CASE_ID' module='Notes'}{literal}' );
addToValidate('form_SideQuickCreate_Notes', 'lead_id', 'id', false,'{/literal}{sugar_translate label='LBL_LEAD_ID' module='Notes'}{literal}' );
addToValidateBinaryDependency('form_SideQuickCreate_Notes', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Notes'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Notes'}{literal}', 'assigned_user_id' );
</script>{/literal}
