<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Curso CakePHP Assando-sites
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Aula CakePHP Assando-Sites</h1>
			<?php echo $this->Html->link('CakePHP', '/'); ?> -
			<?php echo $this->Html->link('Sobre o Evento', '/sobre-o-evento'); ?> -
			<?php echo $this->Html->link('Como Chegar', '/como-chegar'); ?>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			Turma 2014.1
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
