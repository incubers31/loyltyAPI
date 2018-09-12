<?php
require_once 'controller/users.php';
$name = $_GET['name'];
$userName = $_GET['user_name'];
$password = $_GET['user_password'];
(new User())->register($name, $userName, $password); 
