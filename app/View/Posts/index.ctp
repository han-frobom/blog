<html><head>
<title>Blog</title>
<body><bold>
<h1 style="font-family: cursive;font-size:25px;color:#3C1007;"><em>Here is all the posts......</em></h1></bold>


<table style="background-color:#4B3D20">
<tr>
<th style="color:#fff">Id</th>
<th style="color:#fff">Title</th>
<th style="color:#fff">Article</th>
<th style="color:#fff">Modified_Date</th>
<th style="color:#fff">Created_Date</th>
<th></th>
<th></th>

</tr>
<!-- Here's where we loop through our $posts array, printing out post info -->
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