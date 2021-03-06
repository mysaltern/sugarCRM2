<?php /* Smarty version 2.6.11, created on 2021-01-19 10:25:20
         compiled from modules/Users/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_help', 'modules/Users/EditView.tpl', 108, false),)), $this); ?>
<!--
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/*********************************************************************************

 ********************************************************************************/
-->

<?php echo $this->_tpl_vars['ROLLOVER']; ?>

<script type="text/javascript" lang="Javascript" src="modules/InboundEmail/InboundEmail.js"></script>
<link rel='stylesheet' type="text/css" href='modules/Users/PasswordRequirementBox.css'>
<script type='text/javascript' src='include/javascript/sugar_grp_overlib.js'></script>
<script type='text/javascript'>
var ERR_RULES_NOT_MET = '<?php echo $this->_tpl_vars['MOD']['ERR_RULES_NOT_MET']; ?>
';
var ERR_ENTER_OLD_PASSWORD = '<?php echo $this->_tpl_vars['MOD']['ERR_ENTER_OLD_PASSWORD']; ?>
';
var ERR_ENTER_NEW_PASSWORD = '<?php echo $this->_tpl_vars['MOD']['ERR_ENTER_NEW_PASSWORD']; ?>
';
var ERR_ENTER_CONFIRMATION_PASSWORD = '<?php echo $this->_tpl_vars['MOD']['ERR_ENTER_CONFIRMATION_PASSWORD']; ?>
';
var ERR_REENTER_PASSWORDS = '<?php echo $this->_tpl_vars['MOD']['ERR_REENTER_PASSWORDS']; ?>
';
</script>
<script type='text/javascript' src='modules/Users/PasswordRequirementBox.js'></script>
<?php echo $this->_tpl_vars['ERROR_STRING']; ?>

<form name="EditView" id="EditView" method="POST" action="index.php">
	<input type="hidden" name="display_tabs_def">
	<input type="hidden" name="hide_tabs_def">
	<input type="hidden" name="remove_tabs_def">
	<input type="hidden" name="module" value="Users">
	<input type="hidden" name="record" id="record" value="<?php echo $this->_tpl_vars['ID']; ?>
">
	<input type="hidden" name="action">
	<input type="hidden" name="page" value="EditView">
	<input type="hidden" name="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">
	<input type="hidden" name="return_id" value="<?php echo $this->_tpl_vars['RETURN_ID']; ?>
">
	<input type="hidden" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">
	<input type="hidden" name="password_change" id="password_change" value="false">
    <input type="hidden" name="required_password" id="required_password" value='<?php echo $this->_tpl_vars['REQUIRED_PASSWORD']; ?>
' >
	<input type="hidden" name="user_name" value="<?php echo $this->_tpl_vars['USER_NAME']; ?>
">
	<input type="hidden" name="type" value="<?php echo $this->_tpl_vars['REDIRECT_EMAILS_TYPE']; ?>
">
	<input type="hidden" id="is_group" name="is_group" value='<?php echo $this->_tpl_vars['IS_GROUP']; ?>
' <?php echo $this->_tpl_vars['IS_GROUP_DISABLED']; ?>
>
	<input type="hidden" id='portal_only' name='portal_only' value='<?php echo $this->_tpl_vars['IS_PORTALONLY']; ?>
' <?php echo $this->_tpl_vars['IS_PORTAL_ONLY_DISABLED']; ?>
>
	<input type="hidden" name="is_admin" id="is_admin" value='<?php echo $this->_tpl_vars['IS_FOCUS_ADMIN']; ?>
' <?php echo $this->_tpl_vars['IS_ADMIN_DISABLED']; ?>
 >
	<input type="hidden" name="is_current_admin" id="is_current_admin" value='<?php echo $this->_tpl_vars['IS_ADMIN']; ?>
' >
	<input type="hidden" name="required_email_address" id="required_email_address" value='<?php echo $this->_tpl_vars['REQUIRED_EMAIL_ADDRESS']; ?>
' >
	<div id="popup_window"></div>
						

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td>
			<input	id="Save" title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" 
					class="button" onclick="if (!set_password(form,newrules('<?php echo $this->_tpl_vars['PWDSETTINGS']['minpwdlength']; ?>
','<?php echo $this->_tpl_vars['PWDSETTINGS']['maxpwdlength']; ?>
','<?php echo $this->_tpl_vars['REGEX']; ?>
'))) return false; if (!Admin_check()) return false; this.form.action.value='Save'; <?php echo $this->_tpl_vars['CHOOSER_SCRIPT']; ?>
 <?php echo $this->_tpl_vars['REASSIGN_JS']; ?>
 if(verify_data(EditView)) this.form.submit();"
					type="button" name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " >
			<input	title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" 
					class="button" onclick="this.form.action.value='<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
'; this.form.module.value='<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
'; this.form.record.value='<?php echo $this->_tpl_vars['RETURN_ID']; ?>
'; this.form.submit()" 
					type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  ">
		</td>
		<td align="right" nowrap><span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span> <?php echo $this->_tpl_vars['APP']['NTC_REQUIRED']; ?>
</td>
	</tr>
</table>

<div id="basic">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
	<tr>
		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_NAME']; ?>
: <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></slot></td>
					<td width="33%" ><slot><input name='sugar_user_name' type="text" <?php echo $this->_tpl_vars['USER_NAME_DISABLED']; ?>
 tabindex='1' size='15' maxlength='25' value='<?php echo $this->_tpl_vars['USER_NAME']; ?>
' /></slot></td>
					<td width="17%" id='name_lbl' style='display:<?php echo $this->_tpl_vars['HIDE_FOR_NORMAL_AND_ADMIN']; ?>
