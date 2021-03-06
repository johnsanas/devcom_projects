<!DOCTYPE HTML>
<html>

<head>
	<title>MMU | FINALIST</title>
	<?php include("header.php"); ?>
</head>

<body class="categoryHomeBC">

		<div class="categoryHome">

			<div class="headTitle">
				<h6>Mr. Aldwin Labrador</h6>
				<h5>Judge</h5>
				<h1>FINALIST</h1>
				<h4>MR & MS UMAK</h4>
				<h3>2016</h3>
			</div>

			<div class="contentMain">
				<div class="instructions">
					<p>Theme wear category has a 20% part on the overall judging process. Each criteria has a   corresponding maximum score given.
					Choose from the dropdown menu to select for a particular candidate.</p>
				</div>
				
				<div class="backbutton">
					<a class="button btn-default" href='javascript:history.go(-1)'>BACK</a>
				</div>
				
				<div class="row-grid">	
				  <div class="col-sm-12 col-md-6">

				  	<div class="candidateSelection">
					<label id="candF">Female Candidate #</label>
					<select name="candnumberF" id="candf">
					   					<option selected disabled hidden>Choose candidate no.</option>
									    <?php
									    	$num = 1;

									    	while($num<=9){
									    ?>
									    		<option value="<?php echo $num;?>"><?php echo $num; ?></option>
									    <?php
									    		$num++;
									    	}
									    ?>
					   				</select>
					<button class="button btn-default Fbutton" name="FnoSel">SELECT</button>

				</div>
				   
				      
				      <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 whitey">
					 	 	<img src="img/FemaleCandidate4.jpg" id="leftimage">
					 	 	<p style="width:100%">Candidate # 2</p>
						</div>
					  </div>

					   <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 blacky">
					   			<h3>Criteria</h3> 

					   			<p>Poise and Bearing</p>
					   				<select name="poiseBear">
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php
									    	$num = 1;

									    	while($num<=30){
									    ?>
									    		<option value="<?php echo $num;?>"><?php echo $num; ?></option>
									    <?php
									    		$num++;
									    	}
									    ?>
					   				</select>

					   			<p>Carriage</p>
					   				<select name="carriage">
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php
									    	$num = 1;

									    	while($num<=30){
									    ?>
									    		<option value="<?php echo $num;?>"><?php echo $num; ?></option>
									    <?php
									    		$num++;
									    	}
									    ?>
					   				</select>

					   			<p>Beauty</p>
					   				<select name="beauty">
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php
									    	$num = 1;

									    	while($num<=30){
									    ?>
									    		<option value="<?php echo $num;?>"><?php echo $num; ?></option>
									    <?php
									    		$num++;
									    	}
									    ?>
					   				</select>

					   			<p>Elegance and Sophistication</p>
					   				<select name="eleSop">
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php
									    	$num = 1;

									    	while($num<=30){
									    ?>
									    		<option value="<?php echo $num;?>"><?php echo $num; ?></option>
									    <?php
									    		$num++;
									    	}
									    ?>
					   				</select>

					   				<input type="submit" value="Save"> 
					  	</div>
					  </div>

				  </div>
				</div>


				<div class="row-grid">
				  <div class="col-sm-12 col-md-6">
				   
				<div class="candidateSelection">
					<label  id="candM">Male Candidate #</label>
					<select name="candnumberM" id="candm">
					   					<option selected disabled hidden>Choose candidate no.</option>
									    <?php
									    	$num = 1;

									    	while($num<=8){
									    ?>
									    		<option value="<?php echo $num;?>"><?php echo $num; ?></option>
									    <?php
									    		$num++;
									    	}
									    ?>
					</select>
					<button class="button btn-default Mbutton" name="MnoSel">SELECT</button>
					

				</div>
				      
				      <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 whitey">
					 	 	<img src="img/MaleCandidate7.jpg" id="leftimage">
					 	 	<p style="width:100%">Candidate # 2</p>
						</div>
					  </div>

					   <div class="row-grid">
					 	 <div class="col-md-6 col-md-6 blacky">
					   			<h3>Criteria</h3> 

					   			<p>Poise and Bearing</p>
					   				<select name="poiseBear">
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php
									    	$num = 1;

									    	while($num<=30){
									    ?>
									    		<option value="<?php echo $num;?>"><?php echo $num; ?></option>
									    <?php
									    		$num++;
									    	}
									    ?>
					   				</select>

					   			<p>Carriage</p>
					   				<select name="carriage">
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php
									    	$num = 1;

									    	while($num<=30){
									    ?>
									    		<option value="<?php echo $num;?>"><?php echo $num; ?></option>
									    <?php
									    		$num++;
									    	}
									    ?>
					   				</select>

					   			<p>Beauty</p>
					   				<select name="beauty">
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php
									    	$num = 1;

									    	while($num<=30){
									    ?>
									    		<option value="<?php echo $num;?>"><?php echo $num; ?></option>
									    <?php
									    		$num++;
									    	}
									    ?>
					   				</select>

					   			<p>Elegance and Sophistication</p>
					   				<select name="eleSop">
					   					<option selected disabled hidden>Choose a score..</option>
									    <?php
									    	$num = 1;

									    	while($num<=30){
									    ?>
									    		<option value="<?php echo $num;?>"><?php echo $num; ?></option>
									    <?php
									    		$num++;
									    	}
									    ?>
					   				</select>

					   				<input type="submit" value="Save"> 
					  	</div>
					  </div>

				  </div>
				</div>

		</div>


</body>
</html>