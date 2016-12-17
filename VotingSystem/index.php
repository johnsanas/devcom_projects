<!DOCTYPE html>
<?php include('resources.php'); ?>
<html>

<head>
	<title>USC Election 2016</title>
		<link rel="icon" type="image/ico" href="img/umak.png">
	<link rel="stylesheet" type="text/css" href="css/index.css">

<style type="text/css">
body {
	font-family: century gothic;
	background: url(images/backgroundNew4.jpg);
	background-size: 100%;
}



</style>

</head>

<body onload = "disp_time()">

<script>
	myVar = setInterval("disp_time()",1000);
	
	function addZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
	}
	
	function disp_time(){
		var x = new Date();
		var hh = addZero(x.getHours());
		var mm = addZero(x.getMinutes());
		var ss = addZero(x.getSeconds());
		document.getElementById('nudate').innerHTML= hh + ":" + mm + ":" + ss;
	}
	
	document.onkeydown = function (e) {
	if((e.which == 123)||e.which == 122){
		alert("This key is disabled by the developers of the system.\n\nLabrador,Verde,Villaver");
		return false;
	}
}
</script>

<div class="heading">

	<p class="eventName">Election</p>
	<p class="eventOrganizer">University Student</p>
	<p class="eventOrganizer2">Council</p>
	<p class="year">2016</p>
</div>


<div class="userlogin">

	<div class="logos">

		<div class="ssglogo">
			<img src="images/umak.png">
		</div>

		<div class="umaklogo">
			<img src="images/ssg.png">
		</div>
	</div>

	<div class="logform">

		<div class="propic">
			<img src="images/classprofile.png">
		</div><br>

		<!--<form action = "voting.php" method = "post">-->
		<form action = "" method = "post">
			<table>
				<tr>
					<td><label>Student Number:</label></td>
				</tr>
				<tr>
					<td><input type="text" name = "student_id" maxlength = "9" AUTOFOCUS="AUTOFOCUS"></td>
				</tr>

			</table>
				<center>
					<input type="submit" name="btnSubmit" value="LOGIN">
				</center>
		</form>
	</div>

</div>

<div class="time">
	<div class="date" style="width:330px">
		<p id="month">SEPT</p>
		<p id="day"><?php echo date("l");?></p>
		<p id="nuday"><?php echo date("d"); ?></p>
		<p id="nudate"></p>
	</div>
</div>

</body>

</html>

<?php
   if(isset($_POST["btnSubmit"])){
      $username = filter_var($_POST["student_id"],FILTER_SANITIZE_STRING);

      $loginq = "select * from enabled_students where student_id='".$username."'";
      $loginr = mysqli_query($conn,$loginq);
		
      if(mysqli_num_rows($loginr)==0){
         echo("<script>alert('Wrong ID number, or not yet activated');</script>");
      }
      //successful login
      else{
			$row = mysqli_fetch_assoc($loginr);
			if($row['already_voted']==1){
				echo("<script>alert('You have voted already');window.location='index.php';</script>");	
			}
			else{
				$_SESSION['student_id'] = $row['student_id'];
				// echo($_SESSION['student_id']);
				insert_log($row['student_id'],"Logged in to the voting system (voter)",null);
				echo("<script>window.location='voting.php';</script>");
			}    
      }
   }
?>