'  scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_LIST_NAME']; ?>
: <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></slot></td>
					<td width="33%" id='name_field' style='display:<?php echo $this->_tpl_vars['HIDE_FOR_NORMAL_AND_ADMIN']; ?>
'><slot><input id='unique_name' name='unique_name' <?php echo $this->_tpl_vars['LAST_NAME_DISABLED']; ?>
 tabindex='2' size='25' maxlength='25' type="text" value="<?php echo $this->_tpl_vars['LAST_NAME']; ?>
" onblur="document.getElementById('last_name').value=this.value"></slot></td>
					<td width="17%" id='first_name_lbl' scope="row"  style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'><slot><?php echo $this->_tpl_vars['MOD']['LBL_FIRST_NAME']; ?>
:</slot></td>
					<td width="33%" id='first_name_field'  style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'><slot><input id='first_name' name='first_name' <?php echo $this->_tpl_vars['FIRST_NAME_DISABLED']; ?>
 tabindex='1' size='25' maxlength='25' type="text" value="<?php echo $this->_tpl_vars['FIRST_NAME']; ?>
"></slot></td>
				
				</tr>
				<tr>
					<?php echo $this->_tpl_vars['USER_STATUS_OPTIONS']; ?>
	
					<td width="17%" scope="row" style='display:<?php echo $this->_tpl_vars['HIDE_STATIC_USERTYPE']; ?>
'><slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_TYPE']; ?>
:</slot></td>
					<td scope="row" style='display:<?php echo $this->_tpl_vars['HIDE_STATIC_USERTYPE']; ?>
'><slot><?php echo $this->_tpl_vars['USER_TYPE_LABEL']; ?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['USER_TYPE_DESC'],'WIDTH' => 250), $this);?>
</slot></td>
					<td id='last_name_lbl' scope="row"  style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'><slot><?php echo $this->_tpl_vars['MOD']['LBL_LAST_NAME']; ?>
: <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></slot></td>
					<td id='last_name_field'  style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'><slot><input id='last_name' name='last_name' type="text" <?php echo $this->_tpl_vars['LAST_NAME_DISABLED']; ?>
 tabindex='1' size='25' maxlength='25' value="<?php echo $this->_tpl_vars['LAST_NAME']; ?>
"></slot></td>
				</tr>
				<tr>
					<td colspan='4' style='display:<?php echo $this->_tpl_vars['HIDE_CHANGE_USERTYPE']; ?>
'>
						<table width="100%" cellspacing="0" cellpadding="0">
						<tr><td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_TYPE']; ?>
:</slot></td>
						<?php if ($this->_tpl_vars['USER_ADMIN']): ?>
							<td width="20%"><select id="UserType" name="UserType" onchange="user_status_display(this);" value='' disabled>
								<option value="RegularUser"><?php echo $this->_tpl_vars['MOD']['LBL_REGULAR_USER']; ?>
</option>
							</select></td>
						<?php elseif ($this->_tpl_vars['ADMIN_EDIT_SELF']): ?>
							<td width="20%"><select id="UserType" name="UserType" onchange="user_status_display(this);" value='' disabled>
								<option value="Administrator"><?php echo $this->_tpl_vars['MOD']['LBL_ADMIN_USER']; ?>
</option>
							</select></td>
						<?php else: ?>
							<td width="20%"><select id="UserType" name="UserType" onchange="user_status_display(this);" value='' tabindex='1' >
								<option value="RegularUser"><?php echo $this->_tpl_vars['MOD']['LBL_REGULAR_USER']; ?>
</option>
								<option value="Administrator" <?php if ($this->_tpl_vars['IS_FOCUS_ADMIN']): ?> SELECTED <?php endif; ?>><?php echo $this->_tpl_vars['MOD']['LBL_ADMIN_USER']; ?>
</option>
  							</select></td>
  						<?php endif; ?>
							<td colspan='4' scope="row">
								<div id='UserTypeDesc'><?php echo $this->_tpl_vars['USER_TYPE_DESC']; ?>
</div>
							</td></tr>
						</table>
					</td>
				</tr>

			</table>
		</td>
			
	</tr>
</table>
</div>

<?php if (( $this->_tpl_vars['CHANGE_PWD'] ) == '1'): ?> 
<div id="generate_password">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
    <tr>
        <td width='40%'>
            <table width='100%' cellspacing='0' cellpadding='0' border='0' >
                <tr>
                    <th align="left" scope="row" colspan="4">
                        <h4><?php echo $this->_tpl_vars['MOD']['LBL_CHANGE_PASSWORD_TITLE']; ?>
</h4><br>
                        <?php echo $this->_tpl_vars['ERROR_PASSWORD']; ?>

                    </th>
                </tr>
            </table>
            	<!-- hide field if user is admin -->
	            <div id='generate_password_old_password' <?php if (( $this->_tpl_vars['IS_ADMIN'] )): ?> style='display:none' <?php endif; ?>>
		             <table width='100%' cellspacing='0' cellpadding='0' border='0' >
		                <tr>
		                    <td width='35%' scope="row">
		                        <?php echo $this->_tpl_vars['MOD']['LBL_OLD_PASSWORD']; ?>

		                    </td>
		                    <td >
		                        <input name='old_password' id='old_password' type='password' tabindex='2' onkeyup="password_confirmation();" >
		                    </td>
                            <td width='40%'>
                   			</td>
		                </tr>
		             </table>
				</div>
			<table width='100%' cellspacing='0' cellpadding='0' border='0' >
                <tr>
                    <td width='35%' scope="row" snowrap>
                        <?php echo $this->_tpl_vars['MOD']['LBL_NEW_PASSWORD']; ?>

                        <span class="required" id="mandatory_pwd"><?php if (( $this->_tpl_vars['REQUIRED_PASSWORD'] )):  echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL'];  endif; ?></span>
                    </td>
                    <td class='dataField'>
                        
                        <input name='new_password' id= "new_password" type='password' tabindex='2' onkeyup="password_confirmation();newrules('<?php echo $this->_tpl_vars['PWDSETTINGS']['minpwdlength']; ?>
