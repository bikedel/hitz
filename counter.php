<?php

	if (file_exists('counterlog.txt')) 
	{
		$fil = fopen('counterlog.txt', r);
		$dat = fread($fil, filesize('counterlog.txt')); 
		echo $dat;
		fclose($fil);
		$fil = fopen('counterlog.txt', w);
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('counterlog.txt', w);
		fwrite($fil, 1);
		echo 1;
		fclose($fil);
	}
?>