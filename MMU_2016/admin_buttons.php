<div class="adminButtons">
					
					<a class="btn btn-info" href="candidates.php">Candidates</a>
					<a class="btn btn-info" href="admin.php">Administrator</a>
					<a class="btn btn-info" href="judges.php">Judges</a>
					<a class="btn btn-info" href="results.php">Results</a>


					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddCandidate">+ Candidate</button>

					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddAdmin">+ Administrator</button>

					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddJudges">+ Judge</button>

</div>
<!-- ADD CANDIDATE MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id = "AddCandidate">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Add Candidate</h4>
					      	</div>

					      	<div class="modal-body">
						        <form action="" method="POST" enctype="multipart/form-data">
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
						          <div class="form-group">
						          	<label class="control-label">Picture:</label>
						          	<input type="file" class="form-control" name="candidateimg" required>
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
						            <input type="password" class="form-control" name="password" required>
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

					

<?php
	if(isset($_POST['saveCandidate'])){

		function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }

		$candidate_number = $_POST['candidate_number'];
		$id_number = $_POST['id_number'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$college = $_POST['college'];
		$gender = $_POST['gender'];

		$file_name=$_FILES["candidateimg"]["name"];
	    $temp_name=$_FILES["candidateimg"]["tmp_name"];
	    $imgtype=$_FILES["candidateimg"]["type"];
	    $ext= GetImageExtension($imgtype);
	    $imagename=$_FILES["candidateimg"]["name"];
	    $target_path = "/devcom_projects/MMU_2016/uploadedimg/".$imagename;
	    $path="C://xampp/htdocs/";


  		if(move_uploaded_file($temp_name,$path.$target_path)) {


			$sql = "INSERT INTO candidates (candidate_number, id_number, first_name, last_name, college, gender, candidate_img) VALUES('$candidate_number', '$id_number', '$first_name', '$last_name', '$college', '$gender', '$target_path')";
			$query = mysqli_query($conn, $sql);

			if($query){
				echo "<script>alert('Candidate Successfully Added')</script>";
			}else{
				echo "<script>alert('Failed to add candidate!')</script>";
			}
		
?>
		<script>window.location.href = 'candidates.php' </script>
		
<?php
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
?>
		<script>window.location.href = 'admin.php' </script>
<?php
	}
?>

<?php
	if(isset($_POST['updateCandidate'])){
		$id = $_POST['id'];
		$candidate_number = $_POST['candidate_number'];
		$id_number = $_POST['id_number'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$college = $_POST['college'];
		$gender = $_POST['gender'];

		$sql = "UPDATE candidates SET candidate_number='$candidate_number', id_number='$id_number', first_name='$first_name', last_name='$last_name', college='$college', gender='$gender' WHERE id='$id'";
		$query = mysqli_query($conn,$sql);
		
		if($query){
			echo "<script>alert('Candidate Successfully Updated')</script>";
		}else{
			echo "<script>alert('Failed to update candidate')</script>";
		}
?>
		<script>window.location.href = 'candidates.php' </script>
<?php

	}
?>

<?php 
	if(isset($_POST['deleteCandidate'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM candidates WHERE id='$id'";
		$query = mysqli_query($conn,$sql);
		
		if($query){
			echo "<script>alert('Candidate Successfully deleted')</script>";
		}else{
			echo "<script>alert('Failed to delete candidate')</script>";
		}
?>
		<script>window.location.href = 'candidates.php' </script>
<?php
	}

?>


<?php
	if(isset($_POST['updateAdmin'])){
		$id = $_POST['id'];
		$id_number = $_POST['id_number'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$password = $_POST['password'];

		$sql = "UPDATE admin SET id_number='$id_number', first_name='$first_name', last_name='$last_name', password='$password' WHERE id='$id'";
		$query = mysqli_query($conn,$sql);
		
		if($query){
			echo "<script>alert('Candidate Successfully Updated')</script>";
		}else{
			echo "<script>alert('Failed to update candidate')</script>";
		}
?>
		<script>window.location.href = 'admin.php' </script>
<?php

	}
?>

<?php 
	if(isset($_POST['deleteAdmin'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM admin WHERE id='$id'";
		$query = mysqli_query($conn,$sql);
		
		if($query){
			echo "<script>alert('Admin Successfully deleted')</script>";
		}else{
			echo "<script>alert('Failed to delete admin')</script>";
		}
?>
		<script>window.location.href = 'admin.php' </script>
<?php
	}

?>


<?php
	if(isset($_POST['saveJudge'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$occupation = $_POST['occupation'];
		$description = $_POST['description'];
		//$gender = $_POST['gender'];
		$access_key = rand(1000,9999);

		$sql = "INSERT INTO judges (first_name, last_name, occupation, description, access_key) VALUES('$first_name', '$last_name', '$occupation', '$description', '$access_key')";
		$query = mysqli_query($conn, $sql);

		if($query){
			echo "<script>alert('Judge successfully added')</script>";
		}else{
			echo "<script>alert('Failed to add judge')</script>".mysqli_error($conn);
		}
?>
		<script>window.location.href = 'judges.php' </script>
<?php		
	}
?>




<?php
	if(isset($_POST['updateJudge'])){
		$id = $_POST['id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$occupation = $_POST['occupation'];
		$description = $_POST['description'];

		$sql = "UPDATE judges SET first_name='$first_name', last_name='$last_name', occupation='$occupation', description='$description' WHERE id='$id'";
		$query = mysqli_query($conn,$sql);
		
		if($query){
			echo "<script>alert('Judge Successfully Updated')</script>";
		}else{
			echo "<script>alert('Failed to update judge')</script>";
		}
?>
		<script>window.location.href = 'judges.php' </script>
<?php

	}
?>

<?php 
	if(isset($_POST['deleteJudge'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM judges WHERE id='$id'";
		$query = mysqli_query($conn,$sql);
		
		if($query){
			echo "<script>alert('Judge Successfully deleted')</script>";
		}else{
			echo "<script>alert('Failed to delete judge')</script>";
		}
?>
		<script>window.location.href = 'judges.php' </script>
<?php
	}

?>