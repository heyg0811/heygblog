<?php

class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'ip',
		'name',
		'created_at',
		'updated_at',
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
	protected static $_table_name = 'users';

	public static function checkUser($ip){
		$result = DB::select("created_at")
		->from("users")
		->where("ip","=",$_SERVER["REMOTE_ADDR"])
		->order_by("created_at","desc")
		->execute()
		->as_array();
		if(!empty($result[0])){
			return true;
		}else{
			return false;
		}
	}

	public static function insertUser($ip,$name=null){
		if(!Model_User::checkUser($ip)){
			$table = "users";
			$columns = array("ip","name","created_at","updated_at");
			$values = array(
				"ip" => $ip,
				"name" => $name,
				"created_at" => time(),
				"updated_at" => time(),
				);
			DB::insert($table)
			->columns($columns)
			->values($values)
			->execute();
		}else{
			DB::update('users')
			->value('name',$name,'updated_at',time())
			->where('ip',"=",$ip)
			->order_by("created_at","desc")
			->limit(1)
			->execute();
		}
	}
}