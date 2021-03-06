<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vzScripts extends CI_Controller {

	// Start, Stop, or Restart a Container based on its CID
	public function startStop(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('cid', 'cid', 'required|xss_clean|callback_validate_cid');
		
		if($this->form_validation->run()){
			// echo "Whatever code is here gets executed when the CID exists.";
		} else {
			// Get container db table data to display on page.
			$this->load->model('model_containers');
			$arr['data'] = $this->model_containers->get_container_data();

			$arr['msg'] = '<script> alert("The CID field is required.")</script>';
			$this->load->view('dashboard_view', $arr);
		}
	} // end start()

	public function validate_cid(){
		
		$this->load->model('model_cid');
		
		if($this->model_cid->cid_exists()){
			$this->validate_status();
		} else{
			// Get container db table data to display on page.
			$this->load->model('model_containers');
			$arr['data'] = $this->model_containers->get_container_data();

			$arr['msg'] = '<script> alert("The CID you provided does not exist.")</script>';
			$this->load->view('dashboard_view', $arr);
		}

	} // End validate_cid()

	public function validate_status(){
		$this->load->model('model_cid');

		if($this->model_cid->cid_status()){
			// Call changeStatus() in model_cid
			$this->model_cid->changeStatus();

			// Get container db table data to display on page.
			$this->load->model('model_containers');
			$arr['data'] = $this->model_containers->get_container_data();

			switch ($this->input->post('status')) {
				case 'Restart':
					$arr['msg'] = '<script> alert("The container is being restarted.")</script>';
					$this->load->helper('commands');
			       	restart($this->input->post('cid'));
					break;

				case 'Running':
					$arr['msg'] = '<script> alert("The container is being started.")</script>';
					$this->load->helper('commands');
			    	start($this->input->post('cid'));
			    	break;

				case 'Stopped':
					$arr['msg'] = '<script> alert("The container is being stopped.")</script>';
					$this->load->helper('commands');
			    	stop($this->input->post('cid'));
					break;

				case 'Remove':
					$arr['msg'] = '<script> alert("The container is being destroyed.")</script>';
					$this->load->helper('commands');
			    	destroy($this->input->post('cid'));
			    	$this->model_cid->remove_container();
					break;

				case 'Modify':
					//Blah Blah
					break;

				default:
					// Get container db table data to display on page.
					$this->load->model('model_containers');
					$arr['data'] = $this->model_containers->get_container_data();
					if ($this->input->post('status') == "Running"){
						$arr['msg'] = '<script> alert("The CID you provided is already running.")</script>';
						$this->load->view('dashboard_view', $arr);
					} else if ($this->input->post('status') == "Restart"){
						$arr['msg'] = '<script> alert("The Container is being restarted.")</script>';
						$this->load->view('dashboard_view', $arr);
					} else if ($this->input->post('status') == "Remove"){
						$arr['msg'] = '<script> alert("The Container cannot be removed.")</script>';
						$this->load->view('dashboard_view', $arr);
					} else if ($this->input->post('status') == "Stopped"){
						$arr['msg'] = '<script> alert("The CID you provided is already stopped.")</script>';
						$this->load->view('dashboard_view', $arr);
					} else{
						$arr['msg'] = '<script> alert("What have you done?")</script>';
						$this->load->view('dashboard_view', $arr);
					}
					break;
			} // End Switch Statement

			// Load The Dashboard View With The Appropriate Message
			// Get container db table data to display on page.
			$this->load->model('model_containers');
			$arr['data'] = $this->model_containers->get_container_data();
			$this->load->view('dashboard_view', $arr);
		} else{
			// Get container db table data to display on page.
			$this->load->model('model_containers');
			$arr['data'] = $this->model_containers->get_container_data();
			if ($this->input->post('status') == "Running"){
				$arr['msg'] = '<script> alert("The CID you provided is already running.")</script>';
				$this->load->view('dashboard_view', $arr);
			} else if ($this->input->post('status') == "Restart"){
				$arr['msg'] = '<script> alert("The Container is being restarted.")</script>';
				$this->load->view('dashboard_view', $arr);
			} else if ($this->input->post('status') == "Stopped"){
				$arr['msg'] = '<script> alert("The CID you provided is already stopped.")</script>';
				$this->load->view('dashboard_view', $arr);
			} else{
				$arr['msg'] = '<script> alert("What have you done?")</script>';
				$this->load->view('dashboard_view', $arr);
			}

		}

	} // End validate_status()

	public function create_container(){
		// Send Form Data to Creation Script
		$this->load->helper('commands');
		create($this->input->post('cid'),$this->input->post('hostname'),$this->input->post('password'),$this->input->post('ip_address'),$this->input->post('ram'),$this->input->post('harddrive'));

		// Send Form Data to Database Script
		$this->load->model('model_cid');
		$this->model_cid->create_container();
		
		// Get container db table data to display on page.
		$this->load->model('model_containers');
		$arr['data'] = $this->model_containers->get_container_data();
		$arr['msg'] = '<script> alert("The container is being created. Please wait 5 minutes before using it.")</script>';
		$this->load->view('dashboard_view', $arr);
	} // End create_container()

	public function modify_container(){
		// Send Form Data to Creation Script
			// code

		// Send Form Data to Database Update Script
		$changes = array(
			"hostname"		=> $this->input->post('hostname'),
			"ram"			=> $this->input->post('ram'),
			"hard_drive"	=> $this->input->post('harddrive')
			);
		
		$this->load->model('model_cid');
		$this->model_cid->modify_container($changes);

		// Get container db table data to display on page.
		$this->load->model('model_containers');
		$arr['data'] = $this->model_containers->get_container_data();
		$arr['msg'] = '<script> alert("The container has been modified. Please wait 5 minutes before using it.")</script>';
		$this->load->view('dashboard_view', $arr);
	} // End create_container()

} // End Class

/* End of file vzScripts.php */
/* Location: ./application/controllers/vzScripts.php */