','<?php echo $this->_tpl_vars['PWDSETTINGS']['maxpwdlength']; ?>
','<?php echo $this->_tpl_vars['REGEX']; ?>
');" />
                    </td>
                    <td width='40%'>
                    </td>
                </tr>
                <tr>
                    <td scope="row" width='35%'>
                        <?php echo $this->_tpl_vars['MOD']['LBL_CONFIRM_PASSWORD']; ?>

                    </td>
                    <td class='dataField'>
                        <input name='confirm_new_password' id='confirm_pwd' style ='' type='password' tabindex='2' onkeyup="password_confirmation();"  >
                    </td>
                    <td width='40%'>
                    <div id="comfirm_pwd_match" class="error" style="display: none;"><?php echo $this->_tpl_vars['MOD']['ERR_PASSWORD_MISMATCH']; ?>
</div>
                                             </td>
                </tr>
                <tr>
                    <td class='dataLabel'></td>
                    <td class='dataField'></td>
                </td>                    
            </table>

            <table width='17%' cellspacing='0' cellpadding='1' border='0'>
                <tr>
                    <td width='50%'>
                        <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey='<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
' class='button' id='save_new_pwd_button' LANGUAGE=javascript onclick='if (set_password(this.form)) window.close(); else return false;' type='submit' name='button' style='display:none;' value='<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
'>
                    </td>
                    <td width='50%'>
                    </td>
                </tr>
            </table>
        </td>
        <td width='60%' style="vertical-align:middle;">
        </td>
    </tr>
</table>

</div>

<?php else: ?>
<div id="generate_password">
	<input name='old_password' id='old_password' type='hidden'>
	<input name='new_password' id= "new_password" type='hidden'>
	<input name='confirm_new_password' id='confirm_pwd' type='hidden'>
</div>
<?php endif; ?>

<div id="email_options">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
	<tr>
		<td>
	        <table width="100%" border="0" cellspacing="0" cellpadding="0">
	        	<tr>
	        		<th align="left" scope="row" colspan="4">
	        			<h4><?php echo $this->_tpl_vars['MOD']['LBL_MAIL_OPTIONS_TITLE']; ?>
</h4>
	        		</th>
	        	</tr>
	        	<tr>
	        	    <td scope="row" width="17%">
	        	    <?php echo $this->_tpl_vars['MOD']['LBL_EMAIL']; ?>
: <?php if ($this->_tpl_vars['REQUIRED_EMAIL_ADDRESS']): ?><span class="required" id="mandatory_email"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span> <?php endif; ?>
	        	    </td>
					<td width="33%">
						<?php echo $this->_tpl_vars['NEW_EMAIL']; ?>

					</td>
					<td width="17%" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'>
			        	<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_LINK_TYPE']; ?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_EMAIL_LINK_TYPE_HELP'],'WIDTH' => 450), $this);?>

			        </td>
			        <td width="33%" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'>
			        	<select name="email_link_type" tabindex='410'>
			        	<?php echo $this->_tpl_vars['EMAIL_LINK_TYPE']; ?>

			        	</select>
			        </td>
				</tr>     
				<tr><td colspan="4">&nbsp; </td></tr>  
				<tr class="<?php echo $this->_tpl_vars['HIDE_IF_CAN_USE_DEFAULT_OUTBOUND']; ?>
" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'>
					<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_MAIL_SMTPSERVER']; ?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_SMTP_SERVER_HELP'],'WIDTH' => 450), $this);?>
</slot></td>
					<td width="33%" ><slot><input id='mail_smtpserver' name='mail_smtpserver' type="text" tabindex='5' size='25' maxlength='100' value='<?php echo $this->_tpl_vars['MAIL_SMTPSERVER']; ?>
' disabled='disabled'></slot></td>
					<td width="17%" scope="row">&nbsp;</td>
					<td width="33%" >&nbsp;</td>
				</tr>
				<tr class="<?php echo $this->_tpl_vars['HIDE_IF_CAN_USE_DEFAULT_OUTBOUND']; ?>
" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'>
					<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_MAIL_SMTPUSER']; ?>
:</slot></td>
					<td width="33%" ><slot><input id='mail_smtpuser' name='mail_smtpuser' type="text" tabindex='5' size='25' maxlength='100' value='<?php echo $this->_tpl_vars['MAIL_SMTPUSER']; ?>
' <?php echo $this->_tpl_vars['MAIL_USER_PSS_DISABLED']; ?>
></slot></td>
					<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_MAIL_SMTPPASS']; ?>
:</slot></td>
					<td width="33%" ><slot><input id='mail_smtppass' name='mail_smtppass' type="password" tabindex='6' size='25' maxlength='100' value='<?php echo $this->_tpl_vars['MAIL_SMTPPASS']; ?>
' <?php echo $this->_tpl_vars['MAIL_USER_PSS_DISABLED']; ?>
></slot></td>
				</tr>
				<tr class="<?php echo $this->_tpl_vars['HIDE_IF_CAN_USE_DEFAULT_OUTBOUND']; ?>
" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'>
					<td width="17%" scope="row"><input type="button" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_EMAIL_TEST_OUTBOUND_SETTINGS']; ?>
   " onclick="startOutBoundEmailSettingsTest();"></td>
					<td width="33%" >&nbsp;</td>
					<td width="17%" scope="row">&nbsp;</td>
					<td width="33%" >&nbsp;</td>
				</tr>
				
			</table>
		</td>
	</tr>
</table>
</div>

