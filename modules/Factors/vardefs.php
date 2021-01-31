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

$dictionary['Factor'] = array('table' => 'factors', 'audited' => true, 'unified_search' => true, 'duplicate_merge' => true,
	'comment' => 'An factor is the target of selling activities',
	'fields' => array(
		'id' => array(
			'name' => 'id',
			'vname' => 'LBL_ID',
			'required' => true,
			'type' => 'id',
			'reportable' => true,
			'comment' => 'Unique identifier'
		),
		'cases' =>
		array(
			'name' => 'cases',
			'type' => 'link',
			'relationship' => 'factors_cases',
			'side' => 'right',
			'source' => 'non-db',
			'vname' => 'LBL_CASES',
		),
		'name' =>
		array(
			'name' => 'name',
			'vname' => 'LBL_FACTOR_NAME',
			'type' => 'name',
			'dbType' => 'varchar',
			'len' => '50',
			'unified_search' => true,
			'comment' => 'Name of the factor',
			'merge_filter' => 'selected',
			'importable' => 'required',
		),
		'factor_type' =>
		array(
			'name' => 'factor_type',
			'vname' => 'LBL_TYPE',
			'type' => 'enum',
			'options' => 'factor_type_dom',
			'len' => '255',
			'audited' => true,
			'comment' => 'Type of factor (ex: Existing, New)',
			'merge_filter' => 'enabled',
		),
		'account_name' =>
		array(
			'name' => 'account_name',
			'rname' => 'name',
			'id_name' => 'account_id',
			'vname' => 'LBL_ACCOUNT_NAME',
			'type' => 'relate',
			'table' => 'accounts',
			'join_name' => 'accounts',
			'isnull' => 'true',
			'module' => 'Accounts',
			'dbType' => 'varchar',
			'link' => 'accounts',
			'len' => '255',
			'source' => 'non-db',
			'unified_search' => true,
			'required' => true,
			'importable' => 'required',
		),
		'account_id' =>
		array(
			'name' => 'account_id',
			'vname' => 'LBL_ACCOUNT_ID',
			'type' => 'id',
			'source' => 'non-db',
			'audited' => true,
		),
		'campaign_id' =>
		array(
			'name' => 'campaign_id',
			'comment' => 'Campaign that generated lead',
			'vname' => 'LBL_CAMPAIGN_ID',
			'rname' => 'id',
			'type' => 'id',
			'dbType' => 'id',
			'table' => 'campaigns',
			'isnull' => 'true',
			'module' => 'Campaigns',
			//'dbType' => 'char',
			'reportable' => false,
			'massupdate' => false,
			'duplicate_merge' => 'disabled',
		),
		'campaign_name' =>
		array(
			'name' => 'campaign_name',
			'rname' => 'name',
			'id_name' => 'campaign_id',
			'vname' => 'LBL_CAMPAIGN',
			'type' => 'relate',
			'link' => 'campaign_factors',
			'isnull' => 'true',
			'table' => 'campaigns',
			'module' => 'Campaigns',
			'source' => 'non-db',
		),
		'campaign_factors' =>
		array(
			'name' => 'campaign_factors',
			'type' => 'link',
			'vname' => 'LBL_CAMPAIGN_FACTOR',
			'relationship' => 'campaign_factors',
			'source' => 'non-db',
		),
		'lead_source' =>
		array(
			'name' => 'lead_source',
			'vname' => 'LBL_LEAD_SOURCE',
			'type' => 'enum',
			'options' => 'lead_source_dom',
			'len' => '50',
			'comment' => 'Source of the factor',
			'merge_filter' => 'enabled',
		),
		'amount' =>
		array(
			'name' => 'amount',
			'vname' => 'LBL_AMOUNT',
			//'function'=>array('vname'=>'getCurrencyType'),
			'type' => 'currency',
//    'disable_num_format' => true,
			'dbType' => 'double',
			'comment' => 'Unconverted amount of the factor',
			'duplicate_merge' => 'disabled',
			'importable' => 'required',
		),
		'amount_usdollar' =>
		array(
			'name' => 'amount_usdollar',
			'vname' => 'LBL_AMOUNT_USDOLLAR',
			'type' => 'currency',
			'group' => 'amount',
			'dbType' => 'double',
			'disable_num_format' => true,
			'audited' => true,
			'comment' => 'Formatted amount of the factor'
		),
		'currency_id' =>
		array(
			'name' => 'currency_id',
			'type' => 'id',
			'group' => 'currency_id',
			'vname' => 'LBL_CURRENCY_ID',
			'function' => array('name' => 'getCurrencyDropDown', 'returns' => 'html'),
			'reportable' => false,
			'comment' => 'Currency used for display purposes'
		),
		'currency_name' =>
		array(
			'name' => 'currency_name',
			'rname' => 'name',
			'id_name' => 'currency_id',
			'vname' => 'LBL_CURRENCY_NAME',
			'type' => 'relate',
			'isnull' => 'true',
			'table' => 'currencies',
			'module' => 'Currencies',
			'source' => 'non-db',
			'function' => array('name' => 'getCurrencyNameDropDown', 'returns' => 'html'),
			'studio' => 'false',
		),
		'currency_symbol' =>
		array(
			'name' => 'currency_symbol',
			'rname' => 'symbol',
			'id_name' => 'currency_id',
			'vname' => 'LBL_CURRENCY_SYMBOL',
			'type' => 'relate',
			'isnull' => 'true',
			'table' => 'currencies',
			'module' => 'Currencies',
			'source' => 'non-db',
			'function' => array('name' => 'getCurrencySymbolDropDown', 'returns' => 'html'),
		),
		'date_closed' =>
		array(
			'name' => 'date_closed',
			'vname' => 'LBL_DATE_CLOSED',
			'type' => 'date',
			'audited' => true,
			'comment' => 'Expected or actual date the oppportunity will close',
			'importable' => 'required',
		),
		'next_step' =>
		array(
			'name' => 'next_step',
			'vname' => 'LBL_NEXT_STEP',
			'type' => 'varchar',
			'len' => '100',
			'comment' => 'The next step in the sales process',
			'merge_filter' => 'enabled',
		),
		'sales_stage' =>
		array(
			'name' => 'sales_stage',
			'vname' => 'LBL_SALES_STAGE',
			'type' => 'enum',
			'options' => 'sales_stage_dom',
			'len' => '25',
			'audited' => true,
			'comment' => 'Indication of progression towards closure',
			'merge_filter' => 'enabled',
			'importable' => 'required',
		),
		'probability' =>
		array(
			'name' => 'probability',
			'vname' => 'LBL_PROBABILITY',
			'type' => 'int',
			'dbType' => 'double',
			'audited' => true,
			'comment' => 'The probability of closure',
			'validation' => array('type' => 'range', 'min' => 0, 'max' => 100),
			'merge_filter' => 'enabled',
		),
		'accounts' =>
		array(
			'name' => 'accounts',
			'type' => 'link',
			'relationship' => 'accounts_factors',
			'source' => 'non-db',
			'link_type' => 'one',
			'module' => 'Accounts',
			'bean_name' => 'Account',
			'vname' => 'LBL_ACCOUNTS',
		),
		'contacts' =>
		array(
			'name' => 'contacts',
			'type' => 'link',
			'relationship' => 'factors_contacts',
			'source' => 'non-db',
			'module' => 'Contacts',
			'bean_name' => 'Contact',
			'rel_fields' => array('contact_role' => array('type' => 'enum', 'options' => 'factor_relationship_type_dom')),
			'vname' => 'LBL_CONTACTS',
		),
		'project' =>
		array(
			'name' => 'project',
			'type' => 'link',
			'relationship' => 'projects_factors',
			'source' => 'non-db',
			'vname' => 'LBL_PROJECTS',
		),
		'campaigns' =>
		array(
			'name' => 'campaigns',
			'type' => 'link',
			'relationship' => 'factors_campaign',
			'module' => 'CampaignLog',
			'bean_name' => 'CampaignLog',
			'source' => 'non-db',
			'vname' => 'LBL_CAMPAIGNS',
		),
		'campaign_link' =>
		array(
			'name' => 'campaign_link',
			'type' => 'link',
			'relationship' => 'factors_campaign',
			'vname' => 'LBL_CAMPAIGNS',
			'link_type' => 'one',
			'module' => 'Campaigns',
			'bean_name' => 'Campaign',
			'source' => 'non-db',
		),
		'currencies' =>
		array(
			'name' => 'currencies',
			'type' => 'link',
			'relationship' => 'factor_currencies',
			'source' => 'non-db',
			'vname' => 'LBL_CURRENCIES',
		),
	),
	'indices' => array(
		array(
			'name' => 'idx_opp_name',
			'type' => 'index',
			'fields' => array('name'),
		),
		array(
			'name' => 'idx_opp_assigned',
			'type' => 'index',
			'fields' => array('assigned_user_id'),
		),
	),
	'relationships' => array(
		'factors_assigned_user' =>
		array('lhs_module' => 'Users', 'lhs_table' => 'users', 'lhs_key' => 'id',
			'rhs_module' => 'Factors', 'rhs_table' => 'factors', 'rhs_key' => 'assigned_user_id',
			'relationship_type' => 'one-to-many')
		, 'factors_modified_user' =>
		array('lhs_module' => 'Users', 'lhs_table' => 'users', 'lhs_key' => 'id',
			'rhs_module' => 'Factors', 'rhs_table' => 'factors', 'rhs_key' => 'modified_user_id',
			'relationship_type' => 'one-to-many')
		, 'factors_created_by' =>
		array('lhs_module' => 'Users', 'lhs_table' => 'users', 'lhs_key' => 'id',
			'rhs_module' => 'Factors', 'rhs_table' => 'factors', 'rhs_key' => 'created_by',
			'relationship_type' => 'one-to-many'),
		'factors_campaign' =>
		array('lhs_module' => 'campaigns', 'lhs_table' => 'campaigns', 'lhs_key' => 'id',
			'rhs_module' => 'Factors', 'rhs_table' => 'factors', 'rhs_key' => 'campaign_id',
			'relationship_type' => 'one-to-many'),
	)
//This enables optimistic locking for Saves From EditView
	, 'optimistic_locking' => true,
);
VardefManager::createVardef('Factors', 'Factor', array('default', 'assignable',
));
?>