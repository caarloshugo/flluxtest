<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Default_Model extends ZP_Model {
	
	public function __construct() {
		//$this->Db = $this->db();
		$this->helpers();
	}
	
	public function send() {
		$this->Email = $this->core("Email");
		$this->Email->setLibrary("PHPMailer");
		
		$this->Email->fromName  = get("webName");
		$this->Email->fromEmail = "carlos.hugo.gonzalez.castell@gmail.com";
		
		$this->sendMail();
		
		$this->sendResponse();			
		
		return "Your message has been sent successfully, we will contact you as soon as possible, thank you very much!";
	}
	
	private function sendResponse() {
		$this->Email->email	  = POST("email");
		$this->Email->subject = __(_("Automatic response")) . " - " . decode(get("webName"));
		$this->Email->message = 	'
									<p>'. __(_("Your message has been sent successfully, we will contact you as soon as possible, thank you very much!")) .'</p>							
									<p><a href="' . get("webURL") . '" title="' . decode(get("webName")) . '">' . decode(get("webName")) . '</p>									
									';
		$this->Email->send();
	}
	
	private function sendMail() {
		$this->Email->email	  = "carlos.hugo.gonzalez.castell@gmail.com";
		$this->Email->subject = __(_("New Message")) ." - ". decode(get("webName"));
		$this->Email->message = 	'
									<p>'. __(_("Message")) .'</p>									
									<p><strong>'. __(_("Name")) .':</strong> <br /> '    . POST("name")    . '</p>									
									<p><strong>'. __(_("Email")) .':</strong> <br /> '   . POST("email")   . '</p>									
									<p><strong>'. __(_("Subject")) .':</strong> <br /> ' . POST("subject") . '</p>									
									<p><strong>'. __(_("Message")) .':</strong> <br /> ' . POST("message", "decode", FALSE) . '</p>									
									';
		$this->Email->send();
	}
}
