<?php

	for($num = 1; $num < 201; $num++)
	{
		$isPrime = true;
		for($div = 2;$div<$num;$div++)
		{
			if($num%$div == 0){
				$isPrime = false;
				break;
			}
		}
		if($isPrime)
		{
			echo "<p>$num is a prime number!</p>";
		}
		else
		{
			echo "<p>$num is not a prime number!</p>";	
		}
		
	}


?>