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

$dictionary['Case'] = array('table' => 'cases', 'audited' => true, 'unified_search' => true, 'duplicate_merge' => true,
	'comment' => 'Cases are issues or problems that a customer asks a support representative to resolve'
	, 'fields' => array(
		'account_name' =>
		array(
			'name' => 'account_name',
			'rname' => 'name',
			'id_name' => 'account_id',
			'vname' => 'LBL_ACCOUNT_NAME',
			'type' => 'relate',
			'link' => 'accounts',
			'table' => 'accounts',
			'join_name' => 'accounts',
			'isnull' => 'true',
			'module' => 'Accounts',
			'dbType' => 'varchar',
			'len' => 100,
			'source' => 'non-db',
			'unified_search' => true,
			'comment' => 'The name of the account represented by the account_id field',
			'required' => true,
			'importable' => 'required',
		),
		'account_name1' =>
		array(
			'name' => 'account_name1',
			'source' => 'non-db',
			'type' => 'text',
			'len' => 100,
			'importable' => 'false',
		),
		'account_id' =>
		array(
			'name' => 'account_id',
			'type' => 'id',
			'reportable' => false,
			'vname' => 'LBL_ACCOUNT_ID',
			'audited' => true,
			'comment' => 'The account to which the case is associated'
		),
		'status' =>
		array(
			'name' => 'status',
			'vname' => 'LBL_STATUS',
			'type' => 'enum',
			'options' => 'case_status_dom',
			'len' => 25,
			'audited' => true,
			'comment' => 'The status of the case',
		),
		'priority' =>
		array(
			'name' => 'priority',
			'vname' => 'LBL_PRIORITY',
			'type' => 'enum',
			'options' => 'case_priority_dom',
			'len' => 25,
			'audited' => true,
			'comment' => 'The priority of the case',
		),
		'resolution' =>
		array(
			'name' => 'resolution',
			'vname' => 'LBL_RESOLUTION',
			'type' => 'text',
			'comment' => 'The resolution of the case'
		),
		'tasks' =>
		array(
			'name' => 'tasks',
			'type' => 'link',
			'relationship' => 'case_tasks',
			'source' => 'non-db',
			'vname' => 'LBL_TASKS',
		),
		'factors' =>
		array(
			'name' => 'factors',
			'type' => 'link',
			'relationship' => 'cases_factors',
			'module' => 'Factors',
			'bean_name' => 'Factor',
			'source' => 'non-db',
			'vname' => 'LBL_FACTORS',
		),
		'meetings' =>
		array(
			'name' => 'meetings',
			'type' => 'link',
			'relationship' => 'case_meetings',
			'bean_name' => 'Meeting',
			'source' => 'non-db',
			'vname' => 'LBL_MEETINGS',
		),
		'emails' =>
		array(
			'name' => 'emails',
			'type' => 'link',
			'relationship' => 'emails_cases_rel', /* reldef in emails */
			'source' => 'non-db',
			'vname' => 'LBL_EMAILS',
		),
		'calls' =>
		array(
			'name' => 'calls',
			'type' => 'link',
			'relationship' => 'case_calls',
			'source' => 'non-db',
			'vname' => 'LBL_CALLS',
		),
		'bugs' =>
		array(
			'name' => 'bugs',
			'type' => 'link',
			'relationship' => 'cases_bugs',
			'source' => 'non-db',
			'vname' => 'LBL_BUGS',
		),
		'parent_name' =>
		array(
			'name' => 'parent_name',
			'parent_type' => 'record_type_display',
			'type_name' => 'parent_type',
			'id_name' => 'parent_id',
			'vname' => 'LBL_LIST_RELATED_TO',
			'type' => 'parent',
			'group' => 'parent_name',
			'source' => 'non-db',
			'options' => 'parent_type_display',
		),
		'parent_id' =>
		array(
			'name' => 'parent_id',
			'vname' => 'LBL_LIST_RELATED_TO_ID',
			'type' => 'id',
			'group' => 'parent_name',
			'reportable' => false,
			'comment' => 'The ID of the parent Sugar object identified by parent_type'
		),
		'contacts' =>
		array(
			'name' => 'contacts',
			'type' => 'link',
			'relationship' => 'contacts_cases',
			'source' => 'non-db',
			'vname' => 'LBL_CONTACTS',
		),
		'accounts' =>
		array(
			'name' => 'accounts',
			'type' => 'link',
			'relationship' => 'account_cases',
			'link_type' => 'one',
			'side' => 'right',
			'source' => 'non-db',
			'vname' => 'LBL_ACCOUNT',
		),
		'project' =>
		array(
			'name' => 'project',
			'type' => 'link',
			'relationship' => 'projects_cases',
			'source' => 'non-db',
			'vname' => 'LBL_PROJECTS',
		),
	), 'indices' => array(
		array('name' => 'case_number', 'type' => 'index', 'fields' => array('case_number')),
		array('name' => 'idx_case_name', 'type' => 'index', 'fields' => array('name')),
		array('name' => 'idx_account_id', 'type' => 'index', 'fields' => array('account_id')),
		array(
			'name' => 'idx_cases_par_del',
			'type' => 'index',
			'fields' => array('parent_id', 'parent_type', 'deleted')
		),
		array('name' => 'idx_cases_stat_del', 'type' => 'index', 'fields' => array('assigned_user_id', 'status', 'deleted')),
	),
	'relationships' => array(
		'cases_factors' => array(
			'lhs_module' => 'Cases',
			'lhs_table' => 'cases',
			'lhs_key' => 'id',
			'rhs_module' => 'Factors',
			'rhs_table' => 'factors',
			'rhs_key' => 'parent_id',
			'relationship_type' => 'one-to-many',
		),
	),
);


VardefManager::createVardef('Cases', 'Case', array('default', 'assignable',
	'issue',
		), 'case'
);

//jc - adding for refactor for import to not use the required_fields array
//defined in the field_arrays.php file
$dictionary['Case']['fields']['name']['importable'] = 'required';
?>