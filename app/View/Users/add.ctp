<div class="users form">
<?php echo $this->Form->create('User'); ?>
   
       <h1><?php echo('You are new member,please register here'); ?></h1>
        <?php 
        echo $this->Form->input('username',array('label'=>'Enter your Username'));
        echo $this->Form->input('email',array('label'=>'Enter your Email'));
        echo $this->Form->input('password',array('label'=>'Enter your Password'));
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
   
<?php echo $this->Form->end(__('Create Account')); ?>
</div>

