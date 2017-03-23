


    <?php foreach($posts as $post):?>
    <div class="col-sm-4 text-center">
          <!-- previous image width:346px;height: 199px; -->
            <?php echo $this->Html->image('./posts/'.$post['Post']['imagePath'], array('alt' => 'Image', 'style' => 'width:202px;height: 199px;','class'=>'img-circle'))?>
            <p><strong><?php echo $this->Html->link($post['Post']['title'],array('action' => 'view', $post['Post']['id']));?></strong></p>
            <p>Created :<?php echo $this->Time->niceShort($post['Post']['created']);?></p>

    </div>
<?php endforeach; ?>
<div>
<p><?php echo $this->Html->link("Back", array('action' => 'index')); ?></p>
<ul class="pager">
   <?php echo '<li class="previous">'.$this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled')).'<li>';?>
<?php echo '<li>'.$this->Paginator->numbers().'</li>';?>

<?php echo '<li class="next">'.$this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')).'<li>';?>
  </ul></div>
