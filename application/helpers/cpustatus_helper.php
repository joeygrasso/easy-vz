<?php
	
	function getCpuStatus(){
		
		// Execute the command that gets ram status and returns the output as an array.
		$output = shell_exec('mpstat');

		// Count the length of the $output array so we can loop through, blow it up, and make it easier to parse.
		$count = strlen($output);

		// for loop goes through the $output array and blows everything up so we can call specific data.
		for($i = 0; $i < $count; $i++){
			$elements = explode(" ",$output);
		}
		
		$user = $elements[45];
		$system = $elements[53];
		$idle = $elements[76];
		
		
		echo '
				<span class="text-muted"><text style="font-size: 1.75em;">
				<div id="cpubar" style="border: 2px solid;"><span style="position:absolute; margin-left:32%; margin-top:6px">'.$idle.'% Idle</span></div>
				<script>
					$( "#cpubar" ).progressbar({
					value: '.$idle.'
					});
				</script>
				User: '.$user.'% System: '.$system.'% Idle: '.$idle.'%
				</text>
				</span>
			 ';
		
	} // getCpuStatus() function

	

?>
