<?php
foreach($_REQUEST as $key => $value)
{
if($key =="id"){
$unit = $value;

}	
if($key =="pw"){
$pass = $value;
}	
if($key =="un"){
$update_number = $value;

}
echo "update nilai",$update_number;
if($update_number == 1)
{
	if($key =="n1"){
		$sent_nr_1 = $value;
	}			
}
else if($update_number == 2)
{
	if($key =="n2"){
	$sent_nr_2 = $value;
	}			
}
else if($update_number == 3)
{
	if($key =="n3"){
	$sent_nr_3 = $value;
	}			
}
}
include("database_connect.php");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if($update_number == 1)
	{   $sent_nr_2 =rand(10, 100);
	    $sent_nr_3=rand(10, 100);
		$sent_nr_12 =rand(10, 100);
		$sent_nr_13 =rand(10, 100);
		$sent_nr_14 =rand(10, 100);
		$sent_nr_15 =rand(10, 100);
		$sent_nr_16 =rand(10, 100);
		$sent_nr_22 =rand(10, 100);
		$sent_nr_23 =rand(10, 100);
		$sent_nr_24 =rand(10, 100);
		$sent_nr_25 =rand(10, 100);
		$sent_nr_26 =rand(10, 100);
		$sent_nr_32 =rand(10, 100);
		$sent_nr_33 =rand(10, 100);
		$sent_nr_34 =rand(10, 100);
		$sent_nr_35 =rand(10, 100);
		$sent_nr_36 =rand(10, 100);
	    $date = date("Y-m-d");
$time = date("H:i:s");

//mysqli_query($con,"INSERT INTO esptable_nd5 VALUES ("$sent_nr_1,$sent_nr_2,$sent_nr_3)");	    
mysqli_query($con,"INSERT INTO esptable_nd7 (date, time, SENT_NUMBER_1, SENT_NUMBER_2, SENT_NUMBER_3) VALUES ('$date','$time','$sent_nr_1','$sent_nr_2','$sent_nr_3')");	
mysqli_query($con,"INSERT INTO esptable_nd8 (date, time, SENT_NUMBER_1, SENT_NUMBER_2, SENT_NUMBER_3) VALUES ('$date','$time','$sent_nr_12','$sent_nr_22','$sent_nr_32')");	
mysqli_query($con,"INSERT INTO esptable_nd9 (date, time, SENT_NUMBER_1, SENT_NUMBER_2, SENT_NUMBER_3) VALUES ('$date','$time','$sent_nr_13','$sent_nr_23','$sent_nr_33')");	
mysqli_query($con,"INSERT INTO esptable_nd10 (date, time, SENT_NUMBER_1, SENT_NUMBER_2, SENT_NUMBER_3) VALUES ('$date','$time','$sent_nr_14','$sent_nr_24','$sent_nr_34')");	
mysqli_query($con,"INSERT INTO esptable_nd11 (date, time, SENT_NUMBER_1, SENT_NUMBER_2, SENT_NUMBER_3) VALUES ('$date','$time','$sent_nr_15','$sent_nr_25','$sent_nr_35')");	
mysqli_query($con,"INSERT INTO esptable_nd12 (date, time, SENT_NUMBER_1, SENT_NUMBER_2, SENT_NUMBER_3) VALUES ('$date','$time','$sent_nr_16','$sent_nr_26','$sent_nr_36')");		
}
else if($update_number == 2)
	{
	    $sent_nr_1 =rand(10, 100);
	    $sent_nr_3=rand(10, 100);
		mysqli_query($con,"INSERT INTO ESPtable2 (SENT_NUMBER_1, SENT_NUMBER_2, SENT_NUMBER_3) VALUES ($sent_nr_1,$sent_nr_2,$sent_nr_3)");	
	}
else if($update_number == 3)
	{
	    $sent_nr_2 =rand(10, 100);
	    $sent_nr_1=rand(10, 100);
		mysqli_query($con,"INSERT INTO ESPtable2 (SENT_NUMBER_1, SENT_NUMBER_2, SENT_NUMBER_3) VALUES ($sent_nr_1,$sent_nr_2,$sent_nr_3)");	
	}
date_default_timezone_set('UTC');
$t1 = date("gi");
?>