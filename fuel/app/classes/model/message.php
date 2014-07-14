<?php

class Model_Message extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'mail',
		'body',
		'created_at',
		);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
			),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
			),
		);
	protected static $_table_name = 'messages';

	public static function getRequest($type){
		switch($type){
			case "ts":
				$result = DB::select("*")
					->from("messages")
					->where("type","=",1)
					->limit(5)
					->execute()
					->as_array();
				return $result;
			case "about":
				$result = DB::select("*")
					->from("messages")
					->where("type","=",2)
					->limit(5)
					->execute()
					->as_array();
				return $result;
		}
	}

	public static function countTs(){
		$result = DB::select("*")
					->from("messages")
					->where("type","=",1)
					->execute()
					->as_array();
		return count($result);
	}
	public static function countAbout(){
		$result = DB::select("*")
					->from("messages")
					->where("type","=",2)
					->execute()
					->as_array();
		return count($result);
	}

}