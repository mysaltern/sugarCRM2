<?php /* Smarty version 2.6.11, created on 2021-02-02 08:37:00
         compiled from cache/modules/Notes/SearchForm_basic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/modules/Notes/SearchForm_basic.tpl', 5, false),array('function', 'math', 'cache/modules/Notes/SearchForm_basic.tpl', 6, false),array('function', 'sugar_translate', 'cache/modules/Notes/SearchForm_basic.tpl', 15, false),array('function', 'sugar_getimagepath', 'cache/modules/Notes/SearchForm_basic.tpl', 51, false),)), $this); ?>


<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='8.3333333333333%' >
			<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NOTE_SUBJECT','module' => 'Notes'), $this);?>

		</td>
	<td  nowrap="nowrap" width='25%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['name_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name_basic']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name_basic']['name']; ?>
' size='30' maxlength='' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='' > 
   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='8.3333333333333%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_NAME','module' => 'Notes'), $this);?>

    	</td>
	<td  nowrap="nowrap" width='25%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['contact_name_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['contact_name_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['contact_name_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['contact_name_basic']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['contact_name_basic']['name']; ?>
' size='30'  value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='' > 
   	   	</td>
	</tr>
<tr>
	<td colspan='5'>&nbsp;</td>
	<td style="text-align: right"><img  border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help.gif"), $this);?>
' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src=<?php echo smarty_function_sugar_getimagepath(array('file' => 'close.gif'), $this);?>
></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" ></td>
</tr>
</table><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'search_form_modified_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_created_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_parent_name_basic\']={"form":"search_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name_basic","parent_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_contact_name_basic\']={"form":"search_form","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["contact_name_basic","contact_id_basic","contact_id_basic","contact_id_basic"],"required_list":["contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};</script>'; ?>