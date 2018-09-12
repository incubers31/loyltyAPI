<?php

/**
* Mail Configuration file 
* Set here Header for all EMail Send By THS
*/
class EmailConfiguration
{
	
	public $headers = "";
	public $adminEmail = "";
	public $mail = "";

	public function setHeaders() {
		$this -> adminEmail = 'info@twitnia.com';
		$this -> headers  = 'MIME-Version: 1.0' . "\r\n";
		$this -> headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
		$this -> headers .= 'From: Consysa <info@twitnia.com>' . "\r\n";

		$this -> mail = new PHPMailer();
		$this -> mail->isSMTP();                          
		$this -> mail->SMTPAuth = true;     

		$this -> mail->Host = 'smtp.gmail.com';                           
		$this -> mail->Username = 'incubers.sumit@gmail.com';            
		$this -> mail->Password = 'SERver@123'; 
		$this -> mail->setFrom('incubers.sumit@gmail.com', 'Loylty'); 

		/*$this -> mail->Host = 'smtp.zoho.com';                           
		$this -> mail->Username = 'info@thehisa.com';            
		$this -> mail->Password = 'HISA@xb6&33D#'; 
		$this -> mail->setFrom('info@thehisa.com', 'The HISA'); */
		
		/*$this -> mail->Host = 'smtp.mailgun.org';                           
    	$this -> mail->Username = 'postmaster@twitnia.com';            
    	$this -> mail->Password = '9947f39b0bd7f42037816377b458a71b'; 
    	$this -> mail->setFrom('info@twitnia.com', 'Consysa');*/   

    	/*$this -> mail->Host = 'smtp.zoho.com';                           
		$this -> mail->Username = 'info@thehomesaga.com';            
		$this -> mail->Password = 'THS@kennedy#63'; 
		$this -> mail->setFrom('info@thehomesaga.com', 'The Home Saga');*/    

		$this -> mail->SMTPSecure = 'tls';                       
		$this -> mail->Port = 587;                                 
		$this -> mail->isHTML(true);
	}

}