<div id="information" style='display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
'>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
	<tr>
		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th align="left" scope="row" colspan="4"><h4><slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_INFORMATION']; ?>
</slot></h4></th>
				</tr>
				<tr>
					<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_EMPLOYEE_STATUS']; ?>
:</slot></td>
					<td width="33%" ><slot><?php echo $this->_tpl_vars['EMPLOYEE_STATUS_OPTIONS']; ?>
</slot></td>
					<td scope="row"><slot>&nbsp;</slot></td>
					<td  ><slot>&nbsp;</slot></td>
				</tr>
				<tr>
					<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_TITLE']; ?>
:</slot></td>
					<td width="33%" ><slot><input name='title' type="text" tabindex='5' size='15' maxlength='25' value='<?php echo $this->_tpl_vars['TITLE']; ?>
' <?php echo $this->_tpl_vars['IS_ADMIN_DISABLED']; ?>
></slot></td>
					<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_OFFICE_PHONE']; ?>
:</slot></td>
					<td width="33%" ><slot><input name='phone_work' type="text" tabindex='6' size='20' maxlength='25' value='<?php echo $this->_tpl_vars['PHONE_WORK']; ?>
'></slot></td>
				</tr>
				<tr>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_DEPARTMENT']; ?>
:</slot></td>
					<td  ><slot><input name='department' type="text" tabindex='5' size='25' maxlength='100' value='<?php echo $this->_tpl_vars['DEPARTMENT']; ?>
' <?php echo $this->_tpl_vars['IS_ADMIN_DISABLED']; ?>
></slot></td>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_MOBILE_PHONE']; ?>
:</slot></td>
					<td  ><slot><input name='phone_mobile' type="text" tabindex='6' size='20' maxlength='25' value='<?php echo $this->_tpl_vars['PHONE_MOBILE']; ?>
'></slot></td>
				</tr>
				<tr>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_REPORTS_TO']; ?>
:</slot></td>
					<td ><slot><input type="text" class="sqsEnabled" tabindex='5' name="reports_to_name" id="reports_to_name" value="<?php echo $this->_tpl_vars['REPORTS_TO_NAME']; ?>
" autocomplete="off" <?php echo $this->_tpl_vars['IS_ADMIN_DISABLED']; ?>
/>
						<input type="hidden" name="reports_to_id" id="reports_to_id" value="<?php echo $this->_tpl_vars['REPORTS_TO_ID']; ?>
" tabindex="240"/>
						<?php echo $this->_tpl_vars['REPORTS_TO_CHANGE_BUTTON']; ?>
</slot></td>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_OTHER_PHONE']; ?>
:</slot></td>
					<td  ><slot><input name='phone_other' type="text" tabindex='6' size='20' maxlength='25' value='<?php echo $this->_tpl_vars['PHONE_OTHER']; ?>
'></slot></td>
				</tr>
				<tr>
					<td scope="row"><slot>&nbsp;</slot></td>
					<td  ><slot>&nbsp;</slot></td>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_FAX']; ?>
:</slot></td>
					<td  ><slot><input name='phone_fax' type="text" tabindex='6' size='20' maxlength='25' value='<?php echo $this->_tpl_vars['PHONE_FAX']; ?>
'></slot></td>
				</tr>
				<tr>
					<td scope="row"><slot>&nbsp;</slot></td>
					<td  ><slot>&nbsp;</slot></td>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_HOME_PHONE']; ?>
:</slot></td>
					<td  ><slot><input name='phone_home' type="text" tabindex='6' size='20' maxlength='25' value='<?php echo $this->_tpl_vars['PHONE_HOME']; ?>
'></slot></td>
				</tr>
				<tr>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_MESSENGER_TYPE']; ?>
:</slot></td>
					<td  ><slot><?php echo $this->_tpl_vars['MESSENGER_TYPE_OPTIONS']; ?>
</slot></td>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_MESSENGER_ID']; ?>
:</slot></td>
					<td  ><slot><input name='messenger_id' type="text" tabindex='6' size='35' maxlength='100' value='<?php echo $this->_tpl_vars['MESSENGER_ID']; ?>
'></slot></td>
				</tr>
								<tr>
					<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_PRIMARY_ADDRESS']; ?>
:</slot></td>
					<td width="33%" ><slot><textarea name='address_street' rows="2" tabindex='8' cols="30"><?php echo $this->_tpl_vars['ADDRESS_STREET']; ?>
</textarea></slot></td>
					<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_CITY']; ?>
:</slot></td>
					<td width="33%" ><slot><input name='address_city' tabindex='8' size='15' maxlength='100' value='<?php echo $this->_tpl_vars['ADDRESS_CITY']; ?>
'></slot></td>
				</tr>
				<tr>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_STATE']; ?>
:</slot></td>
					<td  ><slot><input name='address_state' tabindex='9' size='15' maxlength='100' value='<?php echo $this->_tpl_vars['ADDRESS_STATE']; ?>
'></slot></td>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_POSTAL_CODE']; ?>
:</slot></td>
					<td  ><slot><input name='address_postalcode' tabindex='9' size='10' maxlength='20' value='<?php echo $this->_tpl_vars['ADDRESS_POSTALCODE']; ?>
'></slot></td>
				</tr>
				<tr>
					<td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_COUNTRY']; ?>
:</slot></td>
					<td  ><slot><input name='address_country' tabindex='10' size='10' maxlength='20' value='<?php echo $this->_tpl_vars['ADDRESS_COUNTRY']; ?>
'></slot></td>
				</tr>
				<tr>
					<td valign="top" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_NOTES']; ?>
:</slot></td>
					<td colspan="4"><slot><textarea name='description' tabindex='11' cols='100%' rows="4"><?php echo $this->_tpl_vars['DESCRIPTION']; ?>
