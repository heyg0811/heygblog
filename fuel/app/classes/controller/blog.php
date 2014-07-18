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
        $id = Input::get("id",null);
        if(!empty($id)){
            $article = Model_Article::getId($id);
            if(empty($article)){
                return Response::redirect("/util/404");
            }else{
                $comment = Model_Comment::getArtId($id);
                Model_Counter::insertAddress("blog",$id);
            }
        }else{
            $article = Model_Article::getAll(1);
            $comment = Model_Comment::getArtId($article[0]["article_id"]);
            Model_Counter::insertAddress("blog");
        }
        $this->template->content->article = $article;
        $this->template->content->comment = $comment;
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
        Model_User::insertUser($_SERVER["REMOTE_ADDR"],Input::post("name",null));
        return Response::redirect('blog/index');
    }
}
