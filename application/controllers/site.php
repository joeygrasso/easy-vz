<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('site_header');
		$this->load->view('home_view');
		$this->load->view('site_footer');
	}
	
	public function about() {
		$this->load->view('site_header');
		$this->load->view('about_view');
		$this->load->view('site_footer');
	}
	
	public function signin(){
		$this->load->view('site_header');
		$this->load->view('signin_view');
		$this->load->view('site_footer');
	}
	
	public function dashboard(){
		$this->load->view('dashboard_view');
	}
	
	public function login_validation(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'User Name', 'required|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
		
		if($this->form_validation->run()){
			redirect('site/dashboard');
		} else {
			$this->load->signin();
		}
		
		
		
	}
	
	public function validate_credentials(){
			$this->load->model('model_users');
			
			if($this->model_users0>can_log_in()){
				return true;
			} else {
				$this->form_validation->set_message('validate_credentials', 'Incorrect User Name/Password');
				return false;
			}
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */
