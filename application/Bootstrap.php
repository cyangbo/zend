<?php

//
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	function __construct($app){
		
		parent::__construct($app);
		
		file_put_contents("d:/mylog.txt",__FILE__.date('Y-m-d H:i:s')."Bootstrap\r\n",FILE_APPEND);
		
		//
		
	}

}

