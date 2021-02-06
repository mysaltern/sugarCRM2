<?php /* Smarty version 2.6.11, created on 2021-02-05 21:43:02
         compiled from cache/modules/Leads/form_QuickCreate_Leads.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Leads/form_QuickCreate_Leads.tpl', 38, false),array('function', 'counter', 'cache/modules/Leads/form_QuickCreate_Leads.tpl', 43, false),array('function', 'sugar_translate', 'cache/modules/Leads/form_QuickCreate_Leads.tpl', 46, false),array('function', 'html_options', 'cache/modules/Leads/form_QuickCreate_Leads.tpl', 60, false),array('modifier', 'default', 'cache/modules/Leads/form_QuickCreate_Leads.tpl', 44, false),array('modifier', 'strip_semicolon', 'cache/modules/Leads/form_QuickCreate_Leads.tpl', 53, false),)), $this); ?>


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
<input type="hidden" name="prospect_id" value="<?php if (isset ( $_REQUEST['prospect_id'] )):  echo $_REQUEST['prospect_id'];  else:  echo $this->_tpl_vars['bean']->prospect_id;  endif; ?>">   
<input type="hidden" name="contact_id" value="<?php if (isset ( $_REQUEST['contact_id'] )):  echo $_REQUEST['contact_id'];  else:  echo $this->_tpl_vars['bean']->contact_id;  endif; ?>">   
<input type="hidden" name="opportunity_id" value="<?php if (isset ( $_REQUEST['opportunity_id'] )):  echo $_REQUEST['opportunity_id'];  else:  echo $this->_tpl_vars['bean']->opportunity_id;  endif; ?>">   
<input type="hidden" name="account_id" value="<?php if (isset ( $_REQUEST['account_id'] )):  echo $_REQUEST['account_id'];  else:  echo $this->_tpl_vars['bean']->account_id;  endif; ?>">   
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';if(check_form('form_QuickCreate_Leads'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Leads_subpanel_save_button');return false;" type="submit" name="Leads_subpanel_save_button" id="Leads_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Leads_subpanel_cancel_button');return false;" type="submit" name="Leads_subpanel_cancel_button" id="Leads_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Leads_subpanel_full_form_button" id="Leads_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Leads", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_INFORMATION','module' => 'Leads'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='lead_source_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['lead_source']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['lead_source']['name']; ?>
" title='' tabindex="100"  >
<?php if (isset ( $this->_tpl_vars['fields']['lead_source']['value'] ) && $this->_tpl_vars['fields']['lead_source']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='status_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" title='' tabindex="101"  >
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='refered_by_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REFERED_BY','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['refered_by']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['refered_by']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['refered_by']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['refered_by']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['refered_by']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='102' > 
<td valign="top" id='phone_work_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_work']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_work']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='103' > 
</tr>
<tr>
<td valign="top" id='first_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['first_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['first_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['first_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['first_name']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='104' > 
<td valign="top" id='phone_mobile_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_mobile']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='105' > 
</tr>
<tr>
<td valign="top" id='last_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Leads'), $this);?>

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
' title='' tabindex='106' > 
<td valign="top" id='phone_fax_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_fax']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='107' > 
</tr>
<tr>
<td valign="top" id='account_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['account_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['account_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['account_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='108' > 
<td valign="top" id='do_not_call_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DO_NOT_CALL','module' => 'Leads'), $this);?>

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
<td valign="top" id='title_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['title']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['title']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['title']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='110' > 
<td valign="top" id='department_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['department']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['department']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['department']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='111' > 
</tr>
<tr>
<td valign="top" id='team_name_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' >
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Leads'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="113" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="113" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"form_QuickCreate_Leads","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, "single", true);' >
<input type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="113" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
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
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESSES','module' => 'Leads'), $this);?>
</h4>
</th>
<tr>
<td valign="top" id='email1_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Leads'), $this);?>

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
" class="button" onclick="this.form.action.value='Save';if(check_form('form_QuickCreate_Leads'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Leads_subpanel_save_button');return false;" type="submit" name="Leads_subpanel_save_button" id="Leads_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Leads_subpanel_cancel_button');return false;" type="submit" name="Leads_subpanel_cancel_button" id="Leads_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Leads_subpanel_full_form_button" id="Leads_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Leads", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" language="Javascript">function copyAddressRight(form)  { form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; } function copyAddressLeft(form)  { form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; } </script>
<!-- End Meta-Data Javascript --><?php echo '
<script type="text/javascript">
addToValidate(\'form_QuickCreate_Leads\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'name\', \'name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'form_QuickCreate_Leads\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'form_QuickCreate_Leads\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'salutation\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SALUTATION','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'first_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'last_name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'full_name\', \'fullname\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'title\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'department\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'do_not_call\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DO_NOT_CALL','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'phone_home\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'phone_mobile\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'phone_work\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'phone_other\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'phone_fax\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'email1\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'email2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_EMAIL_ADDRESS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'invalid_email\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_INVALID_EMAIL','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'email_opt_out\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_OPT_OUT','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'primary_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'primary_address_street_2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_2','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'primary_address_street_3\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_3','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'primary_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_CITY','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'primary_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STATE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'primary_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'primary_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_COUNTRY','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'alt_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'alt_address_street_2\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_2','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'alt_address_street_3\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_3','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'alt_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_CITY','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'alt_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STATE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'alt_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_POSTALCODE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'alt_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_COUNTRY','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'assistant\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'assistant_phone\', \'phone\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT_PHONE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'converted\', \'bool\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONVERTED','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'refered_by\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REFERED_BY','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'lead_source\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'lead_source_description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE_DESCRIPTION','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'status_description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS_DESCRIPTION','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'reports_to_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'report_to_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'account_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'account_description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_DESCRIPTION','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'contact_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'account_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'opportunity_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'opportunity_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'opportunity_amount\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_AMOUNT','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'campaign_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ID','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'campaign_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'c_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'m_accept_status_fields\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'accept_status_id\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'accept_status_name\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'webtolead_email1\', \'email\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'webtolead_email2\', \'email\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_EMAIL_ADDRESS','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'webtolead_email_opt_out\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_OPT_OUT','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'webtolead_invalid_email\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_INVALID_EMAIL','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'birthdate\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BIRTHDATE','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'portal_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_NAME','module' => 'Leads'), $this); echo '\' );
addToValidate(\'form_QuickCreate_Leads\', \'portal_app\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_APP','module' => 'Leads'), $this); echo '\' );
addToValidateBinaryDependency(\'form_QuickCreate_Leads\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Leads'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Leads'), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'form_QuickCreate_Leads_assigned_user_name\']={"form":"form_QuickCreate_Leads","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
