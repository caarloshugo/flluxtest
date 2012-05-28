<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

$routes = array(
	0 => array(
			"pattern"	  => "/^galeria/",
			"application" => "default",
			"controller"  => "default",
			"method"	  => "gallery",
			"params"	  => array()
		),
	1 => array(
			"pattern"	  => "/^visitas/",
			"application" => "default",
			"controller"  => "default",
			"method"	  => "visits",
			"params"	  => array()
		),
	2 => array(
			"pattern"	  => "/^eventos/",
			"application" => "default",
			"controller"  => "default",
			"method"	  => "events",
			"params"	  => array()
		),
	3 => array(
			"pattern"	  => "/^contacto/",
			"application" => "default",
			"controller"  => "default",
			"method"	  => "feedback",
			"params"	  => array()
		),
	4 => array(
			"pattern"	  => "/^admin/",
			"application" => "admin",
			"controller"  => "admin",
			"method"	  => "login",
			"params"	  => array()
		),
	4 => array(
			"pattern"	  => "/^logout/",
			"application" => "admin",
			"controller"  => "admin",
			"method"	  => "logout",
			"params"	  => array()
		)
);
