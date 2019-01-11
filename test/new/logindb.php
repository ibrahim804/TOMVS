<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'tomvs';

$mysqli = new mysqli($host, $user, $password, $db) or
die($mysqli->error);