
<!DOCTYPE html>
<html>
<head>

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
  color:#ffffff
}
@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
</style>
</head>
<body>

<ul>
  <li><a href="selectclass.php" class=font2>Select class</a></li>
  <li><a href="createclass0.php">Create Class</a></li>
  <li><a href="quizzesmade.php">Quizzes made</a></li>   
  
</ul>

  <h1 class=font2><b>Quizzes made by you will appear here.</b></h1>
  
 
  
<?php
include 'db.php';
//session_start();
$username2=$_SESSION['username'];
//$subject=$_SESSION["subject"];
$q4="SELECT * from quiz WHERE tname='$username2'";
$result3=mysqli_query($connection,$q4);
//mysqli_fetch_array($result3);
//echo'hello';
if(mysqli_num_rows($result3) > 0){
while($row = $result3->fetch_assoc())
{
//$_SESSION['quizname']=$row['quizname'];
echo'<br><br><br><br>
<form method="post" action="display.php">
<input type="hidden" name="quizid" value='.$row['quizid'].'>
<button type="submit" class="glow-on-hover" value='.$row['quizname'].' name="qz">'.$row['quizname'].'</button>
</form> '; 
//echo'<br>'.$row['quizname'].'<br>';

}
}
?>  


</div>

</body>
</html>