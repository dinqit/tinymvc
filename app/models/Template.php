<?php
require_once(LIB.'Smarty/Smarty.class.php');

class Template extends Smarty{
	
	public function __construct(){
		//calling parent construct
		parent::__construct();
		//setting up the file paths
		//$this->debugging= true;
		//$this->caching=true;
		//$this->cache_lifetime=120;
		$this->setTemplateDir(SMARTY_TEMPLATES);
		$this->setCompileDir(SMARTY_TEMPLATES_C);
		$this->setCacheDir(SMARTY_CACHE_DIR);
		$this->setConfigDir(SMARTY_CONFIG_DIR);
		$this->setPluginsDir(SMARTY_PLUGINS_DIR);
	}	
}

?>