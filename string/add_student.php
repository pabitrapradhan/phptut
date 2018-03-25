<?php
//print_r($_POST);
$con=mysqli_connect("localhost","root","root",'pabitra') or die('error');

//Array ( [student] => s [roll] => 1 ) 

$stdname =  $_POST['student'];
$stdroll =  $_POST['roll'];
//$spl1="INSERT INTO project ('name', 'roll') VALUES (".$stdname.",".$stdroll.")";

//echo $spl1; exit();
$query = "INSERT INTO `project` (`name`, `roll`) VALUES ('".$stdname."','".$stdroll."')";
//echo $query;
$sql=mysqli_query($con, $query);


if($sql==true)
{
	echo "true";
}
else
{
	echo "false";
}

