<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Default_Model extends ZP_Model {
	
	public function __construct() {
		$this->Db = $this->db();
		$this->helpers();
	}

	public function addEvent() {
		if(POST("title") and POST("content") and POST("date") and POST("location")) {
			$data = array( 
				"Title"      => POST("title"),
				"Location"   => POST("location"),
				"Content"    => POST("content"),
				"Text_Date"  => POST("date"),
				"Start_Date" => now(4)
			);
			
			$insert = $this->Db->insert("events", $data);
			
			return ($insert) ? "Your event has been save successfully" : FALSE;
		} else {
			
			return FALSE;
		}
	}
}
