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
/* * *******************************************************************************

 * Description:
 * ****************************************************************************** */

// Factor is used to store customer information.
class Factor extends SugarBean {

	var $field_name_map;
	// Stored fields
	var $id;
	var $lead_source;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $assigned_user_id;
	var $created_by;
	var $created_by_name;
	var $modified_by_name;
	var $description;
	var $name;
	var $factor_type;
	var $amount;
	var $amount_usdollar;
	var $currency_id;
	var $date_closed;
	var $next_step;
	var $sales_stage;
	var $probability;
		var $case_id;
	var $campaign_id;
	// These are related
	var $account_name;
	var $account_id;
	var $contact_id;
	var $task_id;
	var $note_id;
	var $meeting_id;
	var $call_id;
	var $email_id;
	var $assigned_user_name;
	var $table_name = "factors";
	var $rel_account_table = "accounts_factors";
	var $rel_contact_table = "factors_contacts";
		var $rel_case_table = "factors_cases";
	var $module_dir = "Factors";
	var $importable = true;
	var $object_name = "Factor";
	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array('assigned_user_name','case_id', 'assigned_user_id', 'account_name', 'account_id', 'contact_id'
	);
	var $relationship_fields = Array('case_id'=>'cases', 'account_id' => 'accounts',
		'project_id' => 'project',
	);

	function Factor() {
		parent::SugarBean();
		global $sugar_config;
		if (!$sugar_config['require_accounts']) {
			unset($this->required_fields['account_name']);
		}
	}

	var $new_schema = true;

	function get_summary_text() {
		return "$this->name";
	}

	function create_list_query($order_by, $where, $show_deleted = 0) {

		$custom_join = $this->custom_fields->getJOIN();
		$query = "SELECT ";

		$query .= "
                            accounts.id as account_id,
                            accounts.name as account_name,
                            accounts.assigned_user_id account_id_owner,
                            users.user_name as assigned_user_name ";
		if ($custom_join) {
			$query .= $custom_join['select'];
		}
		$query .= " ,factors.*
                            FROM factors ";


		$query .= "LEFT JOIN users
                            ON factors.assigned_user_id=users.id ";
		$query .= "LEFT JOIN $this->rel_account_table
                            ON factors.id=$this->rel_account_table.factor_id
                            LEFT JOIN accounts
                            ON $this->rel_account_table.account_id=accounts.id ";
		if ($custom_join) {
			$query .= $custom_join['join'];
		}
		$where_auto = '1=1';
		if ($show_deleted == 0) {
			$where_auto = "
			($this->rel_account_table.deleted is null OR $this->rel_account_table.deleted=0)
			AND (accounts.deleted is null OR accounts.deleted=0)  
			AND factors.deleted=0";
		} else if ($show_deleted == 1) {
			$where_auto = " factors.deleted=1";
		}

		if ($where != "")
			$query .= "where ($where) AND " . $where_auto;
		else
			$query .= "where " . $where_auto;

		if ($order_by != "")
			$query .= " ORDER BY $order_by";
		else
			$query .= " ORDER BY factors.name";

		return $query;
	}

	function create_export_query(&$order_by, &$where, $relate_link_join = '') {
		$custom_join = $this->custom_fields->getJOIN(true, true, $where);
		if ($custom_join)
			$custom_join['join'] .= $relate_link_join;
		$query = "SELECT
                                factors.*,
                                accounts.name as account_name,
                                users.user_name as assigned_user_name ";
		if ($custom_join) {
			$query .= $custom_join['select'];
		}
		$query .= " FROM factors ";
		$query .= "LEFT JOIN users
                                ON factors.assigned_user_id=users.id";
		$query .= " LEFT JOIN $this->rel_account_table
                                ON factors.id=$this->rel_account_table.factor_id
                                LEFT JOIN accounts
                                ON $this->rel_account_table.account_id=accounts.id ";
		if ($custom_join) {
			$query .= $custom_join['join'];
		}
		$where_auto = "
			($this->rel_account_table.deleted is null OR $this->rel_account_table.deleted=0)
			AND (accounts.deleted is null OR accounts.deleted=0)  
			AND factors.deleted=0";

		if ($where != "")
			$query .= "where $where AND " . $where_auto;
		else
			$query .= "where " . $where_auto;

		if ($order_by != "")
			$query .= " ORDER BY factors.$order_by";
		else
			$query .= " ORDER BY factors.name";
		return $query;
	}

	function fill_in_additional_list_fields() {
		if ($this->force_load_details == true) {
			$this->fill_in_additional_detail_fields();
		}
	}

	function fill_in_additional_detail_fields() {
		parent::fill_in_additional_detail_fields();

		$currency = new Currency();
		$currency->retrieve($this->currency_id);
		if ($currency->id != $this->currency_id || $currency->deleted == 1) {
			$this->amount = $this->amount_usdollar;
			$this->currency_id = $currency->id;
		}
		//get campaign name

		$camp = new Campaign();
		$camp->retrieve($this->campaign_id);
		$this->campaign_name = $camp->name;

		$this->account_name = '';
		$this->account_id = '';
		$ret_values = Factor::get_account_detail($this->id);
		if (!empty($ret_values)) {
			$this->account_name = $ret_values['name'];
			$this->account_id = $ret_values['id'];
			$this->account_id_owner = $ret_values['assigned_user_id'];
		}
	}

