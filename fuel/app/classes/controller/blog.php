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
class Controller_Blog extends Controller_Template
{

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index(){
        $this->template->title = 'ぶろぐ';
        $this->template->content = View::forge('blog/index');
        $this->template->breadcrumb = array(array("url" => "/blog/", "name" => "Blog"));
        $workArt = Model_Article::getCate("work");
        $realArt = Model_Article::getCate("real");
        $gameArt = Model_Article::getCate("game");

        if(!empty($_GET['id'])){
                $temp = Model_Article::getId(Input::get("id",false));
                $this->template->content->category = $temp[0]["category"];
                switch($temp[0]["category"]){
                        case "work": $workArt = Model_Article::getId(Input::get("id",false));break;
                        case "real": $realArt = Model_Article::getId(Input::get("id",false));break;
                        case "game": $gameArt = Model_Article::getId(Input::get("id",false));break;
                }
                Model_Counter::insertAddress("blog",Input::get("id",false));
        }else{
                $this->template->content->category = "work";
                Model_Counter::insertAddress("blog");
        }
        $newArt = array(
                "work" => array(
                    "article" => $workArt,
                    "comment" => Model_Comment::getArtId($workArt[0]["article_id"]),
                    ),
                "real" => array(
                    "article" => $realArt,
                    "comment" => Model_Comment::getArtId($realArt[0]["article_id"]),
                    ),
                "game" => array(
                    "article" => $gameArt,
                    "comment" => Model_Comment::getArtId($gameArt[0]["article_id"]),
                    ),
                );
        $this->template->content->newArt = $newArt;
    }

    public function action_confirm(){
        $this->template->title = 'かくにん';
        $this->template->content = View::forge('blog/confirm');
        $this->template->breadcrumb = array(array("url" => "/blog/", "name" => "Blog"),array("url"=>"/blog/","name" => "Confirm"));
    }

    public function action_confirmed(){
        Model_Comment::insert(
                Input::post("id",null),
                Input::post("name",null),
                Input::post("email",null),
                Input::post("url",null),
                Input::post("body",null));
        return Response::redirect('blog/index');
    }
}
