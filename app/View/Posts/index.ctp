
<h3>My Work Post</h3><br>
  <div class="row">
    <?php foreach ($posts as $post) :?>
    <div class="col-sm-4">
      <p><?php echo $this->Html->link($post['Post']['title'],array('action' => 'view', $post['Post']['id']));?></p>
      <p><?php echo $this->Html->image('./posts/'. $post['Post']['imagePath'],array('action'=>'view',$post['Post']['id'],'alt'=>'Image','style'=>'width:350px;height:400px;')); ?></p>
     </div>
    <?php endforeach; ?>
  </div>

 <ul class="pager">
   <?php echo '<li class="previous">'.$this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled')).'<li>';?>
<?php echo '<li>'.$this->Paginator->numbers().'</li>';?>

<?php echo '<li class="next">'.$this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')).'<li>';?>
  </ul>
  