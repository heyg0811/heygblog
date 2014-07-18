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
class Controller_Util extends Controller_Template
{
	public $template = 'template_noside';
	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_tag(){
		$this->template->title='たぐ検索';
		$this->template->content = View::forge('util/tag');
		$this->template->breadcrumb = array(array("url" => "/blog/", "name" => "Blog"),array("url" => "/util/tag", "name" => "Tag search"));
		$result = Model_Article::searchTag(Input::get("tag",null));
		$this->template->content->article = $result;
		$this->template->content->tag = Input::get("tag",null);
	}

	public function action_search(){
		$this->template->title = 'けんさく';
		$this->template->content = View::forge('util/search');
		$this->template->breadcrumb = array(array("url" => "/blog/", "name" => "Blog"),array("url" => "/util/search", "name" => "Word search"));
		$result = Model_Article::searchWord(Input::post("sword",null));
		$this->template->content->word = Input::post("sword",null);
		$this->template->content->article = $result;
	}

	public function action_category(){
		$this->template->title = 'かてごり';
		$this->template->content = View::forge('util/category');
		$this->template->breadcrumb = array(array("url" => "/blog/", "name" => "Blog"),array("url" => "","name"=>"Category search"));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404(){
		$this->template->title = 'けんさく';
		$this->template->content = View::forge('util/404');
		$this->template->breadcrumb = array(array("url" => "/util/404", "name" => "404 Not Found"));
	}
}
