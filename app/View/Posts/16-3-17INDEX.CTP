 <!-- First Photo Grid-->
  <div class="w3-row-padding">
  <?php foreach ($posts as $post):?> 
    <div class="w3-third w3-container w3-margin-bottom">
      
      <?php echo $this->Html->image('./posts/'.$post['Post']['imagePath'], array('alt' => 'Image', 'style' => 'width:285.5px;height:350px;'),array('class'=>'w3-hover-opacity'))?>
      <div class="w3-container w3-white">
        <p><b><?php echo $this->Html->link($post['Post']['title'],array('action' => 'view', $post['Post']['id']));?></b></p>
        <p><?php echo $this->Html->link($post['Post']['article'],array('action' => 'view', $post['Post']['id']));?></p>
      </div>
    </div>
  <?php endforeach;?>
 </div>
  <ul class="pager">
   <?php echo '<li class="previous">'.$this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled')).'<li>';?>
<?php echo '<li>'.$this->Paginator->numbers().'</li>';?>

<?php echo '<li class="next">'.$this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')).'<li>';?>
  </ul>