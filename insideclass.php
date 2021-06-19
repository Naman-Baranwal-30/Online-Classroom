<html>
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
}
.clr
{
    color:#00cc00;
}
.myButton {
    box-shadow:inset 0px -3px 7px 0px #3dc21b;
    background:linear-gradient(to bottom, #0de32d 5%, #5cbf2a 100%);
    background-color:#0de32d;
    border-radius:3px;
    border:1px solid #18ab29;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    padding:9px 23px;
    text-decoration:none;
    text-shadow:0px 1px 0px #2f6627;
    object-position: center;

}
.myButton:hover {
    background:linear-gradient(to bottom, #5cbf2a 5%, #0de32d 100%);
    background-color:#5cbf2a;
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
  <li><a href="joinclass.php" class=font2>Join Class</a></li>
  <li><a href="classshelf.php">Class Shelf</a></li>
  <li><a href="grades.php">Grades</a></li>   
  
</ul>
    </style>
</html>
<?php
include'db.php';
$classcode=$_POST['classid'];
//echo''.$classcode.'';
$_SESSION['ccode']=$classcode;
$id=$_SESSION['sid'];
echo''.$id.'';
$q9="SELECT * FROM quiz where classcode='$classcode' ";
$result3=mysqli_query($connection,$q9);
//mysqli_fetch_array($result3);
echo '<p class=font4>Quizzes in Class</p>';
if(mysqli_num_rows($result3) > 0){
while($row = $result3->fetch_assoc())
{
//$_SESSION['quizname']=$row['quizname'];
echo'<br><br><br><br><br><br>
<div id="mySidenav" class="sidenav">
        <form method="post" action="temp.php"  id="about">
       <input type="hidden" name="quizid" value='.$row['quizid'].'>
     
      <button type="submit" value='.$row['quizname'].' name="class1" class="glow-on-hover">'.$row['quizname'].'</button>
        </form>';
}
}
else
{

	echo'All Quizzes Attempted';
}
?>