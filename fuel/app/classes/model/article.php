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
		->offset($offset)
		->limit(4)
		->order_by("created_at","desc")
		->execute()
		->as_array();
		return $result;
	}

	public static function getBackPage($count, $page){
		$offset = ($count - ($page * 4));
		$result = DB::select()
		->from("articles")
		->offset($offset)
		->limit(4)
		->order_by("article_id","asc")
		->execute()
		->as_array();
		return $result;
	}

	public static function search($word){
		$result = DB::select()
		->from('articles')
		->where('article_id','=',1)
		->execute()
		->as_array();
		var_dump('title:'.$result[0]['title'].' word:'.$word);
		stripos($result[0]['title'],$word);
		// foreach($result as $val){
		// 	if(stripos($val['title'],$word) || stripos($val['body'],$word)){
		// 		var_dump($val['article_id']);exit;
		// 		return $val['article_id'];
		// 	}
		return $result;
	}
}
