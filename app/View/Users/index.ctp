
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Email</th>
<th>Role</th>
<th>Modified_Date</th>
<th>Created_Date</th>
<th></th>
<th></th>

</tr>
<!-- Here's where we loop through our $posts array, printing out post info -->
<?php foreach ($users as $user): ?>
<tr>
<td><?php echo ($user['User']['id']); ?></td>

<td><?php echo ($user['User']['username']); ?></td>

<td>
<?php echo ($user['User']['email']); ?>

</td>

<td>
<?php echo ($user['User']['role']); ?>
</td>

<td>
<?php echo $user['User']['created']; ?>
</td>
<td>
<?php echo $user['User']['modified']; ?>
</td>

 <td>
<?php
echo $this->Form->postLink(
'Delete',
array('action' => 'delete', $user['User']['id']),
array('confirm' => 'Are you sure?')
);
?>
</td>
<td>
<?php
echo $this->Html->link(
'Edit', array('action' => 'edit', $user['User']['id'])
);
?>

</td>
</tr>
<?php endforeach; ?>
</table>
<div class="col-sm-12">
<ul class="pager">
   <?php echo '<li class="previous">'.$this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled')).'<li>';?>
<?php echo '<li>'.$this->Paginator->numbers().'</li>';?>

<?php echo '<li class="next">'.$this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')).'<li>';?>
  </ul></div>
