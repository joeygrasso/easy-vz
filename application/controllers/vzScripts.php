<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vzScripts extends CI_Controller {

	// Start a Container based on its CID
	public function start(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('cid', 'cid', 'required|xss_clean|callback_validate_cid');
		$cid = $this->input->post('cid');
		$status = $this->input->post('status');

		if($this->form_validation->run()){
			$data = array(
				'cid'	 => $this->input->post('cid'),
				'status' => $this->input->post('status'));
		} else {
			$this->load->view('dashboard_view');
		}


		// SQL query to find if CID exists and current status
		// If CID does not exist return error, else if cid exists but if status is running throw error, else execute script vzctl start $cid
	} // end start()

	// Stop a Container based on its CID
	public function stop(){

	} // end stop()

	// Restart a Container based on its CID
	public function restart(){

	} // end restart()

	public function validate_cid(){
		$this->load->model('model_users');

		if($this->model_users->cid_exists()){
				$this->validate_status();
		} else{
			$this->form_validation->set_message('validate_cid', 'The CID you provided does not exist.');
		}

	} // End validate_cid()

	public function validate_status(){
		$this->load->model('model_users');

		if($this->model_users->cid_status()){
				// Execute vzctl script to start container

		} else{
			$this->form_validation->set_message('validate_cid', 'The CID you provided is already running.');
		}

	} // End validate_status()

}

/* End of file vzScripts.php */
/* Location: ./application/controllers/vzScripts.php */
