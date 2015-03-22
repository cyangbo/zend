<?php

//
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	function __construct($app){
		
		parent::__construct($app);
		
		file_put_contents("d:/mylog.txt",__FILE__.date('Y-m-d H:i:s')."Bootstrap\r\n",FILE_APPEND);
		
		//初始化数据库适配器
		
		//读取应用的数据库配置文件
		$url = constant("APPLICATION_PATH").DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'application.ini';
		$dbconfig = new Zend_Config_Ini($url,"mysql");	//读取mysql的配置文件
		$db = Zend_Db::factory($dbconfig->db);	
		$db->query('SET NAMES UTF8');
		Zend_Db_Table::setDefaultAdapter($db);
		
	}

}

