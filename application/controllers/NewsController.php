<?php

class NewsController extends Zend_Controller_Action{
    
    public function init(){
        
    }
    
    public function indexAction(){
    	
    	//向视图传递参数,在视图文件中,使用$this->content可以打印出:hello Mynews
    	//访问:域名/news		可以调用本控制器的index方法,这个方法下面语句,调用视图	views/scripts/news/index.phtml文件
        $this->view->content="hello Mynews";
    }
    
}