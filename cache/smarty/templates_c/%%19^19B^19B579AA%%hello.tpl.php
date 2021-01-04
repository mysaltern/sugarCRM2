<?php /* Smarty version 2.6.11, created on 2021-01-04 08:18:54
         compiled from modules/Activities/tpls/hello.tpl */ ?>


<script>
	<?php echo '
		function set_focus() {
			document.getElementById(\'name\').focus();
		}
	'; ?>

</script>

<form method='post' name='proccessMilad' action='index.php?module=Activities&action=proccess&parentTab=Activities'>

	<?php $_from = $this->_tpl_vars['TYPERECORD']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['related']):
?>
		<input id="<?php echo $this->_tpl_vars['related']; ?>
" type="checkbox" name="typeRecord[]" value="<?php echo $this->_tpl_vars['related']; ?>
"/>
		<label for="<?php echo $this->_tpl_vars['related']; ?>
" ><?php echo $this->_tpl_vars['related']; ?>
</label>
	<?php endforeach; endif; unset($_from); ?>


	<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value = 'Save';return check_form('EditView');" type="submit" name="button" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " > &nbsp;
	<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
"   class='button' accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" type='submit' name='save' value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 " class='button' onclick='document.EditView.action.value = "<?php echo $this->_tpl_vars['RETURN']['action']; ?>
";document.EditView.module.value = "<?php echo $this->_tpl_vars['RETURN']['module']; ?>
";document.EditView.record.value = "<?php echo $this->_tpl_vars['RETURN']['record']; ?>
";
			document.EditView.submit();'>
</form>
<script type="text/javascript">
	addToValidate('EditView', 'name', 'varchar', true, '<?php echo $this->_tpl_vars['MOD']['LBL_NAME']; ?>
');
</script>