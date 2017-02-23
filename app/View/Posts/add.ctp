<h1>Add Post</h1>
<?php echo $this->Html->link('logout',array('controller'=>'users','action'=>'logout'));?>
<?php
echo $this->Form->create('Post',array('enctype'=>'multipart/form-data'));
echo $this->Form->input('title');
echo $this->Form->input('article', array('rows' => '3'));
echo $this->Form->input('image',array('type'=>'file'));

echo $this->Form->end('Save Post');
?>