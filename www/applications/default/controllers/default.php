<?php
/**
 * Access from index.php:
 */

class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");
		$this->Templates->theme();
	}
	
	public function index() {	
		$vars["view"] = $this->view("home", TRUE);
		
		$this->render("content", $vars);
	}
	
	public function gallery() {	
		$vars["view"] = $this->view("gallery", TRUE);
		
		$this->render("content", $vars);
	}

	public function visits() {
		$vars["view"] = $this->view("visits", TRUE);
		
		$this->render("content", $vars);
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
