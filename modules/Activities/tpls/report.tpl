{*

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



*}

{*<style>
#customers {
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

#customers td, #customers th {
border: 1px solid #ddd;
padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #4CAF50;
color: white;
}
</style>*}
<div class="table-wrapper">



	<table id="customers">
		<tr>
			<th>Name Record</th>
			<th>name/lastName</th>
			<th>creator</th>
			<th>status</th>
			<th>description</th>
		</tr>


		{foreach from=$data item=related}



			<tr>
				<td>{$related.name}</td>
				<td>{$related.first_name} {$related.last_name}  </td>

				{if $related.meetings_status}

					<td>{$related.meetings_creator}</td>
					<td>{$related.meetings_status}</td>
					<td>{$related.meetings_description}</td>
				{elseif  $related.tasks_status}
					<td>{$related.tasks_creator}</td>
					<td>{$related.tasks_status}</td>
					<td> </td>
				{elseif  $related.notes_description}
					<td>{$related.notes_creator}</td>
					<td>{$related.notes_description}</td>
					<td> </td>
				{else}
					<td>{$related.calls_creator}</td>
					<td>{$related.calls_status}</td>
					<td> </td>
				{/if}


			</tr>


		{/foreach}


	</table>



</div>