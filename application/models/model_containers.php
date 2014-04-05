<?php
	

	class Model_containers extends CI_Model {
		
		// Retrieve the containers table and display in tabular format on dashboard page.
		public function get_container_data(){
			return $this->db->query("SELECT * FROM containers");
		} // End get_container_data()

		// Retrieve a specific container row
		public function get_cid_data($cid){
			return $this->db->get_where('containers', $cid);
		} // End get_cid_data

	} // End Class

?>