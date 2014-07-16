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
class Controller_Admin extends Controller_Template
{

	public $template = 'template_admin';

	public function before() {
		parent::before();
        // 初期処理
        // POSTチェック
		$post_methods = array(
			);
		$method = Uri::segment(2);
		if (Input::method() !== 'POST' && in_array($method, $post_methods)) {
			Response::redirect('admin/timeout');
		}
		// ログインチェック
		$auth_methods = array(
			'logined',
			'logout',
			'index',
			'stats',
			);
		if (in_array($method, $auth_methods) && !Auth::check()) {
			Response::redirect('admin/login');
		}
		// ログイン済みチェック
		$nologin_methods = array(
			'login',
			);
		if (in_array($method, $nologin_methods) && Auth::check()) {
			Response::redirect('admin/index');
		}
		// CSRFチェック
		if (Input::method() === 'POST') {
			if (!Security::check_token()) {
				Response::redirect('admin/timeout');
			}
		}
	}


	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_login()
	{
		// ログイン処理
		$username = Input::post('username', null);
		$password = Input::post('password', null);
		$result_validate = '';
		if ($username !== null && $password !== null) {
			$validation = $this->validate_login();
			$errors = $validation->error();
			if (empty($errors)) {
			// ログイン認証を行う
				$auth = Auth::instance();
				if ($auth->login($username, $password)) {
				// ログイン成功
					Response::redirect('admin/index');
				}
				$result_validate = "ログインに失敗しました。";
			} else {
				$result_validate = $validation->show_errors();
			}
		}
		$this->template->title = 'ろぐいん';
		$this->template->content = View::forge('admin/login');
		$this->template->content->set_safe('errmsg', $result_validate);
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->template->title = 'あどみん';
		$this->template->content = View::forge('admin/index');
		$this->template->content->count = array(
				"access" => Model_Counter::countAccess(),
				"comment" => Model_Comment::count(),
				"ts" => Model_Message::countTs(),
				"about" => Model_Message::countAbout(),
			);
		$this->template->content->access = Model_Counter::getAccess();
		$this->template->content->comment = Model_Comment::getCom();
		$this->template->content->ts = Model_Message::getRequest("ts");
		$this->template->content->about = Model_Message::getRequest("about");
	}

	/**
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_addarticle()
	{
		$this->template->title = 'きじついか';
		$this->template->content = View::forge('admin/addarticle');
		$this->template->content->count = array(
				"access" => Model_Counter::count(),
				"comment" => Model_Comment::count(),
				"ts" => Model_Message::countTs(),
				"about" => Model_Message::countAbout(),
			);
	}

	private function validate_login()
	{
		// 入力チェック
		$validation = Validation::forge();
		$validation->add('username', 'ユーザー名')
			->add_rule('required')
			->add_rule('min_length', 4)
			->add_rule('max_length', 15);
		$validation->add('password', 'パスワード')
			->add_rule('required')
			->add_rule('min_length', 6)
			->add_rule('max_length', 20);
		$validation->run();
		return $validation;
	}
}
