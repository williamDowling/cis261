<?php


	$num1 = mt_rand(10,100);

	echo "<h3>$num1</h3>\n";

	$isPrime = true;

	for($div=2;$div<$num1;$div++)
	{
		if($num1 % $div == 0)
		{
			$isPrime = false;
			break;
		}
	}

	if($isPrime)
	{
		echo "<h3>\$num1 is a prime number!</h3>";
	}
	else
	{
		echo "<h3>\$num1 is NOT a prime number!</h3>";
	};



?>