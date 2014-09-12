<?php

class Model_Image extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'type',
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
	protected static $_table_name = 'images';

	public static function getAll($limit=12){
		$result = DB::select("*")
		->from("images")
		->limit($limit)
		->order_by("id","desc")
		->execute()
		->as_array();
		return $result;
	}

	public static function addImage($name,$type){
		$table = "images";
		$columns = array("name","type");
		$values = array(
			"name" => $name,
			"type" => $type,
			);
		DB::insert($table)
		->columns($columns)
		->values($values)
		->execute();
	}
}