#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$arr = array();
		$count = 2;
		while ($count < count($argv))
		{
			$array = explode(":", $argv[$count]);
			if (strcmp($argv[1], $array[0]) == 0)
				array_push($arr, $array[1]);
			$count++;
		}
		$int = (count($arr) - 1);
		if (count($arr) != 0)
			echo "$arr[$int]\n";
	}
?>
