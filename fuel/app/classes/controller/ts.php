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
	public $template = 'template_tsside';
	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
        $this->template->title = 'てぃーえす';
        $this->template->content = View::forge('ts/index');
        $this->template->breadcrumb = array(array("url" => "/ts/", "name" => "TS"));
        Model_Counter::insertAddress();
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_confirm(){
		$this->template->title = 'かくにん';
		$this->template->content = View::forge('about/confirm');
		$this->template->content->breadcrumb = array(array("url" => "/ts/", "name" => "TS"),array("url"=>"/ts/","name"=>"confirm"));
		$this->template->flag = false;
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_confirmed(){
		Model_User::insertUser($_SERVER["REMOTE_ADDR"],Input::post("name",null));
		$email = \Email::forge('jis');
		$email->from(Input::post("email",null), Input::post("name",null));
		$email->to('heyg.pw@gmail.com');
		$email->subject('TS申請・連絡');
		$body = Input::post("body",null);
		$email->body(mb_convert_encoding($body, 'jis'));
		try {
			$email->send();
		}
		catch (\EmailValidationFailedException $e) {
			$err_msg = '送信に失敗しました。';
		}
		catch (\EmailSendingFailedException $e) {
			$err_msg = '送信に失敗しました。';
		}
		return Response::redirect('ts/');
	}
}
