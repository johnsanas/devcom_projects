<?php
   session_start();
   $conn = mysqli_connect("localhost","root","","usc_voting");


   function loggedin()
{
	if (isset($_SESSION['Username']) || isset($_COOKIE['Username']))
	{
		$loggedin = TRUE;
		return $loggedin;

	}
}

	function insert_log($user,$action,$receiver){
		$conn = mysqli_connect("localhost","root","","usc_voting");
		// if(isset($receiver)){
		// 	echo("<script>alert('true');</script>");
		// 	$query = "insert into logs(user,description,receiver,date_time) values('".$user."','".$action."',null,now()";
		// }
		// else{
		// 	echo("<script>alert('false');</script>");
		// 	$query = "insert into logs(user,description,receiver,date_time) values('".$user."','".$action."','".$receiver."',now())";
		// }
		$query = "insert into logs(user,description,receiver,date_time) values('".$user."','".$action."','".$receiver."',now())";

		mysqli_query($conn,$query);
	}
?>