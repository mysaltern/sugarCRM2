<?php /* Smarty version 2.6.11, created on 2021-01-18 07:41:33
         compiled from modules/Activities/tpls/report.tpl */ ?>

<div class="table-wrapper">



	<table id="customers">
		<tr>
			<th>Name Record</th>
			<th>name/lastName</th>
			<th>creator</th>
			<th>status</th>
			<th>description</th>
		</tr>


		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['related']):
?>



			<tr>
				<td><?php echo $this->_tpl_vars['related']['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['related']['first_name']; ?>
 <?php echo $this->_tpl_vars['related']['last_name']; ?>
  </td>

								<td><?php echo $this->_tpl_vars['related']['creator']; ?>
</td>
				<td><?php echo $this->_tpl_vars['related']['status']; ?>
</td>	
				<td><?php echo $this->_tpl_vars['related']['description']; ?>
</td>
			 
				

			</tr>


		<?php endforeach; endif; unset($_from); ?>


	</table>



</div>