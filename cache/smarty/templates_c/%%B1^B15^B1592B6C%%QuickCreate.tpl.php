<?php /* Smarty version 2.6.11, created on 2021-02-05 21:41:53
         compiled from cache/modules/Contacts/QuickCreate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Contacts/QuickCreate.tpl', 48, false),array('function', 'counter', 'cache/modules/Contacts/QuickCreate.tpl', 53, false),array('function', 'sugar_translate', 'cache/modules/Contacts/QuickCreate.tpl', 56, false),array('function', 'html_options', 'cache/modules/Contacts/QuickCreate.tpl', 202, false),array('modifier', 'default', 'cache/modules/Contacts/QuickCreate.tpl', 54, false),array('modifier', 'strip_semicolon', 'cache/modules/Contacts/QuickCreate.tpl', 63, false),)), $this); ?>


<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
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
<input type="hidden" name="contact_role">
<?php if (! empty ( $_REQUEST['return_module'] )): ?>
<input type="hidden" name="relate_to" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<input type="hidden" name="opportunity_id" value="<?php echo $_REQUEST['opportunity_id']; ?>
">   
<input type="hidden" name="case_id" value="<?php echo $_REQUEST['case_id']; ?>
">   
<input type="hidden" name="bug_id" value="<?php echo $_REQUEST['bug_id']; ?>
">   
<input type="hidden" name="email_id" value="<?php echo $_REQUEST['email_id']; ?>
">   
<input type="hidden" name="inbound_email_id" value="<?php echo $_REQUEST['inbound_email_id']; ?>
">   
<input type="hidden" name="reports_to_id" value="<?php echo $_REQUEST['contact_id']; ?>
">   
<input type="hidden" name="report_to_name" value="<?php echo $_REQUEST['contact_name']; ?>
">   

<input type="hidden" name="primary_address_street" value="<?php echo $_REQUEST['primary_address_street']; ?>
">
<input type="hidden" name="primary_address_city" value="<?php echo $_REQUEST['primary_address_city']; ?>
">
<input type="hidden" name="primary_address_state" value="<?php echo $_REQUEST['primary_address_state']; ?>
">
<input type="hidden" name="primary_address_country" value="<?php echo $_REQUEST['primary_address_country']; ?>
">
<input type="hidden" name="primary_address_postalcode" value="<?php echo $_REQUEST['primary_address_postalcode']; ?>
">
<input type="hidden" name="phone_work" value="<?php echo $_REQUEST['phone_work']; ?>
">
<input type="hidden" name="is_ajax_call" value="1">
<input type="hidden" name="to_pdf" value="1">

<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';if(check_form('QuickCreate_Contacts'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Contacts_subpanel_save_button');return false;" type="submit" name="Contacts_subpanel_save_button" id="Contacts_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Contacts_subpanel_cancel_button');return false;" type="submit" name="Contacts_subpanel_cancel_button" id="Contacts_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Contacts_subpanel_full_form_button" id="Contacts_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Contacts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align='right'></td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<table width="100%" cellspacing="0" cellpadding="0" class='detail view' id='tabFormPagination'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</table>
<div id="LBL_CONTACT_INFORMATION">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<th align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_INFORMATION','module' => 'Contacts'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='first_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['first_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['first_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['first_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='100' > 
<td valign="top" id='phone_work_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_work']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='101' > 
</tr>
<tr>
<td valign="top" id='last_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='102' > 
<td valign="top" id='phone_mobile_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_mobile']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='103' > 
</tr>
<tr>
<td valign="top" id='account_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" class="sqsEnabled" tabindex="104" id="<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['account_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['account_id']['value']; ?>
">
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" tabindex="104" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['account_name']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"QuickCreate_Contacts","field_to_name_array":{"id":"account_id","name":"account_name"}}'; ?>
, "single", true);' >
<input type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" tabindex="104" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button" onclick="this.form.<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
.value = '';" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" >
<script type="text/javascript">
<!--
enableQS(false);
-->
</script>
<td valign="top" id='phone_fax_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_fax']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='105' > 
</tr>
<tr>
<td valign="top" id='title_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['title']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['title']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['title']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='106' > 
<td valign="top" id='department_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['department']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['department']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['department']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='107' > 
</tr>
<tr>
<td valign="top" id='lead_source_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['lead_source']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['lead_source']['name']; ?>
" title='' tabindex="108"  >
<?php if (isset ( $this->_tpl_vars['fields']['lead_source']['value'] ) && $this->_tpl_vars['fields']['lead_source']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='do_not_call_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DO_NOT_CALL','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['do_not_call']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['do_not_call']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['do_not_call']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['do_not_call']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['do_not_call']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['do_not_call']['name']; ?>
" value="1" title='' tabindex="109" <?php echo $this->_tpl_vars['checked']; ?>
 >
</tr>
<tr>
<td valign="top" id='team_name_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' >
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="111" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="111" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"QuickCreate_Contacts","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, "single", true);' >
<input type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="111" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
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
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_CONTACT_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id="LBL_EMAIL_ADDRESSES">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<th align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESSES','module' => 'Contacts'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='email1_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['email1']['name']; ?>
'><?php echo $this->_tpl_vars['fields']['email1']['value']; ?>
</span>
</tr>
<tr>
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' >
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' >
</tr>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EMAIL_ADDRESSES").style.display='none';</script>
<?php endif; ?>

<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';if(check_form('QuickCreate_Contacts'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Contacts_subpanel_save_button');return false;" type="submit" name="Contacts_subpanel_save_button" id="Contacts_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Contacts_subpanel_cancel_button');return false;" type="submit" name="Contacts_subpanel_cancel_button" id="Contacts_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Contacts_subpanel_full_form_button" id="Contacts_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Contacts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block'];  echo '
<script type="text/javascript">
addToValidate(\'QuickCreate_Contacts\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'QuickCreate_Contacts\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'QuickCreate_Contacts\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'salutation\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SALUTATION','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'first_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'last_name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'full_name\', \'fullname\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'title\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'department\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'do_not_call\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DO_NOT_CALL','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'phone_home\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'phone_mobile\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'phone_work\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'phone_other\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'phone_fax\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'email1\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'email2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_EMAIL_ADDRESS','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'invalid_email\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_INVALID_EMAIL','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'email_opt_out\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_OPT_OUT','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'primary_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'primary_address_street_2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_2','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'primary_address_street_3\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_3','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'primary_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_CITY','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'primary_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STATE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'primary_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'primary_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_COUNTRY','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'alt_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'alt_address_street_2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_2','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'alt_address_street_3\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_3','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'alt_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_CITY','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'alt_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STATE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'alt_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_POSTALCODE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'alt_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_COUNTRY','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'assistant\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'assistant_phone\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT_PHONE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'email_and_name1\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'lead_source\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'account_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'account_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_ID','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'opportunity_role_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'opportunity_role_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_ROLE_ID','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'opportunity_role\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_ROLE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'reports_to_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_ID','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'report_to_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'birthdate\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BIRTHDATE','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'campaign_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ID','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'campaign_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'c_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'m_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'accept_status_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'accept_status_name\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Contacts'), $this); echo '\' );
addToValidate(\'QuickCreate_Contacts\', \'sync_contact\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SYNC_CONTACT','module' => 'Contacts'), $this); echo '\' );
addToValidateBinaryDependency(\'QuickCreate_Contacts\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Contacts'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Contacts'), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'QuickCreate_Contacts\', \'account_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Contacts'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Contacts'), $this); echo '\', \'account_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'QuickCreate_Contacts_account_name\']={"form":"QuickCreate_Contacts","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["QuickCreate_Contacts_account_name","account_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'QuickCreate_Contacts_assigned_user_name\']={"form":"QuickCreate_Contacts","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
