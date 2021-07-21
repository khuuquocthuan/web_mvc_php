<?php

include ("smarty/libs/Smarty.class.php");
class set_smarty extends Smarty {

	function set_smarty(){

		parent:: __construct(); 
		$this->setCacheDir("smarty/cache/");
		$this->setConfigDir("smarty/configs/");
		$this->setTemplateDir("smarty/templates/");
		$this->setCompileDir("smarty/templates_c/");
	}

}


?>