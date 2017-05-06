<?php

class Controller{
	
	public function model($model){
		require_once(PROJECT.'models'.DS .$model. '.php');
		return $model;
	}
	public function view ($view,$data=array()){
		require_once(PROJECT.'views'.DS .$view. '.php');
	}
	
}
