<?php
	
	function head() {
		echo "\n--------------------------------------------------";
		echo "\nAuthor: Adam James McKissock\nTitle: FBHC Qualification Round: Program\nDate: 25/01/2013";
		echo "\n--------------------------------------------------";
	}

	function readf() {
		$file_handle = fopen("input.txt", "r");
		while (!feof($file_handle)) {
		   $data = $data . fgets($file_handle);	   
		}
		fclose($file_handle);
		return $data;
	}
	
	function writef($data) {
		$file_handle = fopen("output.txt", "w");
		fwrite($file_handle, $data);
		fclose($file_handle);
	}
	
	head();


	$stuff = readf();

	
	


	
	writef($stuff);



	echo "\n\nExecution Complete!";
?>