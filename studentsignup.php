<?php
 session_start();
$sql4=mysqli_connect('localhost','root','','classroom') or die("could not connect to database");

$sname=$_POST['sname'];
$semail=$_POST['semail'];
$spassword=$_POST['spassword']; 
$sclass=$_POST['sclass'];
$spassword1=md5($spassword);
$query2="INSERT into studentdetails(sname,syear,semail,spassword) VALUES('$sname','$sclass','$semail','$spassword1')";
$result2=mysqli_query($sql4,$query2);
if($result2)
{
	$_SESSION['username']=$sname;
	echo'registration succesfull';
	header("LOCATION: joinclass-rohan.php");
}
else
{
	echo'registration unsucessfull';
}
?>