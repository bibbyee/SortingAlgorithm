<?php

$array = [81,138,4,9,7,81,1,3,8,48,36,84,315,87,9,844,311,3,4,89,69,8944];

function heapSort(array $array)
{

	$t1 = microtime(true);
	 
	//php script here
	for($i = count($array) - 1; $i > 0; $i--)
	{
		for($j = $i; $j > 0; $j--)
		{
			heapAdjust($array, $j);
		}
		swap($array, $i, 0);
	}
	print_r($array);
	
	$t2 = microtime(true);
	echo (($t2-$t1)*1000).'ms';
}

function heapAdjust(array &$array, $j)
{
	if ($array[$j] > $array[floor($j/2)]) 
	{
		swap($array, $j, floor($j/2));
	}
}

function swap(array &$array, $i, $j)
{
	$temp = $array[$i];
	$array[$i] = $array[$j];
	$array[$j] = $temp;
}

heapSort($array);

?>