	/** Returns a list of the associated contacts
	 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc..
	 * All Rights Reserved..
	 * Contributor(s): ______________________________________..
	 */
	function get_list_view_data() {
		global $locale, $current_language, $current_user, $mod_strings, $app_list_strings, $sugar_config;
		$app_strings = return_application_language($current_language);
		$params = array();

		$temp_array = $this->get_list_view_array();
		$temp_array['SALES_STAGE'] = empty($temp_array['SALES_STAGE']) ? '' : $temp_array['SALES_STAGE'];
		$params = array('currency_id' => $this->currency_id, 'convert' => true);
		$temp_array['AMOUNT'] = currency_format_number($this->amount_usdollar, $params);
		$temp_array["ENCODED_NAME"] = $this->name;
		return $temp_array;
	}

	/**
	  builds a generic search based on the query string using or
	  do not include any $this-> because this is called on without having the class instantiated
	 */
	function build_generic_where_clause($the_query_string) {
		$where_clauses = Array();
		$the_query_string = $GLOBALS['db']->quote($the_query_string);
		array_push($where_clauses, "factors.name like '$the_query_string%'");
		array_push($where_clauses, "accounts.name like '$the_query_string%'");

		$the_where = "";
		foreach ($where_clauses as $clause) {
			if ($the_where != "")
				$the_where .= " or ";
			$the_where .= $clause;
		}


		return $the_where;
	}

	function save($check_notify = FALSE) {
		// Bug 32581 - Make sure the currency_id is set to something
		global $current_user;

		if (empty($this->currency_id))
			$this->currency_id = $current_user->getPreference('currency');
		if (empty($this->currency_id))
			$this->currency_id = -99;

		require_once('modules/Factors/SaveOverload.php');

		perform_save($this);
		return parent::save($check_notify);
	}

	function save_relationship_changes($is_update) {
		//if account_id was replaced unlink the previous account_id.
		//this rel_fields_before_value is populated by sugarbean during the retrieve call.
		if (!empty($this->account_id) and ! empty($this->rel_fields_before_value['account_id']) and ( trim($this->account_id) != trim($this->rel_fields_before_value['account_id']))) {
			//unlink the old record.
			$this->load_relationship('accounts');
			$this->accounts->delete($this->id, $this->rel_fields_before_value['account_id']);
		}

		parent::save_relationship_changes($is_update);

		if (!empty($this->contact_id)) {
			$this->set_factor_contact_relationship($this->contact_id);
		}
	}

	function set_factor_contact_relationship($contact_id) {
		global $app_list_strings;
		$default = $app_list_strings['factor_relationship_type_default_key'];
		$this->load_relationship('contacts');
		$this->contacts->add($contact_id, array('contact_role' => $default));
	}

	function set_notification_body($xtpl, $oppty) {
		global $app_list_strings;

		$xtpl->assign("FACTOR_NAME", $oppty->name);
		$xtpl->assign("FACTOR_AMOUNT", $oppty->amount);
		$xtpl->assign("FACTOR_CLOSEDATE", $oppty->date_closed);
		$xtpl->assign("FACTOR_STAGE", (isset($oppty->sales_stage) ? $app_list_strings['sales_stage_dom'][$oppty->sales_stage] : ""));
		$xtpl->assign("FACTOR_DESCRIPTION", $oppty->description);

		return $xtpl;
	}

	function bean_implements($interface) {
		switch ($interface) {
			case 'ACL':return true;
		}
		return false;
	}

	function listviewACLHelper() {
		$array_assign = parent::listviewACLHelper();
		$is_owner = false;
		if (!empty($this->account_id)) {

			if (!empty($this->account_id_owner)) {
				global $current_user;
				$is_owner = $current_user->id == $this->account_id_owner;
			}
		}
		if (!ACLController::moduleSupportsACL('Accounts') || ACLController::checkAccess('Accounts', 'view', $is_owner)) {
			$array_assign['ACCOUNT'] = 'a';
		} else {
			$array_assign['ACCOUNT'] = 'span';
		}

		return $array_assign;
	}

	/**
	 * Static helper function for getting releated account info.
	 */
	function get_account_detail($opp_id) {
		$ret_array = array();
		$db = DBManagerFactory::getInstance();
		$query = "SELECT acc.id, acc.name, acc.assigned_user_id "
				. "FROM accounts acc, accounts_factors a_o "
				. "WHERE acc.id=a_o.account_id"
				. " AND a_o.factor_id='$opp_id'"
				. " AND a_o.deleted=0"
				. " AND acc.deleted=0";
		$result = $db->query($query, true, "Error filling in factor account details: ");
		$row = $db->fetchByAssoc($result);
		if ($row != null) {
			$ret_array['name'] = $row['name'];
			$ret_array['id'] = $row['id'];
			$ret_array['assigned_user_id'] = $row['assigned_user_id'];
		}
		return $ret_array;
	}

}

?>