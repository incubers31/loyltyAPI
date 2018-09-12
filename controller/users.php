<?php 
/**
 * 
 */
require_once 'DBconfig.php';
require_once 'users_mailer.php';
class User
{
	private $con = NULL;
	private $mailObj = NULL;
	function __construct()
	{
		$this->con = (new DBconfig())->connection();
		$this->mailObj = new UsersMailer();
	}

	public function login($username = NULL, $password = NULL){
		$sql = "select * from users where user_name = '".$username."' AND user_password = '".$password."'";
		$result = mysqli_query($this->con, $sql);

		if(!mysqli_num_rows($result) > 0){
			$status = "failed";
			echo json_encode(array("response" => $status));
		}else{
			$status = "ok";
			$row = mysqli_fetch_assoc($result);
			echo json_encode(array("response" => $status, "name" => $row['name']));
		}
	}

	public function register($name = NULL, $username = NULL, $password = NULL){
		$sql = "select * from users where user_name = '".$username."'";
		$result = mysqli_query($this->con, $sql);

		// if(mysqli_num_rows($result) > 0){
		// 	$status = "exist";
		// }else{
			$sql = "insert into users(name, user_name,user_password) values('".$name."', '".$username."', '".$password."');";
			if(mysqli_query($this->con, $sql)){
				$status = "ok";
				$this->mailObj->sendSignUpMail($this->con->insert_id, $name, $username);
			}else{
				$status = "error";
			}
		//}
		echo json_encode(array("response" => $status));
	}
}
?>