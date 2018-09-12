<?php
require_once 'controller/users.php';
$userName = $_GET['user_name'];
$password = $_GET['user_password'];
(new User())->login($userName, $password); 
?>