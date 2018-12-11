<?php
	print "<h3> Refresh page </h3>";
	$name = "counter.txt";
	$file = fopen($name,"r");
	$hits = fscanf($file,"%d");
	fclose($file);
	$hits[0]++;
	$file = fopen($name,"w");
	fprintf($file,"%d",$hits[0]);
	fclose($file);
	print " Total number of visitors : ".$hits[0];
?>