<html>
<head><style>
table {
    border: 1px solid black;
}
td div{
  border-radius:50%;
}
.button {
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button:hover {
    background-color: #4CAF50; /* Green */
    color: white;
}
</style>

</head>
<table>
   <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Image</th>
      <th>Action</th>

  </tr>
<?php foreach ($posts as $post): ?>
<tr>
<td>
<?php echo $post['Post']['id'];?>
</td>
<td><?php echo  $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));?>

      </td>

      <td><div><?php echo $this->Html->image('./posts/'.$post['Post']['imagePath'], array('alt' => 'Image', 'style' => 'width:300px;'))?></td></div>

      <td>
     <?php
      echo $this->Html->link(
      'Edit',
      array('action' => 'edit', $post['Post']['id']));
      ?>
      <?php
      echo $this->Form->postLink(
      'Delete',
      array('action' => 'delete', $post['Post']['id']),
      array('confirm' => 'Are you sure?')
      );
      ?>
      </td>

  </tr>

          <?php endforeach;?>

          <?php unset($post);?>

</table>      
<p><?php echo $this->Html->link("Back", array('action' => 'index')); ?></p>

</html>