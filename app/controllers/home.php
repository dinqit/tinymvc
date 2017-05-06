<?php

class Home extends Controller{
	
	public function __construct(){
		
	}
	public function index(){
		require_once(MODELS.'Page.php');
		$body = VIEWS.__CLASS__.DS.__FUNCTION__.'.php';
		$page =  new Page();
		$page->display_html($body);
	}
} 