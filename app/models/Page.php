<?php
class Page{
	
	public function __construct(){
			
	}
	public function display_html($body){
		include($body);
	}
}