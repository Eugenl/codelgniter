<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aftlogin extends CI_Controller {

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
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('left_sidebar');
		$this->load->view('contact');
	}

	public function contact()
	{
		$this->load->view('head');
		$this->load->view('left_sidebar');
		$this->load->view('contact');
	}

	public function sms()
	{
		$this->load->view('head');
		$this->load->view('left_sidebar');
		$this->load->view('sms');
	}

	public function other()
	{
		$this->load->view('head');
		$this->load->view('left_sidebar');
		$this->load->view('other');
	}

	public function site()
	{
		$this->load->view('head');
		$this->load->view('left_sidebar');
		$this->load->view('site');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */