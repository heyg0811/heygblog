<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Ajax extends Controller_Rest
{

	/**
	 *
	 * @access  public
	 * @return  JSON
	 */
	public function post_paging(){
		$result = Model_Article::getPage($_POST['page']);
		foreach($result as &$val){
			$val['created_at'] = date("Y年 m月 d日",$val["created_at"]);
			$val['body'] = mb_substr($val['body'],0,80,"utf-8");
		}
		//JSON形式で出力する
		header('Content-Type: application/json');
		echo json_encode($result);
		exit;
	}

	/**
	 *
	 * @access  public
	 * @return  No return
	 */
	public function post_backpaging(){
		$result = Model_Article::getBackPage(Model_Article::count(),$_POST['page']);
		foreach($result as &$val){
			$val['created_at'] = date("Y年 m月 d日",$val["created_at"]);
			$val['body'] = mb_substr($val['body'],0,115,"utf-8");
		}
		//JSON形式で出力する
		header('Content-Type: application/json');
		echo json_encode($result);
		exit;
	}

	/**
	 *
	 * @access  public
	 * @return  JSON
	 */
	public function post_count(){
		//JSON形式で出力する
		header('Content-Type: application/json');
		echo json_encode(Model_Article::count());
		exit;
	}

	/**
	 *
	 * @access  public
	 * @return  JSON
	 */
	public function post_getgraph(){

		//JSON形式で出力する
		header('Content-Type: application/json');
		echo json_encode(Model_Counter::countGraph(Input::post("dataFilter",null)));
		exit;
	}

	/**
	 *
	 * @access  public
	 * @return  JSON
	 */
	public function post_getarea(){

		//JSON形式で出力する
		header('Content-Type: application/json');
		echo json_encode(Model_Counter::countArea(Input::post("dataFilter",null)));
		exit;
	}

	/**
	 *
	 * @access  public
	 * @return  JSON
	 */
	public function post_category(){

		//JSON形式で出力する
		header('Content-Type: application/json');
		echo json_encode(Model_Article::searchCategory(Input::post("category",null)));
		exit;
	}
}
