<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}
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


.active {
  background-color: #4CAF50;
}
.button {
  border: none;
  color: white;
  padding: 15px 140px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 32px;
  margin: 4px 2px;
  cursor: pointer;
}




.subject input{
	width: 30em;
	margin-top: 100px;
	margin-left:15px;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 5px;
	position: left;
}

.teachername input{

	width: 30em;
	margin-top:10px;
	margin-left:15px;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 5px;
	position: left;
}

.submit{
  margin-left: 15px;
  position: left;
}

.glow-on-hover {
    width: 70px;
    height: 40px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
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
    color: #000
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
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}




.subject, .teachername, .submit{
  text-align: center;
}
</style>
<style>

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
<ul>
  <li><a href="selectclass.php">Select class</a></li>
<li><a href="createclass.php">Create Class</a></li>
  <li><a href="quizzesmade.php">Quizzes made</a></li>

</ul>
<body>
<form action="createclass.php" method="post">

<div class="subject">
	<input type="text" name="subject" id="subject" placeholder="Enter Subject"><br>
</div>
<div class="teachername">
  <input type="text" name="tname" id="tname" placeholder="Enter Name of Teacher"><br> 
</div>
<br>

<div class="submit">
 <button type="submit" value="submit" class="glow-on-hover">Submit</button>
</div>
</form>
</body>
</html>