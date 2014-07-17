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
			$columns = array("ip","path","article_id","device","created_at","updated_at");
			$values = array(
				"ip" => $_SERVER["REMOTE_ADDR"],
				"path" => $path,
				"article_id" => $id,
				"device" => Model_Counter::deviceCheck(),
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
		$result = DB::select(DB::expr("distinct(ip) AS ip,DATE_FORMAT(from_unixtime(created_at),'%Y%m%d') AS date"))
		->from("counters")
		->execute()
		->as_array();
		return count($result);
	}

	public static function getAccess(){
		$result = DB::select(DB::expr("distinct(counters.ip) AS ip,DATE_FORMAT(from_unixtime(counters.created_at),'%Y%m%d') AS date,users.name"))
		->from("counters")
		->join("users","LEFT")
		->on("counters.ip","=","users.ip")
		->limit(5)
		->execute()
		->as_array();
		return $result;
	}

	public static function countGraph($dateFilter){
		switch($dateFilter){
			case "w":
			$result = DB::select(DB::expr("DATE_FORMAT(from_unixtime(`created_at`),'%Y-%m-%d') AS `date`,count(distinct(ip)) AS `count`,created_at"))
			->from("counters")
			->group_by("date")
			->order_by("created_at","desc")
			->limit(7)
			->execute()
			->as_array();
			return $result;
			case "m":
			$temp = time();
			$y = date("Y",$temp); $m = date("m",$temp);
			$date = mktime(0, 0, 0, $m, 1, $y);
			$result = DB::select(DB::expr("DATE_FORMAT(from_unixtime(`created_at`),'%Y-%m-%d') AS `date`,count(distinct(ip)) AS `count`,created_at"))
			->from("counters")
			->where("created_at",">=",$date)
			->group_by("date")
			->order_by("created_at","desc")
			->limit(31)
			->execute()
			->as_array();
			return $result;
			case "y":
			$temp = time();
			$y = date("Y",$temp);
			$date = mktime(0, 0, 0, 1, 1, $y);
			$result = DB::select(DB::expr("DATE_FORMAT(from_unixtime(`created_at`),'%Y-%m') AS `date`,count(distinct(ip)) AS `count`,created_at"))
			->from("counters")
			->where("created_at",">=",$date)
			->group_by("date")
			->order_by("created_at","desc")
			->limit(12)
			->execute()
			->as_array();
			return $result;

		}
	}

	public static function countArea($dateFilter){
		switch($dateFilter){
			case "w":
			$result = DB::select("*")
				->from(DB::expr("(select DATE_FORMAT(from_unixtime(created_at),'%Y-%m-%d') AS `date`,count(distinct(ip)) AS pc_count from counters where device = 'PC' group by `date` order by created_at desc) AS t1"))
				->join(DB::expr("(select DATE_FORMAT(from_unixtime(created_at),'%Y-%m-%d') AS `idate`,count(distinct(ip)) AS ios_count from counters where device = 'iOS' group by `idate`) AS t2"),"LEFT")
				->on("t1.date","=","t2.idate")
				->join(DB::expr("(select DATE_FORMAT(from_unixtime(created_at),'%Y-%m-%d') AS `adate`,count(distinct(ip)) AS android_count from counters where device = 'Android' group by `adate`) AS t3"),"LEFT")
				->on("t1.date","=","t3.adate")
				->limit(7)
				->execute()
				->as_array();
			return $result;

			case "m":
			$temp = time();
			$y = date("Y",$temp); $m = date("m",$temp);
			$date = mktime(0, 0, 0, $m, 1, $y);
			$result = DB::select("*")
				->from(DB::expr("(select DATE_FORMAT(from_unixtime(created_at),'%Y-%m-%d') AS `date`,count(distinct(ip)) AS pc_count from counters where device = 'PC' AND created_at >= ".$date." group by `date` order by created_at desc) AS t1"))
				->join(DB::expr("(select DATE_FORMAT(from_unixtime(created_at),'%Y-%m-%d') AS `idate`,count(distinct(ip)) AS ios_count from counters where device = 'iOS' group by `idate`) AS t2"),"LEFT")
				->on("t1.date","=","t2.idate")
				->join(DB::expr("(select DATE_FORMAT(from_unixtime(created_at),'%Y-%m-%d') AS `adate`,count(distinct(ip)) AS android_count from counters where device = 'Android' group by `adate`) AS t3"),"LEFT")
				->on("t1.date","=","t3.adate")
				->limit(31)
				->execute()
				->as_array();
			return $result;

			case "y":
			$temp = time();
			$y = date("Y",$temp);
			$date = mktime(0, 0, 0, 1, 1, $y);
			$result = DB::select("*")
				->from(DB::expr("(select DATE_FORMAT(from_unixtime(created_at),'%Y-%m-%d') AS `date`,count(distinct(ip)) AS pc_count from counters where device = 'PC' AND created_at >= ".$date." group by `date` order by created_at desc) AS t1"))
				->join(DB::expr("(select DATE_FORMAT(from_unixtime(created_at),'%Y-%m-%d') AS `idate`,count(distinct(ip)) AS ios_count from counters where device = 'iOS' group by `idate`) AS t2"),"LEFT")
				->on("t1.date","=","t2.idate")
				->join(DB::expr("(select DATE_FORMAT(from_unixtime(created_at),'%Y-%m-%d') AS `adate`,count(distinct(ip)) AS android_count from counters where device = 'Android' group by `adate`) AS t3"),"LEFT")
				->on("t1.date","=","t3.adate")
				->limit(12)
				->execute()
				->as_array();
			return $result;
		}
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
