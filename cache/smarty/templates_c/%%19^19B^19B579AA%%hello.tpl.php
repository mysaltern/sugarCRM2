<?php /* Smarty version 2.6.11, created on 2021-01-19 07:33:24
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


	<label for="creator">User Creator :</label>

	<select name="creator" id="creator">
		<option selected value="false">SELECT</option> 

		<?php $_from = $this->_tpl_vars['USERS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>

			<option value="<?php echo $this->_tpl_vars['user']['id']; ?>
"><?php echo $this->_tpl_vars['user']['first_name']; ?>
 <?php echo $this->_tpl_vars['user']['last_name']; ?>
 (<?php echo $this->_tpl_vars['user']['user_name']; ?>
)</option> 

		<?php endforeach; endif; unset($_from); ?>


	</select> 

	<label for="startTime">start time :</label>
	<input type="date" id="startTime" name="startTime">
	<label for="endTime">end time :</label>
	<input type="date" id="endTime" name="endTime">


	<label for="sort">Sort :</label>

	<select name="sort" id="sort">
		<option value="1">Increase</option>
		<option value="2">Decrease</option> 
	</select> 


	<label for="sortSecond">Sort (Second) :</label>
	<select name="sortSecond" id="sortSecond">
		<option value="status">Status</option>
		<option value="date_entered">time</option> 
		<option value="user">user</option> 
		<option value="name">name</option> 
	</select> 

	<label for="status">Status :</label>

	<select name="status" id="status">
		<option value="1">Open</option>
		<option value="2">Close</option> 
		<option value="2">Cancelled</option> 
	</select> 

	<label for="mySelect">Type Relation :</label>


	<select id="mySelect">
		<option value="Accounts">Account</option>
		<option value="Opportunities">Opportunities</option>
		<option value="Projects">Project</option> 
	</select>

	<input type="text" value="" name="relationRecord" id="relationRecord"> 



	<button type="button" onclick="myFunction()">Try it</button>


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
	<?php echo '

		function onBlur() {
			document.body.className = \'blurred\';

		}
		;
		function onFocus() {
			document.body.className = \'focused\';

		}
		;

		if (/*@cc_on!@*/false) { // check for Internet Explorer
			document.onfocusin = onFocus;
			document.onfocusout = onBlur;
		} else {
			window.onfocus = onFocus;
			window.onblur = onBlur;
		}
		function myFunction() {

			let record = document.getElementById("mySelect").value;
			let url = "http://localhost/sugar7/index.php?module=" + record + "&action=Popup&hide_clear_button=true&mode=undefined&create=undefined&metadata=undefined";

			var win = window.open(url, \'_blank\');
			win.focus();
		}
	'; ?>

		addToValidate('EditView', 'name', 'varchar', true, '<?php echo $this->_tpl_vars['MOD']['LBL_NAME']; ?>
');
</script>