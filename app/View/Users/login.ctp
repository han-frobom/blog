
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
<fieldset>
	<legend>
		<?php echo __('Please enter your username and password'); ?>
	</legend>

	<?php echo $this->Form->input('username',array('class'=>'form-control','style'=>'width:200px;height:30px;'));?>
	<?php echo $this->Form->input('password',array('class'=>'form-control','style'=>'width:200px;height:30px;'));?>

</fieldset>
<?php echo $this->Form->end(__('Login')); ?>
