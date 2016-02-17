<?php

	$pattern = "/d/";

	$string = "hello there pardner";

	if(preg_match($pattern, $string))
	{
		echo "<p>Found the pattern</p>";
	}
	else
	{
		echo "<p>Did not find teh pattern</p>";
	}

?>