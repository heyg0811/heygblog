<?php

class Model_Comment extends \Orm\Model
{
	protected static $_table_name = 'comments';
	protected static $_primary_key = array('comment_id');

	protected static $_properties = array(
		'comment_id',
		'article_id',
		'body',
		'name',
		'admin',
		'email',
		'url',
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

	public static function getAll(){
		$result = DB::select("*")
					->from("comments")
					->execute()
					->as_array();
		return $result;
	}

	public static function getComId($id){
		$result = DB::select("*")
					->from("comments")
					->where("comments_id","=",$id)
					->execute()
					->as_array();
		return $result;
	}

	public static function getArtId($id){
		$result = DB::select("*")
					->from("comments")
					->where("article_id","=",$id)
					->execute()
					->as_array();
		return $result;
	}

	public static function insert($id,$name,$email,$url,$body){
		$table = "comments";
		$columns = array("article_id","name","mail","site","body","created_at","updated_at");
		$values = array(
			"article_id" => $id,
			"name" => $name,
			"email" => $email,
			"url" => $url,
			"body" => $body,
			"created_at" => time(),
			"updated_at" => time(),
			);
		DB::insert($table)->columns($columns)->values($values)->execute();
	}
}
