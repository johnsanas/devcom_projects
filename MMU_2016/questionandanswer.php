<?php 
include("session.php");
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>MMU | QUESTION AND ANSWER</title>
	<?php include("header.php"); include("connection.php"); ?>
</head>

<body class="categoryHomeBC">

		
		<div class="categoryHome">

			<!--<div class="headTitle">
				<h6>Mr. Aldwin Labrador</h6>
				<h5>Judge</h5>
				<h1>THEME WEAR</h1>
				<h4>MR & MS UMAK</h4>
				<h3>2016</h3>
			</div>-->

			<?php include("headTitle.php"); ?>

			<div class="contentMain">
				<div class="instructions">
					<p>Theme wear category has a 20% part on the overall judging process. Each criteria has a   corresponding maximum score given.
					Choose from the dropdown menu to select for a particular candidate.</p>
				</div>

				<div class="backbutton">
					<a class="button btn-default" href='category.php'>BACK</a>
				</div>

				
				<div class="row-grid">	
				  <div class="col-sm-12 col-md-6">

				  	<div class="candidateSelection">
					<label id="candF">Female Candidate #</label>
					<form method="POST" action="">
						<select name="candnumberF" id="candf">
		   					<option value="1">Choose candidate no.</option>
						    <?php Populate_Dropdown9(); ?>
					   	</select>
					<input class="button btn-default Fbutton" name="FnoSel" type="submit" value="SELECT">
					</form>
					

				</div>
				   
				      
				      <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 whitey">
					 	 	<?php

					 	 	if(isset($_POST['FnoSel'])){
								$femalepic = $_POST['candnumberF'];
					 	 	}
					 	 	else {
					 	 		$femalepic = "1";
					 	 	}

					 	 	$sql = "SELECT * FROM candidates WHERE gender='Female'  AND candidate_number='$femalepic'";
					 	 	$result = mysqli_query($conn, $sql);
					 	 	if (mysqli_num_rows($result)>0) {
					 	 	
					 	 	
					 	 	$row = mysqli_fetch_array($result);

					 	 	$candidateno = $row['candidate_number'];
					 	 	$candidateimg = $row['candidate_img'];
}
					 	 	?>
					 	 	<img src="<?php echo $candidateimg;?>" id="leftimage">
					 	 	<p style="width:100%">Candidate # <?php echo "$candidateno";?></p>
						</div>
					  </div>

					   <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 blacky">
					 	 	<form method="POST" action="">
				   			<h3>Criteria</h3> 

				   			<p>Poise and Bearing</p>
				   				<select name="f_poiseBear">
				   					<option selected disabled hidden>Choose a score..</option>
								    <?php Populate_Dropdown30(); ?>
				   				</select>

				   			<p>Carriage</p>
				   				<select name="f_carriage">
				   					<option selected disabled hidden>Choose a score..</option>
								    <?php Populate_Dropdown30(); ?>
				   				</select>

				   			<p>Beauty</p>
				   				<select name="f_beauty">
				   					<option selected disabled hidden>Choose a score..</option>
								    <?php Populate_Dropdown20(); ?>
				   				</select>

				   			<p>Elegance and Sophistication</p>
				   				<select name="f_eleSop">
				   					<option selected disabled hidden>Choose a score..</option>
								    <?php Populate_Dropdown20(); ?>
				   				</select>

				   				<input type="submit" value="Save" name="f_submit"> 
				   				</form>
					  	</div>
					  </div>

				  </div>
				</div>


				<div class="row-grid">
				  <div class="col-sm-12 col-md-6">
				   
				<div class="candidateSelection">
					<label  id="candM">Male Candidate #</label>
					<form method="POST" action="">
					<select name="candnumberM" id="candf">
	   					<option value="1">Choose candidate no.</option>
					    <?php Populate_Dropdown8(); ?>
					   	</select>
					<input class="button btn-default Mbutton" name="MnoSel" type="submit" value="SELECT">
					</form>

				</div>
				      
				      <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 whitey">
					 	 	<?php

					 	 	if(isset($_POST['MnoSel'])){
								$malepic = $_POST['candnumberM'];
					 	 	}
					 	 	else {
					 	 		$malepic = "1";
					 	 	}

					 	 	$sql = "SELECT * FROM candidates WHERE gender='Male' AND candidate_number='$malepic'";
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
					 	 <div class="col-md-6 col-md-6 blacky">
					   			<h3>Criteria</h3> 
					   		<form action="" method="post">
					   			<p>Poise and Bearing</p>
					   				<select name="m_poiseBear" requireds>
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php Populate_Dropdown30(); ?>
					   				</select>

					   			<p>Carriage</p>
					   				<select name="m_carriage" required>
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php Populate_Dropdown30(); ?>
					   				</select>

					   			<p>Beauty</p>
					   				<select name="m_beauty" required>
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php Populate_Dropdown20(); ?>
					   				</select>

					   			<p>Elegance and Sophistication</p>
					   				<select name="m_eleSop" required>
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php Populate_Dropdown20(); ?>
					   				</select>

					   				<input type="submit" name="m_submit" value="Save"> 

					   		</form>
					  	</div>
					  </div>

				  </div>
				</div>

		</div>


