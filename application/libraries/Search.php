<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Search {
	
	function get_url_title($url) {
		$page = file_get_contents($url);
		
		if(preg_match("/<title>(.+)<\/title>/i",$page,$title)) {
			return $title[1];
		} else {
			return "Related Content";
		}
	}
	
}