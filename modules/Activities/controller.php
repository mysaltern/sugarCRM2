<?php

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

require_once('include/MVC/Controller/SugarController.php');

class ActivitiesController extends SugarController {

	function ActivitiesController() {
		parent::SugarController();
	}

	function action_hello() {

		$this->view = 'helloActionView';
	}

	function action_proccess() {


		//	require_once('include/MVC/View/SugarView.php');
		$view = new SugarView();

		$view->displayHeader();

		$db = DBManagerFactory::getInstance();

		$post = $_POST;

		$fromArr = $post['typeRecord'];
		$from = mysql_real_escape_string(implode(",", $fromArr));
		$subjoin = '';
		$select = '';
		$orderQuery = '';
		$where = '';

		$x = 0;
		foreach ($fromArr as $record) {
			$x++;
			$feild = 'status';
			$creator = 'creator';
			$description = 'description ';

			if ($record !== 'notes') {
				$select .= "$record.status as  $feild ,";
			}
			$select .= "  $record.created_by as  $creator , $record.description as $description";
			if (count($fromArr) != $x) {
				$select .= ",";
			}

			$subjoin = " INNER JOIN  users ON $record.created_by = users.id ";
		}

		if (isset($post['sort'])) {
			$sort = $post['sort'];
			if ($sort == 1) {
				$orderQuery = " ORDER BY $record.id DESC";
			} else {
				$orderQuery = " ORDER BY $record.id ASC";
			}
		}
		if (isset($post['sortSecond'])) {
			$sortSecond = $post['sortSecond'];
			if ($sortSecond == 'user') {
				$orderQuery .= " ,users.id";
			} else {
				if ($record != 'notes' and $sortSecond != 'status') {
					$orderQuery .= " ,$record.$sortSecond";
				}
			}
		}
		if (isset($post['creator'])) {

			$creator = $post['creator'];


			if ("$creator" != "false") {

				$where = " where $record.created_by = '$creator' ";
			}
		}


		if (strlen($where) > 1) {
			$and = "and";
		} else {
			$and = 'where';
		}

		if (strlen($post['startTime']) > 0) {
			$startTime = $post['startTime'];

			$where .= "$and   $record.date_start  >'$startTime' ";
		}
		if (strlen($where) > 1) {
			$and = "and";
		} else {
			$and = 'where';
		}
		if (strlen($post['endTime']) > 0) {
			$endTime = $post['endTime'];

			$where .= "$and   $record.date_end  <'$endTime' ";
		}

		$query = "SELECT * ,$select FROM $from  " . $subjoin . $where . $orderQuery;


		$result = $db->query($query, true);
		$data = array();
		while (($row = $db->fetchByAssoc($result)) != null) {
			if (!isset($rows[$row['id']])) {
				$data[] = $row;
			}
		}


		$sugar_smarty = new Sugar_Smarty();
		$sugar_smarty->assign('data', $data);
		$sugar_smarty->display('modules/Activities/tpls/report.tpl');
	}

	/**
	 * Go to the font manager view
	 */
	function action_FontManager() {

		$this->view = 'fontmanager';
	}

	/**
	 * Delete a font and go back to the font manager
	 */
	function action_deleteFont() {
		global $current_user;
		if (!is_admin($current_user)) {
			sugar_die('Admin Only');
		}
		$urlSTR = 'index.php?module=Configurator&action=FontManager';
		if (!empty($_REQUEST['filename'])) {
			require_once('include/Sugarpdf/FontManager.php');
			$fontManager = new FontManager();
			$fontManager->filename = $_REQUEST['filename'];
			if (!$fontManager->deleteFont()) {
				$urlSTR .= '&error=' . urlencode(implode("<br>", $fontManager->errors));
			}
		}
		header("Location: $urlSTR");
	}

	/**
	 * Show the addFont view
	 */
	function action_addFontView() {
		$this->view = 'addFontView';
	}

	/**
	 * Add a new font and show the addFontResult view
	 */
	function action_addFont() {
		global $current_user, $mod_strings;
		if (!is_admin($current_user)) {
			sugar_die('Admin Only');
		}
		if (empty($_FILES['pdf_metric_file']['name'])) {
			$this->errors[] = translate("ERR_MISSING_REQUIRED_FIELDS") . " " . translate("LBL_PDF_METRIC_FILE", "Configurator");
			$this->view = 'addFontView';
			return;
		}
		if (empty($_FILES['pdf_font_file']['name'])) {
			$this->errors[] = translate("ERR_MISSING_REQUIRED_FIELDS") . " " . translate("LBL_PDF_FONT_FILE", "Configurator");
			$this->view = 'addFontView';
			return;
		}
		$path_info = pathinfo($_FILES['pdf_font_file']['name']);
		$path_info_metric = pathinfo($_FILES['pdf_metric_file']['name']);
		if (($path_info_metric['extension'] != "afm" && $path_info_metric['extension'] != "ufm") ||
				($path_info['extension'] != "ttf" && $path_info['extension'] != "otf" && $path_info['extension'] != "pfb")) {
			$this->errors[] = translate("JS_ALERT_PDF_WRONG_EXTENSION", "Configurator");
			$this->view = 'addFontView';
			return;
		}

		if ($_REQUEST['pdf_embedded'] == "false") {
			if (empty($_REQUEST['pdf_cidinfo'])) {
				$this->errors[] = translate("ERR_MISSING_CIDINFO", "Configurator");
				$this->view = 'addFontView';
				return;
			}
			$_REQUEST['pdf_embedded'] = false;
		} else {
			$_REQUEST['pdf_embedded'] = true;
			$_REQUEST['pdf_cidinfo'] = "";
		}
		if (empty($_REQUEST['pdf_patch'])) {
			$_REQUEST['pdf_patch'] = "return array();
";
		} else {
			$_REQUEST['pdf_patch'] = "return {$_REQUEST['pdf_patch']};
";
		}
		$this->view = 'addFontResult';
	}

}
