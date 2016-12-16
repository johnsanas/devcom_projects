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
				<h5 style="margin-left: -100px">Judge</h5>
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

					if (mysqli_num_rows($query)>0){
					while($result =  mysqli_fetch_array($query)){
						$id = $result['id'];
						$candidate_number = $result['candidate_number'];
						$candidateimg = $result['candidate_img'];
						$first_name = $result['first_name'];
						include('editDelete_modal.php');
				?>
						<div class="col-sm-3 col-md-4">
							<img src="<?php echo $candidateimg;?>" class="thumbnail shadow">
							<label class="canNum">Female Candidate No. <?php echo $result['candidate_number']; ?>
								<span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="modal" data-target="#EditCandidate<?php echo $id;?>"></span>
					
								<span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="modal" data-target="#DeleteCandidate<?php echo $id;?>"></span> 
							</label>

						</div>
				<?php
					}
					}


					$sql = "SELECT * FROM candidates WHERE gender='Male' ORDER BY candidate_number";
					$query = mysqli_query($conn, $sql);
					if (mysqli_num_rows($query)>0){
					while($result = mysqli_fetch_array($query)){
						$id = $result['id'];
						$candidate_number = $result['candidate_number'];
						$first_name = $result['first_name'];
						$candidateimg = $result['candidate_img'];
						include('editDelete_modal.php');
				?>
						<div class="col-sm-3 col-md-4">
							<img src="<?php echo $candidateimg;?>" class="thumbnail shadow">
							<label class="canNum">Male Candidate No. <?php echo $result['candidate_number']; ?>
								<span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="modal" data-target="#EditCandidate<?php echo $id;?>"></span>

								<span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="modal" data-target="#DeleteCandidate<?php echo $id;?>"></span>

							</label>
							
						</div>
				<?php
					
				}
			}

				?>
				</div>
				
		</div>
</body>
</html>
