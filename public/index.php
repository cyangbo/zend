<?php
//解决时差8小时问题
ini_set('date.timezone','Asia/Shanghai');
//在不中断程序的情况下,输出信息到文件
file_put_contents("d:/mylog.txt",__FILE__.date('Y-m-d H:i:s')."\r\n",FILE_APPEND);

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

//print_r(APPLICATION_PATH);		//D:\wamp\www\zend\application
    
// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

//print_r(APPLICATION_ENV);		//production	项目类型:产品或者测试
// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

define('WEB_URL','http://'.$_SERVER['HTTP_HOST']);
//print_r($_SERVER['HTTP_HOST']);		//myzend.com   得到项目域名
//print_r(WMS_URL);						//http://myzend.com		得到网址
/** Zend_Application */
require_once '../library/Zend/Application.php';

//加载项目配置文件:/configs/application.ini
// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);
//下面一句等于:$application->bootstrap();$application->->run();
$application->bootstrap()
            ->run();