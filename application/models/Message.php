<?php 
/*
2015年3月23日PHP
*/
//Message类和数据库中的某张表对应,通过Message对象实例可以完成对该表crud操作

//zend_Db_Table是zf的表模块
class Message extends Zend_Db_Table {
	
	//
	protected $_name = 'message';
	protected $_primary = 'message_id';
	
}

/*
End of file
Location:Message.php
*/