<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/site
	 *	- or -  
	 * 		http://example.com/index.php/site/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 */
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
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */
