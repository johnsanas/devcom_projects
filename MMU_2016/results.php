<!DOCTYPE HTML>
<html>

<head>
	<title>MMU | ADMIN Candidates</title>
	<?php include_once("header.php"); require("connection.php"); ?>
</head>

<body class="categoryHomeBC">

		<div class="categoryHome">

			<div class="headTitle">
				<h6>Mr. Aldwin Labrador</h6>
				<h5>Judge</h5>
				<h1>RESULTS</h1>
				<h4>MR & MS UMAK</h4>
				<h3>2016</h3>
			</div>

			<div class="contentMain">

				<?php include('admin_buttons.php');?>
			

			<div class="topVotesContainer">

				<?php




				?>

				<div class="row-grid">
				  <div class="col-sm-12 col-md-6">
				   
				      
				      <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 whitey">
					 	 	<?php

					 	 	$sql = "SELECT * FROM candidates WHERE gender='Male' ";
					 	 	$result = mysqli_query($conn, $sql);
					 	 	if (mysqli_num_rows($result)>0) {
					 	 	
					 	 	
					 	 	$row = mysqli_fetch_array($result);

					 	 	$candidateid = $row['id'];
					 	 	$candidateno = $row['candidate_number'];
					 	 	$candidateimg = $row['candidate_img'];
							}
							?>
					 	 	<img src="<?php echo $candidateimg;?>" id="leftimage">
					 	 	<p style="width:100%">Candidate # <?php echo "$candidateno";?></p>
						</div>
					  </div>

					   <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 blackyR">
					   			<h3>Categories</h3> 
					   		<form action="" method="post">
					   			<p>Theme wear</p>
					   				<p></p>

					   			<p>Formal wear</p>
					   				<p></p>

					   			<p>Swim wear</p>
					   				<p></p>

					   			<p>School wear</p>
					   				<p></p>

					   			<p>Question and Answer</p>
					   				<p></p>

					   		</form>
					  	</div>
					  </div>

				  </div>
				</div>






			</div>
				
		</div>
</body>
</html>
