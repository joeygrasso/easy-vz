<?php 
	// This helper will allow the vzScripts to be able to execute the commands for vzctl

		function start($cid){
			$cmd = "sudo vzctl start ".$cid;
			shell_exec($cmd);
		}

		function stop($cid){
			$cmd = "sudo vzctl stop ".$cid;
			shell_exec($cmd);
		}

		function restart($cid){
			$cmd = "sudo vzctl restart ".$cid;
			shell_exec($cmd);
		}

		function destroy($cid){
			$cmd = "sudo vzctl destroy ".$cid;
			shell_exec($cmd);
		}

?>