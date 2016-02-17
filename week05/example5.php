<?php

	$passw = "";

	for($pw = 1; $pw < 10; $pw++)
	{
		$randNum = rand(35,125);
		while($randNum == 96 || $randNum == 108)
		{
			$randNum = rand(35,125);
		}
		$randChar = chr($randNum);
		$passw = $passw . $randChar;
	}

	echo "<p>Password = $passw</p>";
?>