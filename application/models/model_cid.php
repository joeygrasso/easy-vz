<?php

	class Model_cid extends CI_Model {
		
		public function cid_exists(){
				$this->db->where('cid', $this->input->post('cid'));
				
				$query = $this->db->get('containers');
				
				if($query->num_rows() == 1){	
					return true;
				} else {
					return false;
				}
		} // End cid_exists

		public function cid_status(){
				$this->db->where('status', $this->input->post('status'));
				$this->db->where('cid', $this->input->post('cid'));

				$query = $this->db->get('containers');
				
				if($query->num_rows() == 1){	
					return false;
				} else {
					return true;
				}
		} // End cis_status
		
		// changeStatus() switches the status of the cid in the database
		// BEFORE stopped -> running AFTER
		// Restart is always running.
		public function changeStatus(){
			$this->db->where('cid', $this->input->post('cid'));
			$query = $this->db->get('containers');
			$result = $query->row();

			if ( $this->input->post('status') == "Restart"){
				$data = array('status' => 'Running');
			} else if ($result->status == "Running"){
				$data = array('status' => 'Stopped');
			} else {
				$data = array('status' => 'Running');
			}
			
			// Select the proper row again and update.
			$this->db->where('cid', $this->input->post('cid'));
			$this->db->update('containers',$data);
		} // End change_status()

		// Removes a container form the database based on the cid provided
		public function remove_container(){
			$this->db->where('cid', $this->input->post('cid'));
			$this->db->delete('containers'); 
		} // End remove_container()

		// Creates a new row in the database after the create form is submitted
		public function create_container(){
			// Get Elements
			$cid = $this->input->post('cid');
			$hostname = $this->input->post('hostname');
			$operating_system = $this->input->post('operatingsystem');
			$ip_address = $this->input->post('ip_address');
			$ram = $this->input->post('ram');
			$hard_drive = $this->input->post('harddrive');

			// Put the elements in an array
			$data = array(
               'cid' 				=> $cid,
               'hostname' 			=> $hostname,
               'operating_system' 	=> $operating_system,
               'ip_address'			=> $ip_address,
               'ram'				=> $ram,
               'hard_drive'			=> $hard_drive,
               'status'				=> 'Stopped'
            );

			// Insert the values into the database
			$this->db->insert('containers', $data); 
		
		} // End create_container()

		// Modifies a row in the database after the modify form is submitted
		public function modify_container(){

		}
	}


?>