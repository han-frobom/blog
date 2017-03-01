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
	 echo $this->Html->css('cstemp'); 
		echo $this->Html->css('agency');
		echo $this->Html->css('agency');
		echo $this->Html->css('bbootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		
		<div class="header">
	<div class="header-logo"><h1>ET's First Blog Site</h1></div>


	<!-- <div class="header-section">
		<ul>
			<li>Testing1</li>
			<li>Testing2</li>
			<li>Testing3</li>
		</ul>
	</div> -->
	</div>

	<div class="main">
	<ul class="nav">
		<li><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link('View',array('controller'=>'posts','action'=>'manage'));?></li>
		<li><?php echo $this->Html->link('logout',array('controller'=>'users','action'=>'logout'));?></li>
		
		 
	</ul>
	<br>
	
		
	
	</div>
	
		<div id="content"><div class="main">
	
	<br>
	
		
	
	</div>
	

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<!-- <div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div> -->
		<div class="footer">
		<div class="footer-logo">© 2010-2017 www.et.com</div>
	</div>
	</div>
	<!-- <?php echo $this->element('sql_dump'); ?> -->
</body>
</html>
