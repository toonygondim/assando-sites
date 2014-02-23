<?php
	# Home
	Router::connect('/', array(
		'controller' => 'pages', 'action' => 'display', 'home'));
	# Sobre o Evento
	Router::connect('/sobre-o-evento', array(
		'controller' => 'pages', 'action' => 'display', 'about'));
	# Como Chegar
	Router::connect('/como-chegar', array(
		'controller' => 'pages', 'action' => 'display', 'location'));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
