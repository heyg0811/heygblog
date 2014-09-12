<?php

class Model_Blogcounter extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'article_id',
		'ip',
		'device',
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
	protected static $_table_name = 'blogcounter';

	public static function checkAddress($article_id){
		$result = DB::select("created_at")
		->from("blogcounter")
		->where("ip","=",$_SERVER["REMOTE_ADDR"])
		->and_where("article_id","=",$article_id)
		->execute()
		->as_array();
		if(!empty($result)){
			if(date("ymd",$result[0]["created_at"]) == date("ymd",time())){
				return false;
			}
			return true;
		}
		return true;
	}

	public static function insertAddress($article_id){
		if(Model_Blogcounter::checkAddress($article_id)){
			$columns = array("article_id","ip","device","created_at","updated_at");
			$values = array(
				"article_id" => $article_id,
				"ip" => $_SERVER["REMOTE_ADDR"],
				"device" => Model_Counter::deviceCheck(),
				"created_at" => time(),
				"updated_at" => time(),
				);
			DB::insert("blogcounter")
			->columns($columns)
			->values($values)
			->execute();
		}else{
			DB::update("blogcounter")
			->value('updated_at', time())
			->where("article_id","=",$article_id)
			->and_where('ip',"=",$_SERVER["REMOTE_ADDR"])
			->order_by("created_at","desc")
			->limit(1)
			->execute();
		}
	}

	public static function countAccess(){
		$result = DB::select(DB::expr("distinct(ip) AS ip,DATE_FORMAT(from_unixtime(created_at),'%Y%m%d') AS date"))
		->from("blogcounter")
		->execute()
		->as_array();
		return count($result);
	}

	public static function getAccess(){
		$result = DB::select(DB::expr("distinct(blogcounter.ip) AS ip,DATE_FORMAT(from_unixtime(blogcounter.created_at),'%Y%m%d') AS date,users.name"))
		->from("blogcounter")
		->join("users","LEFT")
		->on("blogcounter.ip","=","users.ip")
		->limit(5)
		->execute()
		->as_array();
		return $result;
	}

	public static function deviceCheck(){
        //ユーザーエージェント取得
		$ua = $_SERVER['HTTP_USER_AGENT'];

		if(strpos($ua,'iPhone') !== false || strpos($ua,'iPad') !== false){
            //iPhone
			$ua = 'iOS';
		}
		elseif(strpos($ua,'Android') !== false || (strpos($ua, 'Mobile') !== false)){
            //Android
			$ua = 'Android';
		}
		else{
			$ua = 'PC';
		}

		return $ua;
	}

	public static function getPop(){
		$result = DB::select('blogcounter.article_id',DB::expr('COUNT(blogcounter.article_id) as count'),'articles.title')
		->from("blogcounter")
		->join("articles")
		->on("blogcounter.article_id", "=", "articles.article_id")
		->group_by("article_id")
		->order_by("count","desc")
		->limit(3)
		->execute()
		->as_array();
		return $result;
	}

}
