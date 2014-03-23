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
				
				$query = $this->db->get('containers');
				
				if($query->num_rows() == 1){	
					return false;
				} else {
					return true;
				}
		} // End cis_status
		
		// changeStatus() switches the status of the cid in the database
		// BEFORE stopped -> running AFTER
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
			
			$this->db->update('containers',$data);
		}
	}


?>