</textarea></slot></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>

<div id="settings" style="display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
	<tr>
		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th width="100%" align="left" scope="row" colspan="4"><h4><slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_SETTINGS']; ?>
</slot></h4></th>
				</tr>
				<tr>
					<td scope="row" width="17%"><slot><?php echo $this->_tpl_vars['MOD']['LBL_RECEIVE_NOTIFICATIONS']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_RECEIVE_NOTIFICATIONS_TEXT']), $this);?>
</td>
					<td width="33%"><slot><input name='receive_notifications' class="checkbox" tabindex='12' type="checkbox" value="12" <?php echo $this->_tpl_vars['RECEIVE_NOTIFICATIONS']; ?>
></slot></td>
					<td scope="row"  valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_DELIMITER']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_EXPORT_DELIMITER_DESC']), $this);?>
</td>
                    <td ><slot><input type="text" tabindex='12' name="export_delimiter" value="<?php echo $this->_tpl_vars['EXPORT_DELIMITER']; ?>
" size="5"></slot></td>
                </tr>

				<tr>
					<td  scope="row" valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_REMINDER']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_REMINDER_TEXT']), $this);?>
</td>
					<td valign="top"  nowrap><slot>
						<input tabindex='12' name='mailmerge_on' type='hidden' value='0'>
						<input name='should_remind' size='2' maxlength='2' tabindex='12' onclick='toggleDisplay("should_remind_list");' type="checkbox" class="checkbox" value='1' <?php echo $this->_tpl_vars['REMINDER_CHECKED']; ?>
>
						<div id='should_remind_list' style='display:<?php echo $this->_tpl_vars['REMINDER_TIME_DISPLAY']; ?>
'>
							<select tabindex='12' name='reminder_time'  ><?php echo $this->_tpl_vars['REMINDER_TIME_OPTIONS']; ?>
</select></div></slot></td>
					<td scope="row" valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_EXPORT_CHARSET']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_EXPORT_CHARSET_DESC']), $this);?>
</td>
                  	<td ><slot><select tabindex='12' name="default_export_charset"><?php echo $this->_tpl_vars['EXPORT_CHARSET']; ?>
</select></slot></td>
                </tr>
				<tr>
					<td scope="row" valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES_DESC']), $this);?>
</td>
                 	<td ><slot><input tabindex='12' type="checkbox" name="use_real_names" <?php echo $this->_tpl_vars['USE_REAL_NAMES']; ?>
></slot></td>
                 	<td scope="row" valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_MAILMERGE']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_MAILMERGE_TEXT']), $this);?>
</td>
					<td valign="top"  nowrap><slot><input tabindex='12' name='mailmerge_on' class="checkbox" type="checkbox" <?php echo $this->_tpl_vars['MAILMERGE_ON']; ?>
></slot></td>
				</tr>
				<!--<?php if (! empty ( $this->_tpl_vars['EXTERNAL_AUTH_CLASS'] ) && ! empty ( $this->_tpl_vars['IS_ADMIN'] )): ?>-->
					<tr>
						<?php ob_start(); ?>&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_EXTERNAL_AUTH_ONLY']; ?>
 <?php echo $this->_tpl_vars['EXTERNAL_AUTH_CLASS_1'];  $this->_smarty_vars['capture']['SMARTY_LBL_EXTERNAL_AUTH_ONLY'] = ob_get_contents(); ob_end_clean(); ?>
						<td scope="row" nowrap><slot><?php echo $this->_tpl_vars['EXTERNAL_AUTH_CLASS']; ?>
 <?php echo $this->_tpl_vars['MOD']['LBL_ONLY']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_smarty_vars['capture']['SMARTY_LBL_EXTERNAL_AUTH_ONLY']), $this);?>
</td>
						<td ><input type='hidden' value='0' name='external_auth_only'><input type='checkbox' value='1' name='external_auth_only' <?php echo $this->_tpl_vars['EXTERNAL_AUTH_ONLY_CHECKED']; ?>
></td>
						<td ></td>
						<td ></td>
					</tr>
				<!--<?php endif; ?>-->
			</table>
		</td>
	</tr>
</table>
</div>
<div id="edit_tabs" style="display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
">
<table class="edit view" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tbody>
		<tr>
			<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_LAYOUT_OPTIONS']; ?>
</h4></th>
		</tr>
		<tr>
			<td>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
			    		<td colspan="3">
			    			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			    				<tr>
						    		<td scope="row" align="left" style="padding-bottom: 2em;"><?php echo $this->_tpl_vars['TAB_CHOOSER']; ?>
</td>
									<td width="90%" valign="top"><BR>&nbsp;</td>
								</tr>
							</table>
			    		</td>
					</tr>
					<?php ob_start(); ?>&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_SWAP_LAST_VIEWED_DESCRIPTION']; ?>
 <i><?php echo $this->_tpl_vars['MOD']['LBL_SUPPORTED_THEME_ONLY']; ?>
</i><?php $this->_smarty_vars['capture']['SMARTY_SWAP_LAST_VIEWED_DESC'] = ob_get_contents(); ob_end_clean(); ?>
					<tr>
						<td width="17%" scope="row"><span scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_MAX_TAB']; ?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_MAX_TAB_DESCRIPTION']), $this);?>
</td>
						<td width="33%" ><input type="text" size="2" maxlength="2" name="user_max_tabs" value="<?php echo $this->_tpl_vars['MAX_TAB']; ?>
" tabindex='12'></td>
						<td width="17%" scope="row"><span scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_SWAP_LAST_VIEWED_POSITION']; ?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_smarty_vars['capture']['SMARTY_SWAP_LAST_VIEWED_DESC']), $this);?>
