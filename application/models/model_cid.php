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
		
	}


?>