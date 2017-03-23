<html>
<head><title>Edit</title></head>
<body>
    <h1>Edit Post</h1>
    <div class="col-sm-12">
<?php
echo $this->Form->create('Post',array('enctype'=>'multipart/form-data'));
echo $this->Form->input('title');
echo $this->Form->input('article', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('image',array('type'=>'file'));
echo $this->Form->end('Save Post');
?>
</div>
</body>
</html>