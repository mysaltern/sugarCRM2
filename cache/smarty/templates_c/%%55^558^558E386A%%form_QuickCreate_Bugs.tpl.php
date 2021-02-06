<?php /* Smarty version 2.6.11, created on 2021-02-05 21:41:44
         compiled from cache/modules/Bugs/form_QuickCreate_Bugs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Bugs/form_QuickCreate_Bugs.tpl', 36, false),array('function', 'counter', 'cache/modules/Bugs/form_QuickCreate_Bugs.tpl', 41, false),array('function', 'sugar_translate', 'cache/modules/Bugs/form_QuickCreate_Bugs.tpl', 46, false),array('function', 'html_options', 'cache/modules/Bugs/form_QuickCreate_Bugs.tpl', 55, false),array('modifier', 'default', 'cache/modules/Bugs/form_QuickCreate_Bugs.tpl', 42, false),array('modifier', 'strip_semicolon', 'cache/modules/Bugs/form_QuickCreate_Bugs.tpl', 48, false),)), $this); ?>


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
<input type="hidden" name="account_id" value="<?php echo $_REQUEST['account_id']; ?>
">   
<input type="hidden" name="contact_id" value="<?php echo $_REQUEST['contact_id']; ?>
">   
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';if(check_form('form_QuickCreate_Bugs'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Bugs_subpanel_save_button');return false;" type="submit" name="Bugs_subpanel_save_button" id="Bugs_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Bugs_subpanel_cancel_button');return false;" type="submit" name="Bugs_subpanel_cancel_button" id="Bugs_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Bugs_subpanel_full_form_button" id="Bugs_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Bugs", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
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
<td valign="top" id='priority_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Bugs'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
" title='' tabindex="100"  >
<?php if (isset ( $this->_tpl_vars['fields']['priority']['value'] ) && $this->_tpl_vars['fields']['priority']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['priority']['options'],'selected' => $this->_tpl_vars['fields']['priority']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['priority']['options'],'selected' => $this->_tpl_vars['fields']['priority']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Bugs'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="101" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="101" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"form_QuickCreate_Bugs","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, "single", true);' >
<input type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="101" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button" onclick="this.form.<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
.value = '';" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" >
<script type="text/javascript">
<!--
enableQS(false);
-->
</script>
</tr>
<tr>
<td valign="top" id='source_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SOURCE','module' => 'Bugs'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['source']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['source']['name']; ?>
" title='' tabindex="102"  >
<?php if (isset ( $this->_tpl_vars['fields']['source']['value'] ) && $this->_tpl_vars['fields']['source']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['source']['options'],'selected' => $this->_tpl_vars['fields']['source']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['source']['options'],'selected' => $this->_tpl_vars['fields']['source']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='team_name_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' >
</tr>
<tr>
<td valign="top" id='type_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Bugs'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
" title='' tabindex="104"  >
<?php if (isset ( $this->_tpl_vars['fields']['type']['value'] ) && $this->_tpl_vars['fields']['type']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['type']['options'],'selected' => $this->_tpl_vars['fields']['type']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['type']['options'],'selected' => $this->_tpl_vars['fields']['type']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='status_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Bugs'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" title='' tabindex="105"  >
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='product_category_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUCT_CATEGORY','module' => 'Bugs'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['product_category']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['product_category']['name']; ?>
" title='' tabindex="106"  >
<?php if (isset ( $this->_tpl_vars['fields']['product_category']['value'] ) && $this->_tpl_vars['fields']['product_category']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['product_category']['options'],'selected' => $this->_tpl_vars['fields']['product_category']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['product_category']['options'],'selected' => $this->_tpl_vars['fields']['product_category']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='found_in_release_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FOUND_IN_RELEASE','module' => 'Bugs'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['found_in_release']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['found_in_release']['name']; ?>
" title='' tabindex="107"  >
<?php if (isset ( $this->_tpl_vars['fields']['found_in_release']['value'] ) && $this->_tpl_vars['fields']['found_in_release']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['found_in_release']['options'],'selected' => $this->_tpl_vars['fields']['found_in_release']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['found_in_release']['options'],'selected' => $this->_tpl_vars['fields']['found_in_release']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Bugs'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='108' > 
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Bugs'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea id="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
" rows="4" cols="60" title='' tabindex="109" ><?php echo $this->_tpl_vars['value']; ?>
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
" class="button" onclick="this.form.action.value='Save';if(check_form('form_QuickCreate_Bugs'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Bugs_subpanel_save_button');return false;" type="submit" name="Bugs_subpanel_save_button" id="Bugs_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Bugs_subpanel_cancel_button');return false;" type="submit" name="Bugs_subpanel_cancel_button" id="Bugs_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Bugs_subpanel_full_form_button" id="Bugs_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Bugs", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
addToValidate(\'form_QuickCreate_Bugs\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'date_entered_date\', \'date\', false,\'Created On\' );
addToValidate(\'form_QuickCreate_Bugs\', \'date_modified_date\', \'date\', false,\'Modified On\' );
addToValidate(\'form_QuickCreate_Bugs\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'bug_number\', \'int\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NUMBER','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'type\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'priority\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'resolution\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RESOLUTION','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'work_log\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_WORK_LOG','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'found_in_release\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FOUND_IN_RELEASE','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'release_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FOUND_IN_RELEASE','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'fixed_in_release\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIXED_IN_RELEASE','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'fixed_in_release_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIXED_IN_RELEASE','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'source\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SOURCE','module' => 'Bugs'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Bugs\', \'product_category\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUCT_CATEGORY','module' => 'Bugs'), $this); echo '\' );
addToValidateBinaryDependency(\'form_QuickCreate_Bugs\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Bugs'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Bugs'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'form_QuickCreate_Bugs_assigned_user_name\']={"form":"form_QuickCreate_Bugs","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
