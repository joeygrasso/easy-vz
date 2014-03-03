<?php
	
	function getRamStatus(){
 
		// Execute the command that gets ram status and returns the output as an array.
        $output = shell_exec('free -m');

        // Count the length of the $output array so we can loop through, blow it up, and make it easier to parse.
        $count = strlen($output);

        // for loop goes through the $output array and blows everything up so we can call specific data.
        for($i = 0; $i < $count; $i++){
                $elements = explode(" ",$output);
        }

				// The array length can change base on how much memory is in use. The amount of RAM available is always the last element. 
				// so you get the count of all the elements and subtract one to get the right value.
                $total = $elements[count($elements)-1] + 1;
                $used = $elements[59];
                $remaining = $total - $used;
                $percent  = round(($used / $total) * 100);
		        
        echo '
				<span class="text-muted"><text style="font-size: 1.75em;">
				<div id="rambar" style="border: 2px solid;"><span style="position:absolute; margin-left:32%; margin-top:6px">'.$percent.'% Used</span></div>
				<script>
					$( "#rambar" ).progressbar({
					value: '.$percent.'
					});
				</script>
				Size: '.$total.'MB Used: '.$used.'MB Free: '.$remaining.'MB
				</text>
				</span>
			 ';
		
	} // getRamStatus() function


?>
