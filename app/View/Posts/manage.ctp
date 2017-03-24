	 <?php foreach($posts as $post):?>
	 	<div class="col-sm-4 text-center">
	 		<div class="thumbnail">
	 			<!-- previous width and height:'width:346px;height: 199px;' -->
	 			<?php echo $this->Html->image('./posts/'.$post['Post']['imagePath'], array('alt' => 'Image', 'style' => 'width:233px;height: 244px;','url'=>array('action' => 'view', $post['Post']['id'])))?>
	 			<p><strong><?php echo $this->Html->link($post['Post']['title'],array('action' => 'view', $post['Post']['id']));?></strong></p>
	 			<p>Created :<?php echo $this->Time->niceShort($post['Post']['created']);?></p>
	 			<?php echo $this->Html->link('Edit',array('action' => 'edit', $post['Post']['id']),array('class'=>'btn btn-success','type'=>'button'));?>
	 			<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $post['Post']['id']),array('class'=>'btn btn-danger','type'=>'button'),array('confirm' => 'Are you sure?'));?>
	 		</div>
	 	</div>
	 <?php endforeach; ?>
	 <div class="col-sm-12">
	 	<ul class="pager">
	 		<?php echo '<li class="previous">'.$this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled')).'<li>';?>
	 		<?php echo '<li>'.$this->Paginator->numbers().'</li>';?>

	 		<?php echo '<li class="next">'.$this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')).'<li>';?>
	 	</ul></div>

