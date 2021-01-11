<?php /* Smarty version 2.6.11, created on 2021-01-11 11:34:47
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

				<?php if ($this->_tpl_vars['related']['meetings_status']): ?>

					<td><?php echo $this->_tpl_vars['related']['meetings_creator']; ?>
</td>
					<td><?php echo $this->_tpl_vars['related']['meetings_status']; ?>
</td>
					<td><?php echo $this->_tpl_vars['related']['meetings_description']; ?>
</td>
				<?php elseif ($this->_tpl_vars['related']['tasks_status']): ?>
					<td><?php echo $this->_tpl_vars['related']['tasks_creator']; ?>
</td>
					<td><?php echo $this->_tpl_vars['related']['tasks_status']; ?>
</td>
					<td> </td>
				<?php elseif ($this->_tpl_vars['related']['notes_description']): ?>
					<td><?php echo $this->_tpl_vars['related']['notes_creator']; ?>
</td>
					<td><?php echo $this->_tpl_vars['related']['notes_description']; ?>
</td>
					<td> </td>
				<?php else: ?>
					<td><?php echo $this->_tpl_vars['related']['calls_creator']; ?>
</td>
					<td><?php echo $this->_tpl_vars['related']['calls_status']; ?>
</td>
					<td> </td>
				<?php endif; ?>


			</tr>


		<?php endforeach; endif; unset($_from); ?>


	</table>



</div>