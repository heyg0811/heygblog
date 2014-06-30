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
class Controller_About extends Controller_Template
{
	public $template = 'template_noside';
	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->template->title = 'あばうと';
		$this->template->content = View::forge('about/index');
		Model_Counter::insertAddress("about");
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_exam()
	{
		$this->template->title = 'せつめい';
		switch(Input::get("id",false)){
			case 1:$this->template->content = View::forge('about/exam1');break;
			case 2:$this->template->content = View::forge('about/exam2');break;
			case 3:$this->template->content = View::forge('about/exam3');break;
			case 4:$this->template->content = View::forge('about/exam4');break;
			default:Response::redirect('/about');break;
		}
	}


	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_confirm(){
		$this->template->title = 'かくにん';
		$this->template->content = View::forge('about/confirm');
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_confirmed(){
		$email = \Email::forge('jis');
		$email->from(Input::post("email",null), Input::post("name",null));
		$email->to('heyg0811@gmail.com');
		$email->subject('ご意見・感想');
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
		return Response::redirect('about/index');
	}
}
