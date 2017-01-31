<html><head>
<title>Blog</title>
<body><bold>
<h1>Welcome to my Blog</h1></bold>


<table>
<tr>
<th>Id</th>
<th>Title</th>

<th>Article</th>
<th>Modified_Date</th>
<th>Created_Date</th>
<th></th>
<th></th>

</tr>
<!-- Here's where we loop through our $posts array, printing out post info -->
<?php foreach ($posts as $post): ?>
<tr>
<td><?php echo $post['Post']['id']; ?></td>

<td>
<?php
echo $this->Html->link(
$post['Post']['title'],
array('action' => 'view', $post['Post']['id'])
);
?>
</td>


<td><?php
echo $this->Html->link(
$post['Post']['article'],
array('action' => 'view', $post['Post']['id'])
);
?></td>
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
<?php endforeach; ?>
</table>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>

<?php echo $this->Html->link('View',array('controller'=>'posts','action'=>'manage'));?>

 <p><?php echo $this->Html->link('logout',array('controller'=>'users','action'=>'logout'));?></p>
    </body>
</html>