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
<<<<<<< HEAD
				<h5 style="margin-left: -100px">Judge</h5>
				<h1>CANDIDATES</h1>
=======
				<h5>Judge</h5>
				<h1>RESULTS</h1>
>>>>>>> 7b218dddcafd7a77c32745808a5a9650ace69cd0
				<h4>MR & MS UMAK</h4>
				<h3>2016</h3>
			</div>

			<div class="contentMain">

				<?php include('admin_buttons.php');?>
			

			<div class="topVotesContainer">

				<?php

				$sqli = "SELECT * FROM candidates ORDER BY candidate_number";
				$results = mysqli_query($conn, $sqli);
				if (mysqli_num_rows($results)>0){

					while($row = mysqli_fetch_array($results)){

							$candidateid = $row['id'];
					 	 	$candidateno = $row['candidate_number'];
					 	 	$candidateimg = $row['candidate_img'];
				?>

				<div class="row-grid">
				  <div class="col-sm-12 col-md-6">
				   
				      
				      <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 whitey">

					 	 	<img src="<?php echo $candidateimg;?>" id="leftimage">
					 	 	<p style="width:100%">Candidate # <?php echo "$candidateno";?></p>
						</div>
					  </div>

					   <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 blackyR">
					   			<h3>Categories</h3> 

					   			<?php 

					   				$sql = "SELECT * FROM votes WHERE candidate_id = '$candidateid'";
					   				$result = mysqli_query($conn, $sql);

					   				if(mysqli_fetch_array($result)){

					   				$rows = mysqli_fetch_array($result);


					   				

					   			?>

					   			<p>Theme wear</p>
					   				<p><?php

					   				$sqlscore = "SELECT * FROM votes WHERE category = 'Theme wear' AND candidate_id = '$candidateid'";
					   				
					   				$resultscore = mysqli_query($conn, $sqlscore);

					   				if(mysqli_fetch_array($resultscore)){

					   				while($rowscore = mysqli_fetch_array($resultscore)){

					   				}

					   				 echo "";
									}

					   				 ?></p>

					   			<p>Formal wear</p>
					   				<p><?php echo "";?></p>

					   			<p>Swim wear</p>
					   				<p><?php echo "";?></p>

					   			<p>School wear</p>
					   				<p><?php echo "";?></p>

					   			<p>Question and Answer</p>
					   				<p><?php echo "";?></p>


					   			<?php 

					   					

					   				}
					   			?>
					  	</div>
					  </div>

				  </div>
				</div>



				<?php 

	}
				}


				?>


			</div>
				
		</div>
</body>
</html>