</body>
</html>

<?php 

if (isset($_POST['m_submit'])) { 

		$judge_id = $judge_id;
		$candidate_id = $candidateid;
		$category = "qna";
		$score = $_POST['m_poiseBear'];

		$sub_category = "PoiseBear";
		$sql = "INSERT INTO votes (date_time, judge_id, candidate_id, category, sub_category, score) VALUES(now(), $judge_id, $candidate_id, '$category', '$sub_category' , '$score')";
		$query = mysqli_query($conn, $sql);

		$sub_category = "Carriage";
		$score = $_POST['m_carriage'];
		$sql = "INSERT INTO votes (date_time, judge_id, candidate_id, category, sub_category, score) VALUES(now(), $judge_id, $candidate_id, '$category', '$sub_category' , '$score')";
		$query = mysqli_query($conn, $sql);

		$sub_category = "Beauty";
		$score = $_POST['m_beauty'];
		$sql = "INSERT INTO votes (date_time, judge_id, candidate_id, category, sub_category, score) VALUES(now(), $judge_id, $candidate_id, '$category', '$sub_category' , '$score')";
		$query = mysqli_query($conn, $sql);

		$sub_category = "EleSop";
		$score = $_POST['m_eleSop'];
		$sql = "INSERT INTO votes (date_time, judge_id, candidate_id, category, sub_category, score) VALUES(now(), $judge_id, $candidate_id, '$category', '$sub_category' , '$score')";
		$query = mysqli_query($conn, $sql);



		if($query){
			echo "<script>alert('Voted Successfully Added')</script>";
		}else{
			echo "<script>alert('Failed to add Votes')</script>";
		}
}



if (isset($_POST['f_submit'])) { 

		$judge_id = $judge_id;
		$candidate_id = $candidateid;
		$category = "qna";
		$score = $_POST['f_poiseBear'];

		$sub_category = "PoiseBear";
		$sql = "INSERT INTO votes (date_time, judge_id, candidate_id, category, sub_category, score) VALUES(now(), $judge_id, $candidate_id, '$category', '$sub_category' , '$score')";
		$query = mysqli_query($conn, $sql);

		$sub_category = "Carriage";
		$score = $_POST['f_carriage'];
		$sql = "INSERT INTO votes (date_time, judge_id, candidate_id, category, sub_category, score) VALUES(now(), $judge_id, $candidate_id, '$category', '$sub_category' , '$score')";
		$query = mysqli_query($conn, $sql);

		$sub_category = "Beauty";
		$score = $_POST['f_beauty'];
		$sql = "INSERT INTO votes (date_time, judge_id, candidate_id, category, sub_category, score) VALUES(now(), $judge_id, $candidate_id, '$category', '$sub_category' , '$score')";
		$query = mysqli_query($conn, $sql);

		$sub_category = "EleSop";
		$score = $_POST['f_eleSop'];
		$sql = "INSERT INTO votes (date_time, judge_id, candidate_id, category, sub_category, score) VALUES(now(), $judge_id, $candidate_id, '$category', '$sub_category' , '$score')";
		$query = mysqli_query($conn, $sql);



		if($query){
			echo "<script>alert('Voted Successfully Added')</script>";
		}else{
			echo "<script>alert('Failed to add Votes')</script>";
		}
}


?>
