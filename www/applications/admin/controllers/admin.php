<?php
/**
 * Access from index.php:
 */

class Admin_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("admin");
		
		$this->Templates = $this->core("Templates");
		$this->Templates->theme("cpanel");
	}
	
	public function index() {
		$this->login();
	}
	
	public function login() {
		if(POST("connect")) {
			if(POST("username") == "admin" and POST("password") == "adminfllux") {
				SESSION("ZanUser", POST("username"));
			} else {
				redirect("admin");
			}
		}
		
		$vars["view"] = $this->view("home", TRUE);
		$this->render("content", $vars);
	}

	public function logout() {
		unsetSessions();
	}

	public function events() {
		$vars["view"] = $this->view("events", TRUE);
		
		$this->render("content", $vars);
	}

	public function feedback() {
		$vars["view"] = $this->view("feedback", TRUE);
		
		$this->render("content", $vars);
	}
}
