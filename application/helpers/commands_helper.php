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

		function create($cid, $hostname, $password, $ip_address, $ram, $diskspace){
			// Convert the Gigabyte user input to kilobytes for openVZ
			$diskSpace = $gigabyte * 1048576;

			// Run The Creation Script
			// vzctl create CTID [--ostemplate name] [--diskspace kbytes] [--ipadd addr] [--hostname name]
			$cmd = "sudo vzctl create ".$cid." --ostemplate centos-6-x86_64 --ipadd ".$ip_address."--hostname ".$hostname;
			shell_exec($cmd);

			// Run the Modify Script To Configure The Additional Options
			// vzctl set CTID [--userpasswd password] [--vmguarpages 512M] [--oomguarpages 512M] [--diskspace $SoftLimit$:$HardLimit$] --save
			$cmd = "sudo set ".$cid." --userpasswd root:".$password." --vmguarpages ".$ram."M --oomguarpages ".$ram."M --diskspace ."$diskspace."G:".$diskspace"G --save";
			shell_exec($cmd);
		}
?>