#!/usr/bin/php
<?php
	
	$array = array();
	$count = 0;
	$ref = 0;

	if ($argc != 2)
		echo "Invalid Parameters...\n";
	else
	{
		$array = explode(" ", $argv[1]);

		foreach ($array as $tmp)
		{
			if (!empty($tmp))
				$ref++;
		}

		unset($tmp);
		foreach ($array as $tmp)
		{
			if (!empty($tmp))
			{
				$count++;
				if ($count == $ref)
					echo "$tmp\n";
				else
					echo "$tmp ";	
			}
		}
		unset($tmp);
	}
?>
