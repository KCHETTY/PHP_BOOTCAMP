#!/usr/bin/php 
<?php
	
	$tmp_array = array();
	$array = array();
	$count = 0;

	if ($argc > 1)
	{
		$tmp_array = explode(" ", $argv[1]);		
		
		foreach ($tmp_array as $tmp)
		{
			if (!empty($tmp))
				array_push($array, trim($tmp));
		}
		unset($tmp);
		unset($tmp_array);

		foreach ($array as $tmp)
		{
			if (count($array) > 1)
			{
				++$count;
				if (strcmp($tmp, $array[0]) == 0)
					$word = $tmp;
				else if ($count == count($array))
					echo "$tmp $word\n";
				else
					echo "$tmp ";
			}
			else
				echo "$tmp\n";
		}
		unset($tmp);
	}
?>
