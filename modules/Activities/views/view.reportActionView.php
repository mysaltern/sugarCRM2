<?php

if (!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');

/* * *******************************************************************************
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
 * ****************************************************************************** */

require_once('include/MVC/View/views/view.detail.php');

class ViewHelloActionView extends ViewDetail {

	function ViewHelloActionView() {
		parent::ViewDetail();
	}

	/**
	 * display
	 * Override the display method to support customization for the buttons that display
	 * a popup and allow you to copy the account's address into the selected contacts.
	 * The custom_code_billing and custom_code_shipping Smarty variables are found in
	 * include/SugarFields/Fields/Address/DetailView.tpl (default).  If it's a English U.S.
	 * locale then it'll use file include/SugarFields/Fields/Address/en_us.DetailView.tpl.
	 */
	function display() {
		global $mod_strings, $app_list_strings, $app_strings, $current_user;
		if (!is_admin($current_user)) {
			sugar_die('Admin Only');
		}

	 
 
		$this->ss->assign("STATUS_OPTIONS", get_select_options_with_id($app_list_strings['task_status_dom'], $app_list_strings['task_status_default']));

		$typeRecord = ['calls'=>'calls','meetings'=>'meetings'];
		
		$this->ss->assign("TYPERECORD", $typeRecord);
		$this->ss->assign("MOD", $mod_strings);
		$this->ss->assign("APP", $app_strings);
		$this->ss->display('modules/Activities/tpls/hello.tpl');
	}

}
