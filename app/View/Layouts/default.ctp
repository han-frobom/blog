<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
//$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>

  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $cakeDescription ?>:
    <?php echo $this->fetch('title'); ?>
  </title>
  <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('cake.generic');
    echo $this->Html->css('bootstrap.min');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
  ?>
 <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color:#222222;
      padding: 25px;
      color:#fff;
    }
    .jumbotron{
      background-image:url('../img/posts/abc.png');
      background-position:0 60%;
    }
    .container-header{
      background-color:#22317B;
    }

}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Blog Post</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <?php echo '<li>'.$this->Html->link('Add Post', array('action' => 'add')).'</li>'; ?>
      <?php echo '<li>'.$this->Html->link('Manage',array('controller'=>'posts','action'=>'manage')).'</li>';?>
      <?php echo '<li>'.$this->Html->link('View',array('controller'=>'posts','action'=>'index')).'</li>';?>
      <?php echo '<li>'.$this->Html->link('logout',array('controller'=>'users','action'=>'logout')).'</li>';?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>My Blog Post</h1>      
    <p>This is My News Blog post to keep in touch with World</p>

    <!--  <?php echo $this->Html->link($this->Html->image('./posts/abc.png',
  array('width' => '200', 'height' => '45')) ,
                   '#today',array('escape' => false));?> -->
  </div>
</div>
<div class="container-fluid bg-3"> 
   
  <?php echo $this->Flash->render(); ?>

  <?php echo $this->fetch('content'); ?>
</div>
<footer class="container-fluid text-center">
  <p>Copy Right &copy; Ei Ei Han</p>
</footer>

</body>
</html>