</td>
						<td width="33%"><input type="checkbox" name="user_swap_last_viewed" <?php echo $this->_tpl_vars['SWAP_LAST_VIEWED']; ?>
 tabindex='13'></td>
					</tr>
					<?php ob_start(); ?>&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_SWAP_SHORTCUT_DESCRIPTION']; ?>
<i><?php echo $this->_tpl_vars['MOD']['LBL_SUPPORTED_THEME_ONLY']; ?>
</i><?php $this->_smarty_vars['capture']['SMARTY_SWAP_SHORTCUT_DESC'] = ob_get_contents(); ob_end_clean(); ?>
					<tr>
						<td scope="row"><span><?php echo $this->_tpl_vars['MOD']['LBL_MAX_SUBTAB']; ?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_MAX_SUBTAB_DESCRIPTION']), $this);?>
</td>
						<td ><input type="text" size="2" maxlength="2" name="user_max_subtabs" value="<?php echo $this->_tpl_vars['MAX_SUBTAB']; ?>
" tabindex='12'></td>
						<td scope="row"><span><?php echo $this->_tpl_vars['MOD']['LBL_SWAP_SHORTCUT_POSITION']; ?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_smarty_vars['capture']['SMARTY_SWAP_SHORTCUT_DESC']), $this);?>
</td>
						<td ><input type="checkbox" name="user_swap_shortcuts" <?php echo $this->_tpl_vars['SWAP_SHORTCUT']; ?>
 tabindex='13'></td>
					</tr>
					<?php ob_start(); ?>&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_NAVIGATION_PARADIGM_DESCRIPTION']; ?>
<i><?php echo $this->_tpl_vars['MOD']['LBL_SUPPORTED_THEME_ONLY']; ?>
</i><?php $this->_smarty_vars['capture']['SMARTY_NAVIGATION_PARADIGM_DESC'] = ob_get_contents(); ob_end_clean(); ?>
					<tr>
						<td scope="row"><span><?php echo $this->_tpl_vars['MOD']['LBL_SUBPANEL_TABS']; ?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_SUBPANEL_TABS_DESCRIPTION']), $this);?>
</td>
						<td ><input type="checkbox" name="user_subpanel_tabs" <?php echo $this->_tpl_vars['SUBPANEL_TABS']; ?>
 tabindex='13'></td>
						<td scope="row"><span><?php echo $this->_tpl_vars['MOD']['LBL_SUBPANEL_LINKS']; ?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_SUBPANEL_LINKS_DESCRIPTION']), $this);?>
</td>
						<td ><input type="checkbox" name="user_subpanel_links" <?php echo $this->_tpl_vars['SUBPANEL_LINKS']; ?>
 tabindex='13'></td>
					</tr>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</div>

<div id="locale" style="display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th width="100%" align="left" scope="row" colspan="4">
                        <h4><slot><?php echo $this->_tpl_vars['MOD']['LBL_USER_LOCALE']; ?>
</slot></h4></th>
                </tr>
                <tr>
                    <td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_DATE_FORMAT']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_DATE_FORMAT_TEXT']), $this);?>
</td>
                    <td width="33%"><slot><select tabindex='14' name='dateformat'><?php echo $this->_tpl_vars['DATEOPTIONS']; ?>
</select></slot></td>
                    <!-- END: prompttz -->
	                <!-- BEGIN: currency -->
	                <td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_CURRENCY_TEXT']), $this);?>
</td>
	                    <td ><slot>
	                        <select tabindex='14' id='currency_select' name='currency' onchange='setSymbolValue(this.selectedIndex);setSigDigits();'><?php echo $this->_tpl_vars['CURRENCY']; ?>
</select>
	                        <input type="hidden" id="symbol" value="">
	                    </slot></td>
	                <!-- END: currency -->
                </tr>
                <tr>
                    <td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_TIME_FORMAT']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_TIME_FORMAT_TEXT']), $this);?>
</td>
                    <td ><slot><select tabindex='14' name='timeformat'><?php echo $this->_tpl_vars['TIMEOPTIONS']; ?>
</select></slot></td>
	                <!-- BEGIN: currency -->
	                <td width="17%" scope="row"><slot>
                        <?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY_SIG_DIGITS']; ?>
:
                    </slot></td>
                    <td ><slot>
                        <select id='sigDigits' onchange='setSigDigits(this.value);' name='default_currency_significant_digits'><?php echo $this->_tpl_vars['sigDigits']; ?>
</select>
                    </slot></td>
	                <!-- END: currency -->
                </tr>
                <tr>
                    <td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_TIMEZONE']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_TIMEZONE_TEXT']), $this);?>
</td>
                    <td ><slot><select tabindex='14' name='timezone'><?php echo $this->_tpl_vars['TIMEZONEOPTIONS']; ?>
</select></slot></td>
	                <!-- BEGIN: currency -->
	                <td width="17%" scope="row"><slot>
                        <i><?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_EXAMPLE_NAME_FORMAT']; ?>
</i>:
                    </slot></td>
                    <td ><slot>
                        <input type="text" disabled id="sigDigitsExample" name="sigDigitsExample">
                    </slot></td>
	                <!-- END: currency -->
                </tr>
                <?php if (( $this->_tpl_vars['IS_ADMIN'] )): ?> 
                <tr>
                    <td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_PROMPT_TIMEZONE']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_PROMPT_TIMEZONE_TEXT']), $this);?>
</td>
                    <td ><slot><input type="checkbox" tabindex='14'class="checkbox" name="ut" value="0" <?php echo $this->_tpl_vars['PROMPTTZ']; ?>
></slot></td>
                	<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_NUMBER_GROUPING_SEP']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_NUMBER_GROUPING_SEP_TEXT']), $this);?>
