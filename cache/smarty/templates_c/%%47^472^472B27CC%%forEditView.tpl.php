<?php /* Smarty version 2.6.11, created on 2021-01-02 09:30:07
         compiled from include/SugarEmailAddress/templates/forEditView.tpl */ ?>
<script type="text/javascript" src="include/SugarEmailAddress/SugarEmailAddress.js"></script>
<script type="text/javascript">
	var module = '<?php echo $this->_tpl_vars['module']; ?>
';
</script>
<table style="border-spacing: 0pt;">
	<tr>
		<td  valign="top" NOWRAP>
			<table cellpadding="0" cellspacing="0" border="0" id="<?php echo $this->_tpl_vars['module']; ?>
emailAddressesTable" class="emailaddresses">
				<tbody id="targetBody"></tbody>
				<tr>
					<td scope="row" NOWRAP>
						<input type=hidden name='emailAddressWidget' value=1>
						<input type='button' onClick="javascript:addEmailAddress(<?php echo '\'';  echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo '\''; ?>
,'','');" value='<?php echo $this->_tpl_vars['app_strings']['LBL_ADD_BUTTON']; ?>
'>
					</td>
					<td scope="row" NOWRAP>
					    &nbsp;
					</td>
					<td scope="row" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_PRIMARY']; ?>

					</td>
					<?php if ($this->_tpl_vars['useReplyTo'] == true): ?>
					<td scope="row" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_REPLY_TO']; ?>

					</td>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['useOptOut'] == true): ?>
					<td scope="row" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_OPT_OUT']; ?>

					</td>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['useInvalid'] == true): ?>
					<td scope="row" NOWRAP>
						<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_INVALID']; ?>

					</td>
					<?php endif; ?>
				</tr>
			</table>
		</td>
	</tr>
</table>
<input type="hidden" name="useEmailWidget" value="true">
<script type="text/javascript" language="javascript">
    emailView = '<?php echo $this->_tpl_vars['emailView']; ?>
';
	prefillEmailAddress = '<?php echo $this->_tpl_vars['prefillEmailAddresses']; ?>
';
	addDefaultAddress = '<?php echo $this->_tpl_vars['addDefaultAddress']; ?>
';
	prefillData = <?php echo $this->_tpl_vars['prefillData']; ?>
;

	<?php echo '
	if(prefillEmailAddress == \'true\') {
		prefillEmailAddresses(';  echo '\'';  echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo '\''; ?>
, prefillData);<?php echo '
	} else if(addDefaultAddress == \'true\') {
	'; ?>

	    addEmailAddress(<?php echo '\'';  echo $this->_tpl_vars['module']; ?>
emailAddressesTable<?php echo '\''; ?>
, '');
	}
</script>