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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>
		<div class="leftBC"></div>

		<div class="rightBC">
			<h4>WELCOME to</h4>
			<h3>Pageant Judging System</h3>
			<h2>2016</h2>
			<form id="passcode_Input" action = "" method = "post">
				<div class="form-group enterPasscode">
					<input type="PASSWORD" class="form-control align-center" id="passcode" name="passcode" placeholder="Passcode" >
					<br>
					<!--<input type="submit" value="Log in" name="btnSubmit" class="btn btn-success">-->
				</div>
			</form>
			<p>Develop by LabradrorVerdeVillaverVillete</p>
		</div>

<script>
	$(document).ready(function(){
		$('#passcode').bind('keyup', function(e){
	      if (($(this).val().length) == 4){
	      	$("#passcode_Input").submit();
	      }
		});
	});

</script>

</body>
</html>

<?php
	if(isset($_POST["passcode"])){
		$passcode = $_POST["passcode"];
		$loginq = "select * from judges where access_key='".$passcode."'";
		/*$loginq = "SELECT * FROM ";
		$loginq .= "judges";
		$loginq .= "WHERE access_key ='";
		$loginq .= $passcode;
		$loginq .= "'";*/

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
		