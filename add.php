<!DOCTYPE html>
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
<?php  include 'db.php';
//session_start();
$i=1;
//$_SESSION["subject"]//=$_POST['nu'];
if(isset($_POST['submit'])){

	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
$quizname=$_SESSION['quizname'];
	$username1=$_SESSION['username'];
	$quizsubject=$_SESSION["subject"];
	$q7="SELECT LAST_INSERT_ID() from quiz";
	//echo''.$q7.'';
	$q6="SELECT * FROM quiz where quizname='$quizname'";
	$r9=mysqli_query($connection,$q6);
	$r8=mysqli_query($connection,$q7);
	//$result1=mysqli_query($conn,$r8);
 
$row=mysqli_fetch_array($r8);
$row1=mysqli_fetch_array($r9);
$quizid=$row1['quizid'];
echo'quizid'.$quizid.''; 
//$code=$row[0];
//$code1=$row[1];
//	echo'code:'.$code.'<br>';
//	echo'code1:'.$code1.'<br>';
//	$q9="SELECT quizname from quiz where quizid='$code'";
//	$r9=mysqli_query($connection,$q9);
	$correct_choice = $_POST['correct_choice'];
	//echo ''.$quizsubject.' hello';
	// Choice Array
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	$choice[5] = $_POST['choice5'];

 // First Query for Questions Table

	$query = "INSERT INTO questions VALUES ('$username1','$quizname','$quizid','$quizsubject','$question_number','$question_text')";

	$result = mysqli_query($connection,$query);

	//Validate First Query
	if($result){
		foreach($choice as $option => $value){
			if($value != ""){
				if($correct_choice == $option){
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}
				
//Second Query for Choices Table
			$query1 = "INSERT INTO options (";
				$query1 .= "tname,quizname,quizid,question_number,is_correct,coption)";
				$query1 .= " VALUES (";
				$query1 .=  "'{$username1}','{$quizname}','$quizid','{$question_number}','{$is_correct}','{$value}' ";
				$query1 .= ")";

				$insert_row = mysqli_query($connection,$query1);
				// Validate Insertion of Choices

				if($insert_row){
					//$i++;
					//header("LOCATION: add.php");
					continue;
				}else{
					die("2nd Query for Choices could not be executed" . $query);
                      // echo'error';
				}

			}
		}
		$message = "Question has been added successfully";
	}
	else
	{
		echo'eroor';
	}






}

		$query = "SELECT * FROM questions";
		$questions = mysqli_query($connection,$query);
		$total = mysqli_num_rows($questions);
		$next = $total+1;


?>

<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<div class="container">

		</div>
	</header>

	<main>
			<div class="container">
				<h2 class=font3>Add A Question</h2>
				<?php if(isset($message)){
					echo "<h4>" . $message . "</h4>";
				} ?>

				<form method="POST" action="add.php">
						<p>
							<label class=font2>Question Number:</label>
							<input type="number" name="question_number" value="<?php echo $next;  ?>">
						</p>
						<p>
							<label class=font2>Question Text:</label>
							<input type="text" name="question_text">
						</p>
						<p>
							<label class=font2>Choice 1:</label>
							<input type="text" name="choice1">
						</p>
						<p>
							<label class=font2>Choice 2:</label>
							<input type="text" name="choice2">
						</p>
						<p>
							<label class=font2>Choice 3:</label>
							<input type="text" name="choice3">
						</p>
						<p>
							<label class=font2>Choice 4:</label>
							<input type="text" name="choice4">
						</p>
						<p>
							<label class=font2>Choice 5:</label>
							<input type="text" name="choice5">
						</p>
						<p>
							<label class=font2>Correct Option Number</label>
							<input type="number" name="correct_choice">
						</p>
						<input type="hidden" name="nu1" value="<?php echo $_SESSION["subject"]; ?>">
						
						<input type="submit" class="button" name="submit" value ="ADD">


				</form>
			</div>

	</main>


	<footer>



	</footer>








</body>
</html>
