<div class="users form">
<?php echo $this->Form->create('User'); ?>
   
       <h1><?php echo('You are new member,please register here'); ?></h1>
        <?php 
        echo $this->Form->input('username');
        echo $this->Form->input('email');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
   
<?php echo $this->Form->end(__('Submit')); ?>
</div>