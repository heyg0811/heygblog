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
class Controller_Message extends Controller_Template
{

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
        $this->template->title = 'めっせーじ';
        $this->template->content = View::forge('message/index');
        $this->template->breadcrumb = array(array("url" => "/message/", "name" => "Message"));
	}
}
