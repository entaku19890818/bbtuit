<div class="appointments form">
<?php echo $this->Form->create('Appointment'); ?>
	<fieldset>
		<legend><?php echo __('Add Appointment'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('order_id');
		echo $this->Form->input('date');
		echo $this->Form->input('start');
		echo $this->Form->input('stop');
		echo $this->Form->input('court_id');
		echo $this->Form->input('court');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?></li>
	</ul>
</div>
