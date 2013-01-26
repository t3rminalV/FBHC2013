<?php
	
	function head() {
		echo "\n--------------------------------------------------";
		echo "\nAuthor: Adam James McKissock\nTitle: FBHC Qualification Round: Beautiful Strings\nDate: 25/01/2013";
		echo "\n--------------------------------------------------\n";
	}
	
	head();
	
	$ih = @fopen("input.txt","r");
	$lines = fgets($ih);
	$data = file("input.txt");

	for ($i = 2; $i <= $lines+1; $i++)
	{
		$line = $data[$i-1];
		$line = strtolower($line);
		$line = ereg_replace('[^a-z]', '', $line);
		$merged = count_chars($line, 1);

		arsort($merged);

		$worth = 26;
		$total = 0;

		foreach ($merged as $val) {
		    $total = $total + ($val*$worth);
		    $worth--;
		}
		echo "Case #".($i-1).": ".$total."\n";
	}
	fclose($file_handle);

	echo "\n\nExecution Complete!";
?>