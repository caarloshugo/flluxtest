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
		$this->Default_Model = $this->model("Default_Model");
		
		if(POST("name")) {
			$vars["alert"]       = $this->Default_Model->sendVisit();
		}
		
		$vars["visits"] = $this->Default_Model->getVisits();
		$vars["view"]   = $this->view("visits", TRUE);
		
		$this->render("content", $vars);
	}

	public function events() {
		$this->Default_Model = $this->model("Default_Model");
		
		$vars["events"] = $this->Default_Model->getEvents();
		$vars["view"]   = $this->view("events", TRUE);
		
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
