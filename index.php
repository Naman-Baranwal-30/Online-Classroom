<!DOCTYPE html>
<html lang="en" dir="ltr">
	<style>
body {
    
    background-image: url('https://www.leadquizzes.com/wp-content/uploads/2019/02/New-blog-graphic.jpg');
background-repeat: no-repeat;
background-size:cover;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #000066;
  position: relative;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align:center;
  padding: 34px 16px;
  text-decoration: none;
  font-family: 'Numans', sans-serif;
}

li a:hover:not(.active) {
  background-color: #660066;
}
div {
  height: 150p;
  width: 20p;
  background-color: black;
  background-position: absolute;
  margin:10px;
}

.glow-on-hover {
    width: 320px;
    height: 80px;
    border: none;
    outline: none;
    color: #ffffff;
    background: #660033;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
    font-size: 25px;
     font-weight: bold;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -5px;
    left:-5px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 8px);
    height: calc(100% + 8px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #660066
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: ff0000;
    left: 0;
    top: 0;
    border-radius: 10px;
}
.font1
{
  font-family: 'Numans', sans-serif;
  font-weight: bold;
  color:#ff0000
}
.font2
{
  font-family: 'Numans', sans-serif;
  font-weight: bold;
  color:#ffffff;
}
.font3
{
  font-family: 'Numans', sans-serif;
  font-weight: bold;
  color:#ffffff;
margin:10px;
}
.font4
{
  font-family: 'Numans', sans-serif;
  font-weight: bold;
  color:#ffffff;
  font-size: 25px;
  position: center;
}
.clr
{
    color:#00cc00;
}
.myButton {
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background-color:#0cd424;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family: 'Numans', sans-serif;
  font-weight: bold;
	font-size:13px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5d10d1;
}
.myButton:hover {
	background-color:#0061a7;
}
.myButton:active {
	position:relative;
	top:1px;
}
@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
</style>
<ul>
   <li><a href="selectclass.php" class=font2>Select class</a></li>
  <li><a href="createclass0.php">Create Class</a></li>
  <li><a href="quizzesmade.php">Quizzes made</a></li>   
   
  
</ul>



</html>
<?php
 //session_start();
include 'db.php';
$_SESSION["quizname"]=$_POST['qn'];
$quizname=$_SESSION["quizname"];
$quizsubject=$_SESSION["subject"];
$username=$_SESSION['username'];
echo'<p class=font4> QUIZ:   '.$_SESSION["quizname"].'<br><br>SUBJECT :   '.$_SESSION["subject"].'</p>';

$q3="SELECT * FROM quiz ";
if(mysqli_query($connection,$q3))
{
	//echo'executed sucessfully';
}
else
{
	echo'unsucessfull';
}

$c=mysqli_query($connection,$q3);
$count=mysqli_num_rows($c);
//echo'<br>'.$count.'<br>';
$classid=$_SESSION["ccode"];
$count=$count+1;
$q2="INSERT INTO quiz values ('$username','$count','$quizname','$quizsubject','$classid')";

//echo'<br>'.mysqli_query($connection,$q3).'<br>';
if(mysqli_query($connection,$q2))
{
	//echo'inserted sucessfully';
}
else
{
	//echo'failed';
}
//$_SESSION["subject"]=$_POST['class1'];
//echo''.$_SESSION["subject"].'';                 where quizsubject='$quizsubject'
?>
<html>
<form method="post" action="add.php" >
<input type="hidden" name="nu" value="<?php echo''.$_SESSION["quizname"].''; ?>">
<input class=myButton type="submit" value="ADD QUESTIONS" name="su">
</form>
		
	</div>
    

	</body>
</html>
