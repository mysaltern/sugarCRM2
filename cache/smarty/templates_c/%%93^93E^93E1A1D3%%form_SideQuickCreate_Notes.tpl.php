<?php /* Smarty version 2.6.11, created on 2021-02-02 08:36:58
         compiled from cache/modules/Notes/form_SideQuickCreate_Notes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Notes/form_SideQuickCreate_Notes.tpl', 30, false),array('function', 'counter', 'cache/modules/Notes/form_SideQuickCreate_Notes.tpl', 35, false),array('function', 'sugar_translate', 'cache/modules/Notes/form_SideQuickCreate_Notes.tpl', 39, false),array('modifier', 'default', 'cache/modules/Notes/form_SideQuickCreate_Notes.tpl', 36, false),)), $this); ?>


<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (! empty ( $_REQUEST['return_module'] )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']):  echo $_REQUEST['return_relationship'];  else:  echo $_REQUEST['return_module'];  endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
</td>
<td align='right'></td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<table width="100%" cellspacing="0" cellpadding="0" class='detail view' id='tabFormPagination'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</table>
<div id="DEFAULT">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<tr>
<td valign="top" width='75%' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NOTE_SUBJECT','module' => 'Notes'), $this);?>
:
<span class="required">*</span>
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='20' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='100' > 
</tr>
<tr>
<td valign="top" width='75%' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Notes'), $this);?>
:
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<input tabindex="101"  type="file" name="uploadfile" size="5">
</tr>
<tr>
<td valign="top" width='75%' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NOTE_STATUS','module' => 'Notes'), $this);?>
:
<br>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea id="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" rows="3" cols="20" title='' tabindex="102" ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("DEFAULT").style.display='none';</script>
<?php endif; ?>

<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('form_SideQuickCreate_Notes');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Notes", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
addToValidate(\'form_SideQuickCreate_Notes\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'date_entered_date\', \'date\', true,\'Date Created\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'date_modified_date\', \'date\', true,\'Last Modified\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_BY','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_BY','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NOTE_SUBJECT','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'filename\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'file_mime_type\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FILE_MIME_TYPE','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'file_url\', \'function\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FILE_URL','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'parent_type\', \'parent_type\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_TYPE','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'parent_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_ID','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'contact_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_ID','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'portal_flag\', \'bool\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_FLAG','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'embed_flag\', \'bool\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMBED_FLAG','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'deleted\', \'bool\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'parent_name\', \'parent\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RELATED_TO','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'contact_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_NAME','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'contact_phone\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PHONE','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'contact_email\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'account_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_ID','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'opportunity_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_ID','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'acase_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CASE_ID','module' => 'Notes'), $this); echo '\' );
addToValidate(\'form_SideQuickCreate_Notes\', \'lead_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_ID','module' => 'Notes'), $this); echo '\' );
addToValidateBinaryDependency(\'form_SideQuickCreate_Notes\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Notes'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Notes'), $this); echo '\', \'assigned_user_id\' );
</script>'; ?>
