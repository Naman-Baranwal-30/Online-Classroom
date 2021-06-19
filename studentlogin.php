<?php
 session_start();

$sname1=$_POST['sname1'];
$sql5=mysqli_connect('localhost','root','','classroom') or die("could not connect to database");

//$sclass=$_POST['sclass'];
//$semail=$_POST['semail'];

$spassword2=$_POST['spass']; 
$spass1=md5($spassword2);
//md5;
$query3="SELECT sname and spassword from studentdetails where sname='$sname1' and spassword='$spass1' ";
$result3=mysqli_query($sql5,$query3);
$query4="SELECT stuid from studentdetails where sname='$sname1' and spassword='$spass1'";
$result4=mysqli_query($sql5,$query4);
$row = $result4->fetch_assoc();
$_SESSION['sid']=$row['stuid'];
echo''.$_SESSION['sid'].'';
//while ($row = $result4->fetch_assoc()) {
  //  echo' stuid'.$row['stuid'].'<br>';
//}
if(mysqli_num_rows($result3)==0)
{
	echo'Username doesnt exist';
}
else
{
	echo'logged in successfully';
header("LOCATION: joinclass.php");
}
?>