<table id="customers">
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Article</th>
    <th >Modified_Date</th>
	<th>Created_Date</th>
	<th></th>
	<th></th>
  </tr>
  <?php foreach ($posts as $post): ?>
  <tr>
<?php if(AuthComponent::user('role')=='admin'):?>
<td><?php echo $post['Post']['id']; ?></td> 

<td>
<?php
echo $this->Html->link(
$post['Post']['title'],
array('action' => 'view', $post['Post']['id'])
);
?>
</td>

<td>
<?php
echo $this->Html->link(
$post['Post']['article'],
array('action' => 'view', $post['Post']['id'])
);
?>
</td>

<td>
<?php echo $post['Post']['modified']; ?>
</td>
<td>
<?php echo $post['Post']['created']; ?>
</td>

<td>
<?php
echo $this->Form->postLink(
'Delete',
array('action' => 'delete', $post['Post']['id']),
array('confirm' => 'Are you sure?')
);
?>
</td>
<td>
<?php
echo $this->Html->link(
'Edit', array('action' => 'edit', $post['Post']['id'])
);
?>

</td>

</tr>
<?php endif; ?>


<?php if(AuthComponent::user('role')=='author'):?>

<td><?php echo $post['Post']['id']; ?></td> 

<td>
<?php
echo $this->Html->link(
$post['Post']['title'],
array('action' => 'view', $post['Post']['id'])
);
?>
</td>

<td>
<?php
echo $this->Html->link(
$post['Post']['article'],
array('action' => 'view', $post['Post']['id'])
);
?>
</td>

<td>
<?php echo $post['Post']['modified']; ?>
</td>
<td>
<?php echo $post['Post']['created']; ?>
</td>


</tr>
	<?php endif; ?>
<?php endforeach; ?>
</table>
<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers();?>
<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
<!-- <div>
<tr>
<td><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></td>

<td><?php echo $this->Html->link('View',array('controller'=>'posts','action'=>'manage'));?></td>

 <td><?php echo $this->Html->link('logout',array('controller'=>'users','action'=>'logout'));?></td></tr></div> -->
    </body>
</html>