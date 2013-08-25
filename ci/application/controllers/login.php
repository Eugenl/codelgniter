<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default
	 * controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_common');
	}

	public function index()
	{
		//$query = $this->db->get('login'); //sites为表名
		$this->load->view('login');
	}

	public function captcha()
	{
		$conf['name']='captcha_code'; //作为配置参数
  		$this->load->library('captcha',$conf);
  		$this->captcha->show();
		$captcha_session=$this->session->userdata('captcha_code');//将验证码放在了缓存中
	}

	public function login_check()
	{
		//$query = $this->db->get('login'); //sites为表名
		$this->load->view('login_check');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */