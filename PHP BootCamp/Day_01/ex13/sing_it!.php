#!/usr/bin/php
<?php
	
	$array = preg_split("/[\s,]+/", $argv[1]);

	$newarr = array();
	foreach ($array as $tmp)
	{
		if (!empty($tmp))
			array_push($newarr, trim($tmp));
	}

	$count = -1;
	while (++$count < count($newarr))
	{
		if ($count == 0)
			$concat .= $newarr[$count];
		else
			$concat = $concat. " " . $newarr[$count];	
	}

	if (strcmp("Why this demo ?", $concat) == 0)
		echo "To avoid people noticing this while going over the subject briefly\n";
	else if (strcmp("Why this song ?", $concat) == 0)
		echo "Because we're all children inside\n";
	else if (strcmp("really ?", $concat) == 0)	
	{
		$int = rand(0 , 1);
		if ($int = 1)
			echo "No it's because it's april's fool\n";
		else
			echo "Yeah we really are all children inside\n";
	}
?>
