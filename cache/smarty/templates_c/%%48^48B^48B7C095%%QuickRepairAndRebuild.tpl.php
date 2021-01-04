<?php /* Smarty version 2.6.11, created on 2020-12-28 09:26:55
         compiled from modules/Administration/templates/QuickRepairAndRebuild.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/Administration/templates/QuickRepairAndRebuild.tpl', 43, false),array('function', 'html_checkboxes', 'modules/Administration/templates/QuickRepairAndRebuild.tpl', 45, false),)), $this); ?>

<form>
	<h3><?php echo $this->_tpl_vars['MOD']['LBL_QUICK_REPAIR_TITLE']; ?>
</h3><br/>
	<input type="hidden" name="action" value="QuickRepairAndRebuild"/>
	<input type="hidden" name="subaction" value="repairAndClearAll"/> <!--Switch based on $_REQUEST type!-->
	<input type="hidden" name="module" value="Administration"/>
	<?php echo smarty_function_html_options(array('multiple' => '1','size' => '10','name' => "repair_module[]",'values' => $this->_tpl_vars['values'],'output' => $this->_tpl_vars['output'],'selected' => $this->_tpl_vars['MOD']['LBL_ALL_MODULES']), $this);?>

	<br/><br/>
	<?php echo smarty_function_html_checkboxes(array('name' => 'selected_actions','values' => $this->_tpl_vars['checkbox_values'],'output' => $this->_tpl_vars['checkbox_output'],'separator' => "<br />",'selected' => $this->_tpl_vars['checkbox_values']), $this);?>

	<br/>
	<input class="button" type="submit" value="<?php echo $this->_tpl_vars['MOD']['LBL_REPAIR']; ?>
"/>
</form>