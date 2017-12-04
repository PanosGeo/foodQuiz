<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Food Quiz</title>
	<style type="text/css">
		body{
			background: url("burger.jpg");
			text-align: center;
			background-size: 1450px;
		}
		h1{
			font-family: "Palatino Linotype", serif;			
			color: white;
			text-align: center;
			font-size: 60px;
		}
		.button{
			text-align: center;
		}
		#start{
			background-color: grey;
			position: fixed;
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
		#start:hover {
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}

  	</style>
</head>

<body>

<h1>Food Quiz!</h1>

<div class="button">
<button id="start" onclick="start_quiz()">Start Quiz!</button>
</div>

<script>
function start_quiz(){
	window.open("quiz.php","_self");
}
</script>

</body>
</html>