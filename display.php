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
<p id="test"></p>
</html>
<?php
include'db.php';
$username3=$_SESSION['username'];
$quizname1=$_POST['quizid'];
$q5="SELECT * from questions where quizid='$quizname1'";
$r3=mysqli_query($connection,$q5);

if(mysqli_num_rows($r3) > 0){
	$i1=1;
while($row2 = $r3->fetch_assoc())
{
	echo'<br><div><br><p class=font3>QUESTION '.$i1.'<br>';
	$i1++;
	echo '<br>'.$row2['question_text'].'?</p><br>';
	$qno=$row2['question_number'];
$q6="SELECT * from options where tname='$username3' and quizid='$quizname1' and ";
$q6.="question_number='$qno'";
$r4=mysqli_query($connection,$q6);

if(mysqli_num_rows($r3) > 0){
$i=1;
echo'<button class="delete" id='.$qno.'>EDIT</button>';
while($row3 = $r4->fetch_assoc())
{
echo'<p class=font3 class=div1>OPTION '.$i.':';
echo ' '.$row3['coption'].'<p>';
$i++;
}}
}
echo'</div>';
}	
?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
<script>
$(document).ready(function(){
 //$("#div1").load("back1.php");
    // Delete 
    $('.delete').click(function(){
        var el = this;

        // Delete id
      var id = $(this).attr('id');
        
        var confirmalert = confirm("Are you sure?");
        if (confirmalert == true) {
            // AJAX Request
            $.ajax({
                url: 'edit.php',
                type: 'POST',
                data: { id:id },
                success: function(response){
    

   //                if(response == 1){
                        // Remove row from HTML Table
                           //  $(el).closest('tr').css('background','tomato');
                        //$(el).closest('tr').fadeOut(800,function(){
                          //  $(this).remove();
                        //});
                            $("#test").load("edit.php");
                       // });
                        
     //               }
                
            }
            });
        }
        });

     });
</script>