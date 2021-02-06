<?php /* Smarty version 2.6.11, created on 2021-02-05 21:27:36
         compiled from cache/modules/Factors/QuickCreate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Factors/QuickCreate.tpl', 34, false),array('function', 'counter', 'cache/modules/Factors/QuickCreate.tpl', 39, false),array('function', 'sugar_translate', 'cache/modules/Factors/QuickCreate.tpl', 44, false),array('function', 'html_options', 'cache/modules/Factors/QuickCreate.tpl', 118, false),array('function', 'sugar_getimagepath', 'cache/modules/Factors/QuickCreate.tpl', 189, false),array('modifier', 'default', 'cache/modules/Factors/QuickCreate.tpl', 40, false),array('modifier', 'strip_semicolon', 'cache/modules/Factors/QuickCreate.tpl', 46, false),)), $this); ?>


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
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';if(check_form('QuickCreate_Factors'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Factors_subpanel_save_button');return false;" type="submit" name="Factors_subpanel_save_button" id="Factors_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Factors_subpanel_cancel_button');return false;" type="submit" name="Factors_subpanel_cancel_button" id="Factors_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Factors_subpanel_full_form_button" id="Factors_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Factors", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<td valign="top" id='name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_FACTOR_NAME','module' => 'Factors'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='100' > 
<td valign="top" id='currency_id_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_ID','module' => 'Factors'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['currency_id']['name']; ?>
'><?php echo $this->_tpl_vars['fields']['currency_id']['value']; ?>
</span>
</tr>
<tr>
<td valign="top" id='account_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Factors'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" class="sqsEnabled" tabindex="102" id="<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['account_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['account_name']['id_name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['account_id']['value']; ?>
">
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" tabindex="102" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['account_name']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"QuickCreate_Factors","field_to_name_array":{"id":"account_id","name":"account_name"}}'; ?>
, "single", true);' >
<input type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['account_name']['name']; ?>
" tabindex="102" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
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
<td valign="top" id='amount_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_AMOUNT','module' => 'Factors'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['amount']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['amount']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['amount']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['amount']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['amount']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='103' > 
</tr>
<tr>
<td valign="top" id='factor_type_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Factors'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['factor_type']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['factor_type']['name']; ?>
" title='' tabindex="104"  >
<?php if (isset ( $this->_tpl_vars['fields']['factor_type']['value'] ) && $this->_tpl_vars['fields']['factor_type']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['factor_type']['options'],'selected' => $this->_tpl_vars['fields']['factor_type']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['factor_type']['options'],'selected' => $this->_tpl_vars['fields']['factor_type']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='sales_stage_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SALES_STAGE','module' => 'Factors'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['sales_stage']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['sales_stage']['name']; ?>
" title='' tabindex="105"  >
<?php if (isset ( $this->_tpl_vars['fields']['sales_stage']['value'] ) && $this->_tpl_vars['fields']['sales_stage']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['sales_stage']['options'],'selected' => $this->_tpl_vars['fields']['sales_stage']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['sales_stage']['options'],'selected' => $this->_tpl_vars['fields']['sales_stage']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<tr>
<td valign="top" id='lead_source_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Factors'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['lead_source']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['lead_source']['name']; ?>
" title='' tabindex="106"  >
<?php if (isset ( $this->_tpl_vars['fields']['lead_source']['value'] ) && $this->_tpl_vars['fields']['lead_source']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='probability_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PROBABILITY','module' => 'Factors'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['probability']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['probability']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['probability']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['probability']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['probability']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='107' > 
</tr>
<tr>
<td valign="top" id='team_name_label' width='12.5%' scope="row">
</td>
<td valign="top" width='37.5%' >
<td valign="top" id='date_closed_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_CLOSED','module' => 'Factors'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php $this->assign('date_value', $this->_tpl_vars['fields']['date_closed']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['date_closed']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['date_closed']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='109' size="11" maxlength="10">
<img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'jscalendar.gif'), $this);?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['date_closed']['name']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['date_closed']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['date_closed']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1,
weekNumbers:false
}
);
</script>
</tr>
<tr>
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Factors'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="110" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="110" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"QuickCreate_Factors","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, "single", true);' >
<input type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="110" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
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
<script>document.getElementById("DEFAULT").style.display='none';</script>
<?php endif; ?>

<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';if(check_form('QuickCreate_Factors'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Factors_subpanel_save_button');return false;" type="submit" name="Factors_subpanel_save_button" id="Factors_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Factors_subpanel_cancel_button');return false;" type="submit" name="Factors_subpanel_cancel_button" id="Factors_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Factors_subpanel_full_form_button" id="Factors_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Factors", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<!-- Begin Meta-Data Javascript -->
<?php echo $this->_tpl_vars['PROBABILITY_SCRIPT']; ?>

<!-- End Meta-Data Javascript --><?php echo '
<script type="text/javascript">
addToValidate(\'QuickCreate_Factors\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_FACTOR_NAME','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'QuickCreate_Factors\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'QuickCreate_Factors\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'factor_type\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'account_name\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'parent_type\', \'parent_type\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_TYPE','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'parent_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_ID','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'account_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_ID','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'campaign_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ID','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'parent_name\', \'parent\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_RELATED_TO','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'acase_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CASE_ID','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'campaign_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'lead_source\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'amount\', \'currency\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_AMOUNT','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'amount_usdollar\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_AMOUNT_USDOLLAR','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'currency_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_ID','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'currency_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_NAME','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'currency_symbol\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_SYMBOL','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'date_closed\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_CLOSED','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'next_step\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NEXT_STEP','module' => 'Factors'), $this); echo '\' );
addToValidate(\'QuickCreate_Factors\', \'sales_stage\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SALES_STAGE','module' => 'Factors'), $this); echo '\' );
addToValidateRange(\'QuickCreate_Factors\', \'probability\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PROBABILITY','module' => 'Factors'), $this); echo '\', 0, 100 );
addToValidateBinaryDependency(\'QuickCreate_Factors\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Factors'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Factors'), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'QuickCreate_Factors\', \'account_name\', \'alpha\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Factors'), $this); echo '';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Factors'), $this); echo '\', \'account_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'QuickCreate_Factors_account_name\']={"form":"QuickCreate_Factors","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["QuickCreate_Factors_account_name","account_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'QuickCreate_Factors_assigned_user_name\']={"form":"QuickCreate_Factors","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
