<?php
require("connection.php");
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Mr. and Mrs. Umak | LOGIN</title>
	<link rel="icon" type="image/ico" href="img/pageantLogo.png">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
	<script type="text/javascript" href="js/bootstrap/bootstrap.js"></script>

</head>

<body>
		<div class="leftBC"></div>

		<div class="rightBC">
			<h4>WELCOME to</h4>
			<h3>Pageant Judging System</h3>
			<h2>2016</h2>
			<form action = "" method = "post">
				<div class="form-group enterPasscode">
					<input type="text" class="form-control" id="passcode" name="passcode" placeholder="Please enter your passcode here..">
					<br>
					<input type="submit" text="Submit" name="btnSubmit" class="btn btn-success">
				</div>
			</form>
			<p>Develop by LabradrorVerdeVillaverVillete</p>
		</div>


</body>
</html>

<?php
	if(isset($_POST["btnSubmit"])){
		$passcode = $_POST["passcode"];
		$loginq = "select * from judges where access_key='".$passcode."'";
		$loginr = mysqli_query($conn,$loginq);

		if(mysqli_num_rows($loginr)==0){
			echo("<script>alert('Wrong access key');</script>");
		}
		else{
			$row = mysqli_fetch_assoc($loginr);
			session_start();
			$_SESSION["judge_id"] = $row['id'];
			echo("<script>window.location='category.php';</script>");
		}
	}
?>


<!--COMMIT NI ALDWIN KO joke ni Rosel yieee bawasan ko-->
		