</td>
                    <td ><slot>
                        <input tabindex='14' name='num_grp_sep' id='default_number_grouping_seperator'
                            type='text' maxlength='1' size='1' value='<?php echo $this->_tpl_vars['NUM_GRP_SEP']; ?>
' 
                            onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
                    </slot></td></tr>
                <?php else: ?>
                	<input type='hidden' name='num_grp_sep' id='default_number_grouping_seperator' value='<?php echo $this->_tpl_vars['NUM_GRP_SEP']; ?>
'>
                <?php endif; ?>
                <?php ob_start(); ?>&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_NAME_FORMAT_DESC']; ?>
<br /><?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_NAME_FORMAT_DESC_2'];  $this->_smarty_vars['capture']['SMARTY_LOCALE_NAME_FORMAT_DESC'] = ob_get_contents(); ob_end_clean(); ?>
				<tr>
                    <td  scope="row" valign="top"><?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_DEFAULT_NAME_FORMAT']; ?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_smarty_vars['capture']['SMARTY_LOCALE_NAME_FORMAT_DESC']), $this);?>
</td>
                    <td   valign="top">
                        <input onkeyup="setPreview();" onkeydown="setPreview();" id="default_locale_name_format" type="text" tabindex='14' name="default_locale_name_format" value="<?php echo $this->_tpl_vars['default_locale_name_format']; ?>
">
                    </td>
                     <td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_DECIMAL_SEP']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_DECIMAL_SEP_TEXT']), $this);?>
</td>
                    <td ><slot>
                        <input tabindex='14' name='dec_sep' id='default_decimal_seperator' 
                            type='text' maxlength='1' size='1' value='<?php echo $this->_tpl_vars['DEC_SEP']; ?>
'
                            onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
                    </slot></td>
                </tr>
                <tr>
                    <td  scope="row" valign="top"><i><?php echo $this->_tpl_vars['MOD']['LBL_LOCALE_EXAMPLE_NAME_FORMAT']; ?>
:</i> </td>
                    <td   valign="top"><input tabindex='14' name="no_value" id="nameTarget" value="" disabled size="50"></td>        
                </tr>
            </table>
        </td>
    </tr>
</table>
</div>

<div id="calendar_options" style="display:<?php echo $this->_tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']; ?>
">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
	<tr>
		<th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_CALENDAR_OPTIONS']; ?>
</h4></th>
	</tr>
	<tr>
		<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="17%" scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_PUBLISH_KEY']; ?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_CHOOSE_A_KEY']), $this);?>
</td>
					<td width="20%" ><slot><input name='calendar_publish_key' tabindex='17' size='25' maxlength='25' type="text" value="<?php echo $this->_tpl_vars['CALENDAR_PUBLISH_KEY']; ?>
"></slot></td>
					<td width="63%" ><slot>&nbsp;</slot></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>

