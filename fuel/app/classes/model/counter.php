<?php

class Model_Counter extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'ip',
		'path',
		'article_id',
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
	protected static $_table_name = 'counters';

	public static function checkAddress($path,$id){
		$result = DB::select("created_at")
					->from("counters")
					->where("ip","=",$_SERVER["REMOTE_ADDR"])
					->and_where("path","=",$path)
					->and_where("article_id","=",$id)
					->order_by("created_at","desc")
					->execute()
					->as_array();
		if(!empty($result[0])){
			if(date("ymd",$result[0]["created_at"]) == date("ymd",time())){
				return false;
			}
			return true;
		}else{
			return true;
		}
	}

	public static function insertAddress($path,$id = null){
		if(Model_Counter::checkAddress($path,$id)){
			$table = "counters";
			$columns = array("ip","path","article_id","created_at","updated_at");
			$values = array(
				"ip" => $_SERVER["REMOTE_ADDR"],
				"path" => $path,
				"article_id" => $id,
				"created_at" => time(),
				"updated_at" => time(),
				);
			DB::insert($table)
				->columns($columns)
				->values($values)
				->execute();
		}else{
			DB::update('counters')
			->value('updated_at', time())
			->where('ip',"=",$_SERVER["REMOTE_ADDR"])
			->and_where("path","=",$path)
			->and_where("article_id","=",$id)
			->order_by("created_at","desc")
			->limit(1)
			->execute();
		}
	}

	public static function countAccess(){
		$result = DB::select(DB::expr("distinct(ip),DATE_FORMAT(from_unixtime(`created_at`),'%Y%m%d')"))
					->from("counters")
					->execute()
					->as_array();
		return count($result);
	}

	public static function getPop(){
		$result = DB::select('counters.article_id',DB::expr('COUNT(counters.article_id) as count'),'articles.title')
						->from("counters")
						->join("articles")
						->on("counters.article_id", "=", "articles.article_id")
						->group_by("article_id")
						->order_by("count","desc")
						->limit(5)
						->execute()
						->as_array();
		return $result;
	}

}
