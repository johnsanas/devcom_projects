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
				<h1>CANDIDATES</h1>
				<h4>MR & MS UMAK</h4>
				<h3>2016</h3>
			</div>

			<div class="contentMain">

				<?php include('admin_buttons.php');?>
				<div class="row-grid">

				<?php 
					$sql = "SELECT * FROM candidates WHERE gender='Female' ORDER BY candidate_number";
					$query = mysqli_query($conn, $sql);

					while($result = mysqli_fetch_assoc($query)){	
						$id = $result['id'];
						$candidate_number = $result['candidate_number'];
						include('editDelete_modal.php');
				?>
						<div class="col-sm-3 col-md-4">
							<img src="img/FemaleCandidate<?php echo $result['candidate_number'];?>.jpg" class="thumbnail shadow">
							<label class="canNum">Female Candidate No. <?php echo $result['candidate_number']; ?>
								<span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="modal" data-target="#EditCandidate<?php echo $id;?>"></span>
						

								<span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="modal" data-target="#DeleteCandidate<?php echo $id;?>"></span> 
							</label>

						</div>
				<?php
						
					}


					$sql = "SELECT * FROM candidates WHERE gender='Male' ORDER BY candidate_number";
					$query = mysqli_query($conn, $sql);

					while($result = mysqli_fetch_assoc($query)){
						$id = $result['id'];
						$candidate_number = $result['candidate_number'];
						include('editDelete_modal.php');
				?>
						<div class="col-sm-3 col-md-4">
							<img src="img/MaleCandidate<?php echo $result['candidate_number'];?>.jpg" class="thumbnail shadow">
							<label class="canNum">Male Candidate No. <?php echo $result['candidate_number']; ?>
								<span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="modal" data-target="#EditCandidate<?php echo $id;?>"></span>

								<span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="modal" data-target="#DeleteCandidate<?php echo $id;?>"></span>

							</label>
							
						</div>
				<?php
					}

				?>
				</div>
				
		</div>
</body>
</html>
