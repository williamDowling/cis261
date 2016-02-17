<?php

$lcv = 1;
$randNum = rand(); //0-32767 (the maximum number you can store in 15 bits);
$mtRand = mt_rand(); // 0-2147483647 (maximum number you can store in 31 bits)
$minMaxRand = rand(80,100); // generates a random number between 79-101 (80 and 100 are included in the results set);
$mtMinMaxRand = mt_rand(80,100); // 


//
//	While loop structure
//
/*
while($lcv<10){
	echo "<p>$lcv</p>";
	$lcv++;
}
*/


//--------------------------


//
//	Do While Loop structure
//
do 
{
	echo "<p>$lcv</p>";
	$lcv++;

}while($lcv < 10);

//-------------------------

//
// 
//

echo 


/*
DON'T WRITE LOGIC LIKE THIS:

while(true){
	if (something){
		do something
	}
	else if(something else){
		break;
	}
	})
}
*/


?>