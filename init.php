<?php

if($_SERVER['HTTP_HOST'] == "localhost"){

}
switch ($_SERVER['HTTP_HOST']) {
	case 'localhost':
		$db_host = "localhost";
		$db_user_name = "root";
		$db_password = "";
		$db_name = "loyalty";
		break;

	case 'localhost':
		$db_host = "localhost";
		$db_user_name = "root";
		$db_password = "}0bdEP)[St0v";
		$db_name = "loyalty";
		break;
}


$con = mysqli_connect($db_host, $db_user_name, $db_password, $db_name) or die(mysqli_error());
?>