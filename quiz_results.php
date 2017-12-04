 <?php 
	
	$user = 'myuser';
	$password = 'mypass';
	$db = 'food_db';

	$db = mysqli_connect('localhost', $user, $password, $db) or die("Unable to connect " . mysql_error());
	$query = 'SELECT answer FROM food_questions';
	$result = mysqli_query($db, $query) or die("Error");

	$answerArr = array();
	$data = mysqli_num_rows($result);
	if($data == 0){
		print ("No data inside db");
	}
	else{
		while($row = mysqli_fetch_array($result)){
			$answerArr[] = $row['answer'];
		}
	}
		
   	$value1 = "";
   	$value2 = "";
   	$value3 = "";
   	$value4 = "";
   	$value5 = "";
   	$value6 = "";
   	$value7 = "";
   	$value8 = "";
   	$value9 = "";
   	$value10 = "";

	$totalCorrect=0;

	if(isset($_POST['submit']) ){
		if(!empty($_POST['q1_answer'])){ $value1 = $_POST['q1_answer']; }
		if(!empty($_POST['q2_answer'])){ $value2 = $_POST['q2_answer']; }
		if(!empty($_POST['q3_answer'])){ $value3 = $_POST['q3_answer']; }
		if(!empty($_POST['q4_answer'])){ $value4 = $_POST['q4_answer']; }
		if(!empty($_POST['q5_answer'])){ $value5 = $_POST['q5_answer']; }
		if(!empty($_POST['q6_answer'])){ $value6 = $_POST['q6_answer']; }
		if(!empty($_POST['q7_answer'])){ $value7 = $_POST['q7_answer']; }
		if(!empty($_POST['q8_answer'])){ $value8 = $_POST['q8_answer']; }
		if(!empty($_POST['q9_answer'])){ $value9 = $_POST['q9_answer']; }
		if(!empty($_POST['q10_answer'])){ $value10 = $_POST['q10_answer']; }

		if ($value1 == $answerArr[0]) { $totalCorrect++; }
		if ($value2 == $answerArr[1]) { $totalCorrect++; }
		if ($value3 == $answerArr[2]) { $totalCorrect++; }
		if ($value4 == $answerArr[3]) { $totalCorrect++; }
		if ($value5 == $answerArr[4]) { $totalCorrect++; }
		if ($value6 == $answerArr[5]) { $totalCorrect++; }
		if ($value7 == $answerArr[6]) { $totalCorrect++; }
		if ($value8 == $answerArr[7]) { $totalCorrect++; }
		if ($value9 == $answerArr[8]) { $totalCorrect++; }
		if ($value10 == $answerArr[9]) { $totalCorrect++; }	
	}
 ?> 
<!DOCTYPE html>	
<html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  	<title>Food Quiz</title>
  	<style type="text/css">
		body{
			background: url("burger.jpg");
			background-repeat: no-repeat;
			text-align: center;
			background-size: 1450px;
		}
		h3{
			color: white;
			font-size: 40px;
		}
		p{
			color: yellow;
			font-size: 20px;
		}
		#submit{
			width: 15%;
			background-color: grey;
			right: 45%;
			top: 50%;
			border-radius: 12px;
			color: white;
			padding: 20px 40px;
			text-align: center;
			font-size: 100%;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}
		#submit:hover {
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
  	</style>
  </head>
  <body>
	<form action="start_quiz.php" method="post"> 
	<h3>Your results:</h3><p> <?php echo ' Total Score: ' . $totalCorrect . '/6';?></p>
	<input type="submit" id="submit" value="Play Again?">
	</form>
	
  </body>
</html>