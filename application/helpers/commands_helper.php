<?php 
	// This helper will allow the vzScripts to be able to execute the commands for vzctl

		public function start($cid){
			$cmd = "vzctl start ".$cid;
			shell_exec($cmd);
		}

		public function stop($cid){
			$cmd = "vzctl stop ".$cid;
			shell_exec($cmd);
		}

		public function restart($cid){
			$cmd = "vzctl restart ".$cid;
			shell_exec($cmd);
		}


	}

?>
