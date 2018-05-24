<?php
$connect = new mysqli('mysql', 'root', '123123', 'dockertest');

if (!$connect) {
	die($connect->connect_error);
}
echo '<pre>';
var_dump($connect);
echo '</pre>';
