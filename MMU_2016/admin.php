<!DOCTYPE HTML>
<html>

<head>
	<title>MMU | ADMIN</title>
	<?php include("header.php"); ?>
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

					<!-- ADD CANDIDATE MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id = "AddCandidate">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Add Candidate</h4>
					      	</div>

					      	<div class="modal-body">
						        <form>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Candidate Number:</label>
						            <input type="text" class="form-control" name="candidateNum">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">ID Number:</label>
						            <input type="text" class="form-control" name="idNum">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Firstname:</label>
						            <input type="text" class="form-control" name="firstname">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Lastname:</label>
						            <input type="text" class="form-control" name="lastname">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">College:</label>
						            <input type="text" class="form-control" name="college">
						          </div>

						        </form>
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-success" name="saveCandidate">Save</button>
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
						        <form>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">Position:</label>
						            <input type="text" class="form-control" name="position">
						          </div>
						          <div class="form-group">
						            <label for="recipient-name" class="control-label">ID Number:</label>
						            <input type="text" class="form-control" name="idNum">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Firstname:</label>
						            <input type="text" class="form-control" name="firstname">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Lastname:</label>
						            <input type="text" class="form-control" name="lastname">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">College:</label>
						            <input type="text" class="form-control" name="college">
						          </div>

						        </form>
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-success" name="saveAdmin">Save</button>
						     </div>
					    </div>
					  </div>
					</div>

				</div>


		</div>


</body>
</html>