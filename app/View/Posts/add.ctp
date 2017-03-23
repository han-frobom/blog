 
<h1>Add Post</h1>
<div class="col-sm-12">
<?php
echo $this->Form->create('Post',array('enctype'=>'multipart/form-data'));?>
<?php echo $this->Form->input('title',array('class'=>'form-control','style'=>'width:200px;height:30px;'));?>
<?php echo $this->Form->input('article', array('rows' => '3','class'=>'form-control','style'=>'width:200px;height:30px;'));?>
<?php echo $this->Form->input('image',array('type'=>'file'));?>
<?php echo $this->Form->end('Save Post');?> 
</table>
</div>



    