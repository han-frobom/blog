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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
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
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
            echo $this->Html->css('bootstrap.min.css');
            echo $this->Html->css('style');
            echo $this->Html->script('myscript');
        ?>

    </head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="nav navbar-nav navbar-left">
      <a class="navbar-brand" href="#myPage">Blog Post</a>
      <?php echo '<li>'.$this->Html->link('Home', array('controller'=>'posts','action'=>'index')).'</li>';?><?php if(AuthComponent::user('role')=='admin'): ?>{
       <?php echo '<li>'.$this->Html->link('User List', array('controller'=>'users','action'=>'index')).'<li>';?>} <?php endif; ?>
       <?php echo '<li>'.$this->Html->link('Manage', array('controller'=>'posts','action'=>'manage')).'</li>';?>
        <?php echo '<li>'.$this->Html->link('Add Post', array('controller'=>'posts','action'=>'add')).'</li>';?>
       <?php echo '<li>'.$this->Html->link('Logout', array('controller'=>'users','action'=>'logout')).'</li>';?>
       </ul>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><?php echo '<li>'.$this->Html->link('SingUp', array('controller'=>'users','action'=>'add')).'</li>';?>
        <li><?php echo '<li>'.$this->Html->link('Login', array('controller'=>'users','action'=>'login')).'</li>';?>
      </ul>
    </div>
  </div>
</nav>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid  bg-grey">

       <?php echo $this->Flash->render(); ?>
       <?php echo $this->fetch('content'); ?>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Design  By <em><a href="https://www.w3schools.com" title="Visit w3schools" style="color:#502E16;">www.eieihan.com</a></em></p>

</footer>
</body>
</html>