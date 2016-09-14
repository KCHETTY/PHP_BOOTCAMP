#!/usr/bin/php 
<?php

	function ft_is_sort($arr)
	{
		$temp = $arr;
		sort($arr);
		if ($temp != $arr)
			return (FALSE);
		else
			return (TRUE);
	}
?>





