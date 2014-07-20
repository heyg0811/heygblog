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
 * The Top Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Top extends Controller_Template
{

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->template->title = 'HeyG Blog';
		$this->template->content = View::forge('top/index');
		$this->template->content->count = Model_Article::countRow();
		$this->template->content->article = Model_Article::getPage(1);

		Model_Counter::insertAddress("top");
		Model_User::insertUser($_SERVER["REMOTE_ADDR"]);
	}
}
