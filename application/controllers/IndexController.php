<?php

//引入models
require_once APPLICATION_PATH.'/models/Message.php';

class IndexController extends Zend_Controller_Action
{

	//初始化函数
    public function init()
    {
        /* Initialize action controller here */
    	file_put_contents("d:/mylog.txt",__FILE__.date('Y-m-d H:i:s')."init\r\n",FILE_APPEND);
    }

    public function indexAction()
    {
    	//数据库查询
    	$messageModel = new Message();
    	
    	$res = $messageModel->fetchAll()->toArray();
    	echo "<pre>";
    	print_r($res);
    	echo "</pre>";
    	
    	//吧控制器中获取的数据(array,object,int,...)
    	$this->view->myres=$res;
    	
        // action body
        //如果控制器文件的index方法里面什么都不写的话,相当于有下面这句,加载视图index
        //视图在views/scripts/index/index.phtml
        
        $this->render('index');
    	file_put_contents("d:/mylog.txt",__FILE__.date('Y-m-d H:i:s')."IndexAction\r\n",FILE_APPEND);
    }


}

