<?php
	
	function head() {
		echo "\n--------------------------------------------------";
		echo "\nAuthor: Adam James McKissock\nTitle: FBHC Qualification Round: Balanced Smileys\nDate: 25/01/2013";
		echo "\n--------------------------------------------------\n";
	}

	head();
	
	/* File Handlers */
	$ih = @fopen("input.txt","r");
	$lines = fgets($ih);
	$data = file("input.txt");

	for ($i = 2; $i <= $lines+1; $i++)
	{
		$depth = 0;
		$line = $data[$i-1];
		if (stripos($line, ')') < stripos($line, '('))
		{
			$depth = 1; //Make it fail
		}
		else 
		{	
			$lefts = substr_count($line, ':(');
			$rights = substr_count($line, ':)');
			$line = str_replace(':)', '', $line);
			$line = str_replace(':(', '', $line);
			for ($j = 0; $j < strlen($line);$j++)
			{
				if ($line{$j} == '(') 
				$depth++;
				elseif ($line{$j} == ')')
				$depth--;
			}
			if ($rights == substr_count($line, '('))
			$depth = 0;
		}
		if ($depth == 0)
		$val = "YES";
		else 
		$val = "NO";
		$g = $i-1;
		echo "Case #".$g.": ".$val."\n";
	}
	fclose($ih);
?>