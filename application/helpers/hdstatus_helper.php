<?php
	
	function getHdStatus(){
		// Execute the command that gets hd status and returns the output as an array.
        // /dev/mapper/vg_openvz-lv_root is the only partition that matters.
        $command = "df -h /dev/mapper/vg_openvz-lv_root";
        $output = Array();
        exec($command, $output);

        // Count the length of the $output array so we can loop through, blow it up, and make it easier to parse.
        $count = count($output);

        // for loop goes through the $output array and blows everything up so we can call specific data.
        // $i=1 so we skip the first row with all the header information. Set $i == 0 if you want that shit.
        for($i = 1; $i < $count; $i++){
                $elements = explode(" ",$output[$i]);
        }
		
		// Get Percentage Remaining For Progress Bar
		$rawPercent = $elements[10];
		$usePercent = substr($rawPercent, 0, 2);
		$remaining = 100 - (int)$usePercent;
		        
        echo '
				<span class="text-muted"><text style="font-size: 1.75em">Size: '.$elements[3].'<br />Used: '.$elements[5].'<br />Available: '.$elements[8].'
				<div id="progressbar" style="border: 2px solid;"><span style="position:absolute; margin-left:15%; margin-top:6px">'.$usePercent.'% Used</span></div>
				<script>
					$( "#progressbar" ).progressbar({
					value: '.$usePercent.'
					});
				</script>
				</text>
				</span>
			 ';

	} // HdStatus() function
?>
