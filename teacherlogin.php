<?php
 session_start();
$sql3=mysqli_connect('localhost','root','','classroom') or die("could not connect to database");

$tname=$_POST['namet'];
//$temail=$_POST['emailt'];
$tpassword=$_POST['passwordt'];
$tpassword1=md5($tpassword);
$query1="SELECT tname and tpassword from teacherdetails where tname='$tname' and tpassword='$tpassword1' ";
$result1=mysqli_query($sql3,$query1);
if(mysqli_num_rows($result1)==0)
{
	echo'Username doesnt exist';
}
else
{
	echo'logged in successfully';
	$_SESSION['username']=$tname;
	echo'<form method="post" action="quizzesmade.php">
	</form>';

	echo'<form method="post" action="selectclass.php">
	</form>';
	header("LOCATION: selectclass.php");
}
?>