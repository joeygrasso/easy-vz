<?php
	

	class Model_containers extends CI_Model {
		
		// Retrieve the containers table and display in tabular format on dashboard page.
		public function get_container_data(){
			return $this->db->query("SELECT * FROM containers");
		} // End get_container_data()


	} // End Class

?>