<div style="padding-top:2px;">
	<input	id="Save" title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button" onclick="if (!set_password(form,newrules('<?php echo $this->_tpl_vars['PWDSETTINGS']['minpwdlength']; ?>
','<?php echo $this->_tpl_vars['PWDSETTINGS']['maxpwdlength']; ?>
','<?php echo $this->_tpl_vars['REGEX']; ?>
'))) return false;Admin_check(); this.form.action.value='Save'; <?php echo $this->_tpl_vars['CHOOSER_SCRIPT']; ?>
 <?php echo $this->_tpl_vars['REASSIGN_JS']; ?>
 if(verify_data(EditView)) this.form.submit();" 
			type="button" name="button" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " />
	<input	title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" class="button" onclick="this.form.action.value='<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
'; this.form.module.value='<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
'; this.form.record.value='<?php echo $this->_tpl_vars['RETURN_ID']; ?>
'; this.form.submit();" 
			type="button" name="button" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " />
</div>
<div id="testOutboundDialog" class="yui-hidden">
    <div id="testOutbound">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
			<tr>
				<td scope="row">
					Email Address For Test Notification: 
					<span class="required">

						*
					</span>
				</td>
				<td >
					<input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35" maxlength="64" value="<?php echo $this->_tpl_vars['TEST_EMAIL_ADDRESS']; ?>
">
				</td>
			</tr>
			<tr>
				<td scope="row" colspan="2">

					<input type="button" class="button" value="   Send   " onclick="javascript:sendTestEmail();">&nbsp;
					<input type="button" class="button" value="   Cancel   " onclick="javascript:EmailMan.testOutboundDialog.hide();">&nbsp;
				</td>
			</tr>

		</table>
	</div>
</div>

<script type="text/javascript" language="Javascript">

var mail_smtpport = '<?php echo $this->_tpl_vars['MAIL_SMTPPORT']; ?>
';
var mail_smtpssl = '<?php echo $this->_tpl_vars['MAIL_SMTPSSL']; ?>
';
<?php echo '
EmailMan = {};

function Admin_check(){
	if ((\'';  echo $this->_tpl_vars['IS_FOCUS_ADMIN'];  echo '\') && document.getElementById(\'is_admin\').value==\'0\'){
		r=confirm(\'';  echo $this->_tpl_vars['MOD']['LBL_CONFIRM_REGULAR_USER'];  echo '\');
		return r;
		}
	else
		return true;
}

function user_status_display(field){
		switch (field.value){
		case \'Administrator\':
		document.getElementById(\'UserTypeDesc\').innerHTML="';  echo $this->_tpl_vars['MOD']['LBL_ADMIN_DESC'];  echo '";
		document.getElementById(\'is_admin\').value=\'1\';
		break;
		case \'RegularUser\':
			document.getElementById(\'is_admin\').value=\'0\';
			document.getElementById(\'UserTypeDesc\').innerHTML="';  echo $this->_tpl_vars['MOD']['LBL_REGULAR_DESC'];  echo '";
		break;
	}
}

function startOutBoundEmailSettingsTest()
{
    var loader = new YAHOO.util.YUILoader({
    require : ["element","sugarwidgets"],
    loadOptional: true,
    skin: "",
    onSuccess: testOutboundSettings,
    allowRollup: true,
    base: "include/javascript/yui/build/"
    });
    loader.addModule({
        name :"sugarwidgets",
        type : "js",
        fullpath: "include/javascript/sugarwidgets/SugarYUIWidgets.js",
        varName: "YAHOO.SUGAR",
        requires: ["datatable", "dragdrop", "treeview", "tabview"]
    });
    loader.insert();
     
}

function testOutboundSettings() 
{ 
	var errorMessage = \'\';
	var isError = false;
	var fromAddress = document.getElementById("outboundtest_from_address").value;
    var errorMessage = \'\';
    var isError = false;
    var smtpServer = document.getElementById(\'mail_smtpserver\').value;

    var mailsmtpauthreq = document.getElementById(\'mail_smtpauth_req\');
    if(trim(smtpServer) == \'\' || trim(mail_smtpport) == \'\') 
    {
        isError = true;
        errorMessage += "';  echo $this->_tpl_vars['MOD']['LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS'];  echo '" + "<br/>";
        overlay("';  echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS'];  echo '", errorMessage, \'alert\');
        return false;
    }
    
    if(trim(document.getElementById(\'mail_smtpuser\').value) == \'\') 
    {
        isError = true;
        errorMessage += "';  echo $this->_tpl_vars['APP']['LBL_EMAIL_ACCOUNTS_SMTPUSER'];  echo '" + "<br/>";
    }
    if(trim(document.getElementById(\'mail_smtppass\').value) == \'\') 
    {
        isError = true;
        errorMessage += "';  echo $this->_tpl_vars['APP']['LBL_EMAIL_ACCOUNTS_SMTPPASS'];  echo '" + "<br/>";
    }
    if(isError) {
        overlay("';  echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS'];  echo '", errorMessage, \'alert\');
        return false;    
    } 
	
    testOutboundSettingsDialog();
}

function sendTestEmail()
{
    var fromAddress = document.getElementById("outboundtest_from_address").value;
    
    if (trim(fromAddress) == "") 
    {
        overlay("';  echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS'];  echo '", "{'; ?>
$APP.LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR}<?php echo '", \'alert\');
        return;
    }
    else if (!isValidEmail(fromAddress)) {
        overlay("';  echo $this->_tpl_vars['APP']['ERR_INVALID_REQUIRED_FIELDS'];  echo '", "';  echo $this->_tpl_vars['APP']['LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR'];  echo '", \'alert\');
        return;
    }
    
    //Hide the email address window and show a message notifying the user that the test email is being sent.
    EmailMan.testOutboundDialog.hide();
    overlay("';  echo $this->_tpl_vars['APP']['LBL_EMAIL_PERFORMING_TASK'];  echo '", "';  echo $this->_tpl_vars['APP']['LBL_EMAIL_ONE_MOMENT'];  echo '", \'alert\');
    
    var callbackOutboundTest = {
    	success	: function(o) {
    		hideOverlay();
    		overlay("';  echo $this->_tpl_vars['APP']['LBL_EMAIL_TEST_OUTBOUND_SETTINGS'];  echo '", "';  echo $this->_tpl_vars['APP']['LBL_EMAIL_TEST_NOTIFICATION_SENT'];  echo '", \'alert\');
    	}
    };    
    var smtpServer = document.getElementById(\'mail_smtpserver\').value;
	var postDataString = \'mail_sendtype=SMTP&mail_smtpserver=\' + smtpServer + "&mail_smtpport=" + mail_smtpport + "&mail_smtpssl=" + mail_smtpssl + "&mail_smtpauth_req=true&mail_smtpuser=" + trim(document.getElementById(\'mail_smtpuser\').value) + "&mail_smtppass=" + trim(document.getElementById(\'mail_smtppass\').value) + "&outboundtest_from_address=" + fromAddress;
	YAHOO.util.Connect.asyncRequest("POST", "index.php?action=testOutboundEmail&module=EmailMan&to_pdf=true&sugar_body_only=true", callbackOutboundTest, postDataString);
}
function testOutboundSettingsDialog() {
        // lazy load dialogue
        if(!EmailMan.testOutboundDialog) {
        	EmailMan.testOutboundDialog = new YAHOO.widget.Dialog("testOutboundDialog", {
                modal:true,
				visible:true,
            	fixedcenter:true,
            	constraintoviewport: true,
                width	: 600,
                shadow	: false
            });
            EmailMan.testOutboundDialog.setHeader("';  echo $this->_tpl_vars['APP']['LBL_EMAIL_TEST_OUTBOUND_SETTINGS'];  echo '");
            YAHOO.util.Dom.removeClass("testOutboundDialog", "yui-hidden");
        } // end lazy load
        
        EmailMan.testOutboundDialog.render();
        EmailMan.testOutboundDialog.show();
} // fn

function overlay(reqtitle, body, type) {
    var config = { };
    config.type = type;
    config.title = reqtitle;
    config.msg = body;
    YAHOO.SUGAR.MessageBox.show(config);
}

function hideOverlay() {
	YAHOO.SUGAR.MessageBox.hide();
}


'; ?>


</script>
<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>

<?php echo '
<script type="text/javascript" language="Javascript">
'; ?>

<?php echo $this->_tpl_vars['getNameJs']; ?>

<?php echo $this->_tpl_vars['getNumberJs']; ?>

<?php echo $this->_tpl_vars['currencySymbolJs']; ?>

setSymbolValue(document.getElementById('currency_select').selectedIndex);
setSigDigits();

<?php echo $this->_tpl_vars['confirmReassignJs']; ?>

</script>

</form>