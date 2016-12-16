<?php
include("connection.php");

	$nameq = "select * from judges where id='".$_SESSION['judge_id']."'";
	$namer = mysqli_query($conn,$nameq);
	$row = mysqli_fetch_assoc($namer);
	$fullname = $row['first_name']." ".$row['last_name'];
	$judge_id = $row['id'];
?>

<div class="headTitle">
   <a href="logout.php/?logout=logout" id="logout"><h6><?php echo($fullname); ?></h6></a>
   <h5 style="margin-left: -100px">Judge</h5>
   <h1>CATEGORIES</h1>
   <h4>MR & MS UMAK</h4>
   <h3>2016</h3>
</div>