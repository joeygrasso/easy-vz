<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	// Home Page View
	public function index()
	{
		$this->load->view('site_header');
		$this->load->view('home_view');
		$this->load->view('site_footer');
	}
	
	// About Page View
	public function about() {
		$this->load->view('site_header');
		$this->load->view('about_view');
		$this->load->view('site_footer');
	}
	
	// Sign In Page View
	public function signin(){
		$this->load->view('site_header');
		$this->load->view('signin_view');
		$this->load->view('site_footer');
	}
	
	// Dashboard View
	public function dashboard(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('dashboard_view');
		} else {
			redirect('site/signin');
		}
	}
	
	public function login_validation(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'User Name', 'required|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
		
		if($this->form_validation->run()){
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => 1);
			redirect('site/dashboard');
		} else {
			$this->load->view('site_header');
			$this->load->view('signin_view');
			$this->load->view('site_footer');
		}
	}
	
	public function validate_credentials(){
			$this->load->model('model_users');
			
			if($this->model_users->can_log_in()){
				$this->session->set_userdata($data);
				return true;
			} else {
				$this->form_validation->set_message('validate_credentials', 'Incorrect User Name/Password');
				return false;
			}
	}
	
	public function signout(){
		$this->session->sess_destroy();
		redirect('site/signin');
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */
