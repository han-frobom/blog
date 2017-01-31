<html><head>
<title>Blog</title>
<body>
<h1>See all comments</h1>

<table>
<tr>
<th>Id</th>
<th>Title</th>

<th>Comment</th>


</tr>
<!-- Here's where we loop through our $posts array, printing out post info -->
<?php foreach ($posts as $post): ?>
<tr>

<td><?php echo $post['Post']['id']; ?></td>

<td>
<?php
echo $this->Html->link(
$post['Post']['title'],
array('action' => 'view', $post['Post']['title'])
);
?>
</td>


<td><?php
echo $this->Html->link(
$post['Post']['comment'],
array('action' => 'view', $post['Post']['id'])
);
?></td>

</tr>
<?php endforeach; ?>
</table>

<?php
echo $this->Form->button('Logout', array(
    'type' => 'button',
    'onclick' => 'location.href=\'http://192.168.33.40/users/login\';',
    ));
?>
    </body>
</html>