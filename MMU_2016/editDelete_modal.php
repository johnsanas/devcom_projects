<!-- EDIT CANDIDATE MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="EditCandidate<?php echo $id;?>">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Edit Candidate No. <?php echo $candidate_number; ?></h4>
					      	</div>

					      	<div class="modal-body">
						        <form action="" method="POST">

						        <?php
						        	$sqls = "SELECT * FROM candidates WHERE id='$id'";
						        	$querys = mysqli_query($conn, $sqls);

						        	while($results = mysqli_fetch_assoc($querys)){
						        ?>
						        		<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
							          <div class="form-group">
							            <label for="recipient-name" class="control-label">Candidate Number:</label>
							            <input type="text" class="form-control" name="candidate_number" required value="<?php echo $result['candidate_number']; ?>">
							          </div>
							          <div class="form-group">
							            <label for="recipient-name" class="control-label">ID Number:</label>
							            <input type="text" class="form-control" name="id_number" required value="<?php echo $result['id_number']; ?>">
							          </div>
							          <div class="form-group">
							            <label for="message-text" class="control-label">Firstname:</label>
							            <input type="text" class="form-control" name="first_name" required value="<?php echo $result['first_name']; ?>">
							          </div>
							          <div class="form-group">
							            <label for="message-text" class="control-label">Lastname:</label>
							            <input type="text" class="form-control" name="last_name" required value="<?php echo $result['last_name']; ?>">
							          </div>
							          	<div class="form-group">

							            <label class="radio-inline"><input type="radio" name="gender" value="Male" required <?php if($result['gender']=='Male'){ echo 'checked';} ?>>Male</label>
										<label class="radio-inline"><input type="radio" name="gender" value="Female" required <?php if($result['gender']=='Female'){ echo 'checked';} ?>>Female</label>
							          </div>
							          <div class="form-group">
							            <label for="message-text" class="control-label">College:</label>
							            <input type="text" class="form-control" name="college" required value="<?php echo $result['college']; ?>">
							          </div>
						        <?php
						        	}
						        ?>
					        
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success" name="updateCandidate">Update</button>
						        </form>	
						     </div>
					    </div>
					  </div>
					</div>

					<!-- DELETE CANDIDATE MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="DeleteCandidate<?php echo $id;?>">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Delete Admin <?php echo $first_name; ?></h4>
					      	</div>

					      	<div class="modal-body">
						        <form action="" method="POST">
						        	<label for="message-text" class="control-label">Are you sure you want to delete candidate no. <?php echo $candidate_number; ?>?</label>
						        <?php
						        	$sqls = "SELECT * FROM candidates WHERE id='$id'";
						        	$querys = mysqli_query($conn, $sqls);

						        	while($results = mysqli_fetch_assoc($querys)){
						        ?>
						        		<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
						        <?php
						        	}
						        ?>
					        
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success" name="deleteCandidate">Delete</button>
						        </form>	
						     </div>
					    </div>
					  </div>
					</div>


<!-- EDIT ADMIN MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="EditAdmin<?php echo $id;?>">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Edit Admin <?php echo $first_name; ?></h4>
					      	</div>

					      	<div class="modal-body">
						        <form action="" method="POST">

						        <?php
						        	$sqls = "SELECT * FROM candidates WHERE id='$id'";
						        	$querys = mysqli_query($conn, $sqls);

						        	while($results = mysqli_fetch_assoc($querys)){
						        ?>
						        		<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
							      <div class="form-group">
						            <label for="recipient-name" class="control-label">ID Number:</label>
						            <input type="text" class="form-control" name="id_number" required value="<?php echo $result['id_number']; ?>">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Firstname:</label>
						            <input type="text" class="form-control" name="first_name" required value="<?php echo $result['first_name']; ?>">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Lastname:</label>
						            <input type="text" class="form-control" name="last_name" required value="<?php echo $result['last_name']; ?>">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Password:</label>
						            <input type="text" class="form-control" name="password" required value="<?php echo $result['password']; ?>">
						          </div>
						        <?php
						        	}
						        ?>
					        
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success" name="updateAdmin">Update</button>
						        </form>	
						     </div>
					    </div>
					  </div>
					</div>

					<!-- DELETE ADMIN MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="DeleteAdmin<?php echo $id;?>">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Delete Admin <?php echo $first_name; ?></h4>
					      	</div>

					      	<div class="modal-body">
						        <form action="" method="POST">
						        	<label for="message-text" class="control-label">Are you sure you want to delete admin <?php echo $first_name; ?>?</label>
						        <?php
						        	$sqls = "SELECT * FROM candidates WHERE id='$id'";
						        	$querys = mysqli_query($conn, $sqls);

						        	while($results = mysqli_fetch_assoc($querys)){
						        ?>
						        		<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
						        <?php
						        	}
						        ?>
					        
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success" name="deleteAdmin">Delete</button>
						        </form>	
						     </div>
					    </div>
					  </div>
					</div>




<!-- EDIT JUDGE MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="EditJudge<?php echo $id;?>">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Edit Admin <?php echo $first_name; ?></h4>
					      	</div>

					      	<div class="modal-body">
						        <form action="" method="POST">

						        <?php
						        	$sqls = "SELECT * FROM judges WHERE id='$id'";
						        	$querys = mysqli_query($conn, $sqls);

						        	while($results = mysqli_fetch_assoc($querys)){
						        ?>
						        		<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
							      
						          <div class="form-group">
						            <label for="message-text" class="control-label">Firstname:</label>
						            <input type="text" class="form-control" name="first_name" required value="<?php echo $result['first_name']; ?>">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Lastname:</label>
						            <input type="text" class="form-control" name="last_name" required value="<?php echo $result['last_name']; ?>">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Occupation:</label>
						            <input type="text" class="form-control" name="occupation" required value="<?php echo $result['occupation']; ?>">
						          </div>
						          <div class="form-group">
						            <label for="message-text" class="control-label">Description:</label>
						            <input type="text" class="form-control" name="description" required value="<?php echo $result['description']; ?>">
						          </div>
						        <?php
						        	}
						        ?>
					        
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success" name="updateJudge">Update</button>
						        </form>	
						     </div>
					    </div>
					  </div>
					</div>

					<!-- DELETE JUDGE MODAL -->
					<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="DeleteJudge<?php echo $id;?>">

					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					        <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="gridSystemModalLabel">Delete Admin <?php echo $first_name; ?></h4>


					      	</div>

					      	<div class="modal-body">
						        <form action="" method="POST">
						        	<label for="message-text" class="control-label">Are you sure you want to delete judge <?php echo $first_name; ?>?</label>
						        	<input type="hidden" name="id" value="<?php echo $id; ?>">
						       
					        
						    </div>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success" name="deleteJudge">Delete</button>
						        </form>	
						     </div>
					    </div>
					  </div>
					</div>
