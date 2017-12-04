<?php
	$user = 'myuser';
	$password = 'mypass';
	$db = 'food_db';

	$db = mysqli_connect('localhost', $user, $password, $db) or die("Unable to connect " . mysql_error());
	$query = 'SELECT question FROM food_questions';
	$result = mysqli_query($db, $query) or die("Error");

	$questionArr = array();
	$data = mysqli_num_rows($result);
	if($data == 0){
		print ("No data inside db");
	}
	else{
		while($row = mysqli_fetch_array($result)){
			$questionArr[] = $row['question'];
		}
	}

?>

<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Food Quiz</title>
	<style type="text/css">
		body {
			background-size: 1450px;
			background-image: url('burger.jpg');
			font-family: "Palatino Linotype", serif;		
			text-align: center;
			font-weight: bold;
		}
		h1{
			color: white;
			font-size: 50px;
			text-align: center;
		}
		#q1,#q2,#q3,#q4,#q5,#q6,#q7,#q8,#q9,#q10{
			color: white;
			width: 450px;
			height: 200px;
			border: 5px solid white;
			font-weight: bold;
			display: none;
			
		}
		#submit{
			background-color: grey;
			right: 45%;
			top: 50%;
			border-radius: 12px;
			color: white;
			padding: 20px 40px;
			text-align: center;
			font-size: 100%;
			text-decoration: none;
			font-size: 16px;
		}
		#submit:hover {
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
  	</style>
</head>

<body>
	<form action="quiz_results.php" method="POST" accept-charset="utf-8">

		<h1>Questions</h1><br/>

		<div id="q1">
			<h3><?php echo $questionArr[0];?></h3>
			<label>a)True
				<input id="q1_ansA" type="radio" name="q1_answer" value="1">
			</label><br/>
			<label>b)False
				<input id="q1_ansB" type="radio" name="q1_answer" value="0">
			</label>
		</div>

		<div id="q2">
			<h3><?php echo $questionArr[1];?></h3>
			<label>a)True
				<input type="radio" name="q2_answer" value="1">
			</label><br/>
			<label>b)False
				<input type="radio" name="q2_answer" value="0">
			</label>
		</div>

		<div id="q3">
			<h3><?php echo $questionArr[2];?></h3>
			<label>a)True
				<input type="radio" name="q3_answer" value="1">
			</label><br/>
			<label>b)False
				<input type="radio" name="q3_answer" value="0">
			</label>
		</div>

		<div id="q4">
			<h3><?php echo $questionArr[3];?></h3>
			<label>a)True
				<input type="radio" name="q4_answer" value="1">
			</label><br/>
			<label>b)False
				<input type="radio" name="q4_answer" value="0">
			</label>
		</div>

		<div id="q5">
			<h3><?php echo $questionArr[4];?></h3>
			<label>a)True
				<input type="radio" name="q5_answer" value="1">
			</label><br/>
			<label>b)False
				<input type="radio" name="q5_answer" value="0">
			</label>
		</div>

		<div id="q6">
			<h3><?php echo $questionArr[5];?></h3>
			<label>a)True
				<input type="radio" name="q6_answer" value="1">
			</label><br/>
			<label>b)False
				<input type="radio" name="q6_answer" value="0">
			</label>
		</div>

		<div id="q7">
			<h3><?php echo $questionArr[6];?></h3>
			<label>a)True
				<input type="radio" name="q7_answer" value="1">
			</label><br/>
			<label>b)False
				<input type="radio" name="q7_answer" value="0">
			</label>
		</div>

		<div id="q8">
			<h3><?php echo $questionArr[7];?></h3>
			<label>a)True
				<input type="radio" name="q8_answer" value="1">
			</label><br/>
			<label>b)False
				<input type="radio" name="q8_answer" value="0">
			</label>
		</div>

		<div id="q9">
			<h3><?php echo $questionArr[8];?></h3>
			<label>a)True
				<input type="radio" name="q9_answer" value="1">
			</label><br/>
			<label>b)False
				<input type="radio" name="q9_answer" value="0">
			</label>
		</div>

		<div id="q10">
			<h3><?php echo $questionArr[9];?></h3>
			<label>a)True
				<input type="radio" name="q10_answer" value="1">
			</label><br/>
			<label>b)False
				<input type="radio" name="q10_answer" value="0">
			</label>
		</div><br>

		<button id="submit" name="submit" type="submit">Submit Quiz!</button><br/><br/>

	</form>

	<script>
		window.onload=function(){
				// document.getElementsByName("q1_answer")[0].addEventListener("click", startTimer);
				// document.getElementsByName("q1_answer")[1].addEventListener("click", startTimer);
				document.getElementById("q1_ansA").addEventListener("click", startTimer);
				document.getElementById("q1_ansB").addEventListener("click", startTimer);
				document.getElementById("submit").addEventListener("click", endTimer);
			};

		var length=0;
		var randomArr = new Array();
		var startTime;
		var endTime;

		while(length<6){
			var random = getRandom(); 
			if(!contains(randomArr, random)){
				randomArr.push(random);
				length++;
			}								
		}

		randomQuestion();

		//Functions

		//gets a random number between 1 and 10
		function getRandom() {
			return Math.floor(Math.random() * 10) + 1;
		}

		//check if array contains the current random number
		function contains(array, random){
			var i = array.length;
			while(i--) {
				if(array[i] === random){
					return true;
				}
			}
			return false;
		}
		
		function randomQuestion(){
			
			if(contains(randomArr, 1) ){
				document.getElementById("q1").style.display = "block";
			}
			if(contains(randomArr, 2) ){
				document.getElementById("q2").style.display = "block";
			}
			if(contains(randomArr, 3) ){
				document.getElementById("q3").style.display = "block";
			}
			if(contains(randomArr, 4) ){
				document.getElementById("q4").style.display = "block";
			}
			if(contains(randomArr, 5) ){
				document.getElementById("q5").style.display = "block";
			}
			if(contains(randomArr, 6) ){
				document.getElementById("q6").style.display = "block";
			}
			if(contains(randomArr, 7) ){
				document.getElementById("q7").style.display = "block";
			}
			if(contains(randomArr, 8) ){
				document.getElementById("q8").style.display = "block";
			}
			if(contains(randomArr, 9) ){
				document.getElementById("q9").style.display = "block";
			}
			if(contains(randomArr, 10) ){
				document.getElementById("q10").style.display = "block";
			}
		}

		function startTimer(){
			startTime = new Date();
		}

		function endTimer(){
			endTime = new Date();
			var total = endTime.getSeconds() - startTime.getSeconds();
			window.alert("You finished the quiz in " + total + " seconds");
		}

	</script>

</body>

</html>