<?php

require_once __DIR__ . '/lib/Medoo.php';

use Medoo\Medoo;

$basedados = new Medoo([
	'type' => 'mariadb',
	'host' => 'localhost',
	'database' => 'estevestattoo',
	'username' => 'root',
	'password' => '',
]);