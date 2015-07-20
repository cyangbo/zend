<?php

/**
 * Bootstrap引导程序:用来过滤控制器的访问
 * 引导程序里面不需要任何方法
 * @author Administrator
 *
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	function __construct($app){
		
		parent::__construct($app);
		
		file_put_contents("d:/mylog.txt",__FILE__.date('Y-m-d H:i:s')."Bootstrap\r\n",FILE_APPEND);
		

		
	}
	
	//添加一个资源到引导
	protected function _initDoctype(){
		
		$this->bootstrap('view');
		$view = $this->getResource('view');
		$view->doctype('XHTML1_STRICT');
		
	}
	

}

