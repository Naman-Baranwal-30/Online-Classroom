   <?php
include'db.php';
$_SESSION["ccode"]=$_POST['classcode2'];
$cc=$_SESSION["ccode"];
$q1="SELECT * FROM class WHERE classcode='$cc'";
$result34=mysqli_query($connection,$q1);
$row1 = mysqli_fetch_assoc($result34);
$_SESSION["subject"]=$row1['subject'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Classroom</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!--Get your code at fontawesome.com-->

</head>

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
   <li><a href="selectclass.php" class=font2>Select class</a></li>
  <li><a href="createclass0.php">Create Class</a></li>
  <li><a href="quizzesmade.php">Quizzes made</a></li>   
    
  
</ul>
<?php
echo'<p class=font4> SUBJECT :   '.$_SESSION["subject"].'<br><br> CREATE QUIZ</p>';
?>
    <style>
        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        p {
            text-align: center;
            font-size: 24px;
        }

        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {
            background-color: #4CAF50;
        }

        .button2 {
            background-color: #f44336;
        }
    </style>

    <form method="post" action=index.php>
    
    <i class="fas fa-band-calendar-alt"></i>


    <p><br /><br />
        <p class=font3>Enter quizname: <input type="text" name="qn"></p>
        <br /><br /><br />
         </p>
    <br/><br/><br/>
    <input type=submit  class="myButton">
    </form>
   
</body>

</html>
