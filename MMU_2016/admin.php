<!DOCTYPE HTML>
<html>

<head>
	<title>MMU | ADMIN List</title>
	<?php include("header.php"); include("connection.php"); ?>
</head>

<body class="categoryHomeBC">

		<div class="categoryHome">

			<div class="headTitle">
				<h6>Mr. Aldwin Labrador</h6>
				<h5>Judge</h5>
				<h1>ADMINISTRATOR</h1>
				<h4>MR & MS UMAK</h4>
				<h3>2016</h3>
			</div>

			<div class="contentMain">
				<?php include('admin_buttons.php'); ?>

				<div class="row-grid">

				<?php 
					$sql = "SELECT * FROM admin";
					$query = mysqli_query($conn, $sql);

					while($result = mysqli_fetch_assoc($query)){
						$id = $result['id'];
						$first_name = $result['first_name'];
						include('editDelete_modal.php');
				?>
						<div class="col-sm-3 col-md-4">
							<img src="img/anon.png" class="shadow">
							<label class="canNum"><?php echo $result['first_name'].' '.$result['last_name']; ?>
								<span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="modal" data-target="#EditAdmin<?php echo $id;?>"></span>
						

								<span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="modal" data-target="#DeleteAdmin<?php echo $id;?>"></span> 
							</label>
						</div>
				<?php
					}

				?>
				</div>
				
		</div>
</body>
</html>