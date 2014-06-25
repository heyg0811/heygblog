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
class Controller_Ts extends Controller_Template
{
	public $template = 'template_noside';
	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
        $this->template->title = 'てぃーえす';
        $this->template->content = View::forge('ts/index');
	}
}
