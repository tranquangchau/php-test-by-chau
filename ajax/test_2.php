<?php 
	//DOC FILE
	$fileName="progress.txt";
	$myfile1 = fopen($fileName, "r");
	$progressStr = fgets($myfile1);
	fclose($myfile1);
	$progressNext = json_decode($progressStr);
	
	//XU LY BIEN
	$step = $progressNext->step;
	if($step>=100)
	{
		$step=0;
	}else
	{
		$step=$step+10;
	}
	//LUU FILE
	
	$progressNext->step=$step;
	//ghi file
	$progressStr = json_encode($progressNext);
	$myfile2 = fopen($fileName, "w");
	fwrite($myfile2, $progressStr);
	
	//tra ra trinh duyet de doc //dinh dang json
	echo $progressStr;
	
?>