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
		
		if(POST("send")) {
			$this->Default_Model = $this->model("Default_Model");
			$vars["alert"]       = $this->Default_Model->sendVisit();
		}
		
		$vars["view"] = $this->view("visits", TRUE);
		
		$this->render("content", $vars);
	}

	public function events() {
		if(POST("send")) {
			
		}
		
		$vars["view"] = $this->view("events", TRUE);
		
		$this->render("content", $vars);
	}

	public function feedback() {
		if(POST("send")) {
			$this->Default_Model = $this->model("Default_Model");
			$vars["alert"]       = $this->Default_Model->sendFeedback();
		}
		
		$vars["view"] = $this->view("feedback", TRUE);
		
		$this->render("content", $vars);
	}
}
