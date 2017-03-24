 <div class="users form">
 	<?php echo $this->Form->create('User'); ?>
 	<h1><?php echo('You are new member,please register here'); ?></h1>
 	<?php echo $this->Form->input('username',array('label'=>'Enter your Username','class'=>'form-control','style'=>'width:200px;height:30px;'));
 	echo $this->Form->input('email',array('label'=>'Enter your Email','class'=>'form-control','style'=>'width:200px;height:30px;'));
 	echo $this->Form->input('password',array('label'=>'Enter your Password','class'=>'form-control','style'=>'width:200px;height:30px;'));
 	echo $this->Form->input('role', array('class'=>'form-control','style'=>'width:200px;height:30px;','options' => array('admin' => 'Admin', 'author' => 'Author')));?>
 	<?php echo $this->Form->end('Create Account'); ?>
 </div>

