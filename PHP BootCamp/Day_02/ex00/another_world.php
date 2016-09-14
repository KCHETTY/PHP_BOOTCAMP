#!/usr/bin/php
<?php
	$array = array();
	
	if ($argc == 1)
		echo "Missing Parameters...\n";
	else
	{
		$array = preg_split("/[\s,]+/", $argv[1]);

		foreach ($array as $tmp)
		{
			if (!empty($tmp))
			{
				$tmp = trim($tmp);
				if (strcmp($tmp, $array[count($array)]))
					echo "$tmp\n";
				else
					echo "$tmp ";
			}
		}
		unset($tmp);
	}
?>
