<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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




require_once('include/Dashlets/DashletGeneric.php');


class MyFactorsDashlet extends DashletGeneric { 
    function MyFactorsDashlet($id, $def = null) {
        global $current_user, $app_strings, $dashletData;
		require('modules/Factors/Dashlets/MyFactorsDashlet/MyFactorsDashlet.data.php');
        
        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_TOP_FACTORS', 'Factors');
         
        $this->searchFields = $dashletData['MyFactorsDashlet']['searchFields'];
        $this->columns = $dashletData['MyFactorsDashlet']['columns'];
        
        $this->seedBean = new Factor();        
    }
    
    //4.5.0g fix for upgrade issue where user_preferences table still refer to column as 'amount'
    function process($lvsParams = array()) {
     	if(!empty($this->displayColumns)) {
     	if(array_search('amount', $this->displayColumns)) {
     		$this->displayColumns[array_search('amount', $this->displayColumns)] = 'amount_usdollar';
     	}
     	}
     	parent::process($lvsParams);
    }    
    
}

?>
