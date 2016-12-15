<!DOCTYPE HTML>
<html>

<head>
	<title>MMU | ADMIN</title>
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
				<div class="adminButtons">
					
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddCandidate">+ Candidate</button>

					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddAdmin">+ Administrator</button>

					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddJudges">+ Judge</button>

					<!-- ADD CANDIDATE MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id = "AddCandidate">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Add Candidate</h4>
					      	</div>

					      	<div class="modal-body">
						        <form action="" method="POST">
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Candidate Number:</label>
						            <input type="text" class="form-control" name="candidate_number" required>
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">ID Number:</label>
						            <input type="text" class="form-control" name="id_number" required>
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Firstname:</label>
						            <input type="text" class="form-control" name="first_name" required>
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Lastname:</label>
						            <input type="text" class="form-control" name="last_name" required>
						          </div>
						          	<div class="form-group">
						            <label class="radio-inline"><input type="radio" name="gender" value="Male" required>Male</label>
									<label class="radio-inline"><input type="radio" name="gender" value="Female" required>Female</label>
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">College:</label>
						            <input type="text" class="form-control" name="college" required>
						          </div>

						        
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success" name="saveCandidate">Save</button>
						        </form>	
						     </div>
					    </div>
					  </div>
					</div>

					<!-- ADD ADMINISTRATOR MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id = "AddAdmin">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Add Administrator</h4>
					      	</div>

					      	<div class="modal-body">
						        <form action="" method="POST">
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">ID Number:</label>
						            <input type="text" class="form-control" name="id_number" required>
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Firstname:</label>
						            <input type="text" class="form-control" name="first_name" required>
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Lastname:</label>
						            <input type="text" class="form-control" name="last_name" required>
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Password:</label>
						            <input type="text" class="form-control" name="password" required>
						          </div>

						        
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success" name="saveAdmin">Save</button>

						        </form>
						     </div>
					    </div>
					  </div>
					</div>

					<!-- ADD JUDGE MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id = "AddJudges">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Add Judge</h4>
					      	</div>

					      	<div class="modal-body">
						        <form action="" method="POST">
						          <div class="form-group">
						            <label for="message-text" class="control-label">Firstname:</label>
						            <input type="text" class="form-control" name="first_name" required>
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Lastname:</label>
						            <input type="text" class="form-control" name="last_name" required>
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Occupation:</label>
						            <input type="text" class="form-control" name="occupation" required>
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Description:</label>
						            <input type="text" class="form-control" name="description" required>
						          </div>

						          <div class="form-group">
					            	<label class="radio-inline"><input type="radio" name="gender" value="Male" required>Male</label>
									<label class="radio-inline"><input type="radio" name="gender" value="Female" required>Female</label>
						          </div>						        
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success" name="saveJudge">Save</button>
						        </form>	
						     </div>
					    </div>
					  </div>
					</div>

				</div>
		</div>
</body>
</html>


<?php
	if(isset($_POST['saveCandidate'])){
		$candidate_number = $_POST['candidate_number'];
		$id_number = $_POST['id_number'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$college = $_POST['college'];
		$gender = $_POST['gender'];

		$sql = "INSERT INTO candidates (candidate_number, id_number, first_name, last_name, college, gender) VALUES('$candidate_number', '$id_number', '$first_name', '$last_name', '$college', '$gender')";
		$query = mysqli_query($conn, $sql);

		if($query){
			echo "<script>alert('Candidate Successfully Added')</script>";
		}else{
			echo "<script>alert('Failed to add candidate!')</script>";
		}
	}
?>

<?php
	if(isset($_POST['saveAdmin'])){
		$id_number = $_POST['id_number'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$password = $_POST['password'];

		$sql = "INSERT INTO admin (id_number, first_name, last_name, password) VALUES('$id_number', '$first_name', '$last_name', '$password')";
		$query = mysqli_query($conn, $sql);

		if($query){
			echo "<script>alert('Admin Successfully Added')</script>";
		}else{
			echo "<script>alert('Failed to add administrator')</script>";
		}
	}
?>