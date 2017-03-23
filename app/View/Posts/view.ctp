<html>
   <head><title>View</title></head>
   <body>
  <div class="col-sm-6 text-justify">
        <b style="color: yellow;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
        <?php echo ($post['Post']['title']); ?></b>
         <p style="text-shadow: 2px 2px 5px red;"><?php echo ($post['Post']['article']); ?></p>
          <p style="text-shadow:2px 2px 5px violet; ">
          <small> <?php echo ($post['Post']['created']); ?></small></p>
           <p ><?php echo $this->Html->image('./posts/'. $post['Post']['imagePath'], array('alt' => 'Image', 'style' => 'width:250px;height:315px;','class'=>'img-rounded'))?></p>
  </div>
      <?php foreach ($post['Comment'] as $comment): ?>
        <div class="comment" style="margin-left:50px;margin:28px;">
           <?php echo ($comment['name'])?> :
            <?php echo ($comment['body'])?>
            <?php echo $this->Form->postLink('Delete',array('controller'=>'Comments','action' => 'delete',$comment['id'] ),array('confirm' => 'Are you sure?'));?>
            <?php echo'   ' ?>
       </div>
      <?php endforeach; ?>

<?php
    echo $this->Form->create('Comment',array('url'=>array('controller'=>'Posts','action'=>'view',$post['Post']['id'])));
    echo $this->Form->input('Comment.body',array('style'=>'width:400px; height:50px;','class'=>'form-control'));?>
<?php echo $this->Form->end('Submit',array('class'=>'btn btn-primary'));?>


</body>
</html>