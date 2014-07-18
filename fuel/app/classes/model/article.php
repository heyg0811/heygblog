<?php

class Model_Article extends \Orm\Model
{
	protected static $_table_name = 'articles';
	protected static $_primary_key = array('article_id');

	protected static $_properties = array(
		'article_id',
		'title',
		'body',
		'tag',
		'img',
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
	/**********************************
	* リレーション：一対多
	*/
	protected static $_has_many = array(
		'comment' => array(
			'model_to' => 'Model_Comment',
			'key_from' => 'article_id',
			'key_to' => 'article_id',
			'cascade_save' => false,
			'cascade_delete' => false,
			)
		);

	public static function getAll($limit = 5){
		$result = DB::select("*")
		->from("articles")
		->limit($limit)
		->order_by("created_at","desc")
		->execute()
		->as_array();
		return $result;
	}

	public static function getId($id){
		$result = DB::select("*")
		->from("articles")
		->where("article_id","=",$id)
		->execute()
		->as_array();
		return $result;
	}

	public static function getTag(){
		$result = DB::select("article_id","tag")
		->from("articles")
		->where("tag","!=",NULL)
		->execute()
		->as_array();
		return $result;
	}

	public static function searchTag($tag){
		$result = DB::select("*")
		->from("articles")
		->where("tag","like","%".$tag."%")
		->execute()
		->as_array();
		return $result;
	}

	public static function searchWord($word){
		$result = DB::select("*")
		->from("articles")
		->where("body","like","%".$word."%")
		->or_where("tag","like",$word)
		->or_where("title","like",$word)
		->execute()
		->as_array();
		return $result;
	}

	public static function searchCategory($category){
		$result = DB::select(DB::expr("article_id,img,title,DATE_FORMAT(from_unixtime(created_at),'%Y %M %d') AS date,digest"))
		->from("articles")
		->where("category","=",$category)
		->execute()
		->as_array();
		return $result;
	}

	public static function countRow(){
		$result = DB::select("article_id")
		->from("articles")
		->execute()
		->as_array();
		return (count($result));
	}

	public static function getCategory($id){
		$result = DB::select("category")
		->from("articles")
		->where("article_id", "=", $id)
		->execute()
		->as_array();
		return $result["0"]["category"];
	}

	public static function getCate($category){
		$result = DB::select("*")
		->from("articles")
		->where("category","=",$category)
		->order_by("created_at","desc")
		->limit(1)
		->execute()
		->as_array();
		return $result;
	}

	public static function getPage($page){
		$offset = (($page-1) * 4);
		$result = DB::select()
		->from("articles")
		->limit(4)
		->offset($offset)
		->order_by("created_at","desc")
		->execute()
		->as_array();
		return $result;
	}

	public static function getBackPage($count, $page){
		$offset = ($count - ($page * 4));
		$result = DB::select()
		->from("articles")
		->limit(4)
		->offset($offset)
		->order_by("article_id","desc")
		->execute()
		->as_array();
		return $result;
	}

	public static function addArticle($title,$name,$tag,$category,$digest,$body){
		$table = "articles";
		$columns = array("title","name","tag","category","digest","body","created_at","updated_at");
		$values = array(
			"title" => $title,
			"name" => $name,
			"tag" => $tag,
			"category" => $category,
			"digest" => $digest,
			"body" => $body,
			"created_at" => time(),
			"updated_at" => time(),
			);
		DB::insert($table)
		->columns($columns)
		->values($values)
		->execute();
	}
}
