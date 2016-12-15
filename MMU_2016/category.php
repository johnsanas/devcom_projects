<?php 
include("session.php");
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>MMU | CATEGORY</title>
	<?php include("header.php"); ?>
</head>

<body class="categoryHomeBC">

		<div class="categoryHome">

			<!--<div class="headTitle">
				<a href="logout.php/?logout=logout"><h6>Mr. Aldwin Labrador</h6></a>
				<h5>Judge</h5>
				<h1>CATEGORIES</h1>
				<h4>MR & MS UMAK</h4>
				<h3>2016</h3>
			</div>-->

			<?php include("headTitle.php"); ?>

			<div class="contentMain">
				<div class="row-grid">
					<div class="col-sm-3 col-md-4">
						<a href="themewear.php" class="thumbnail yellow">
							<img src="img/pageantLogo.png">
							<p class="darkYellow">Theme Wear</p>
						</a>
					</div>
				</div>


				<div class="row-grid">
					<div class="col-sm-3 col-md-4">
						<a href="schoolwear.php" class="thumbnail pink">
							<img src="img/pageantLogo.png">
							<p class="darkPink">School Wear</p>
						</a>
					</div>
				</div>

				<div class="row-grid">
					<div class="col-sm-3 col-md-4">
						<a href="formalwear.php" class="thumbnail blue">
							<img src="img/pageantLogo.png">
							<p class="darkBlue">Formal Wear</p>
						</a>
					</div>
				</div>
				<div class="row-grid">
					<div class="col-sm-3 col-md-4">
						<a href="swimwear.php" class="thumbnail green">
							<img src="img/pageantLogo.png">
							<p class="darkGreen">Swim Wear</p>
						</a>
					</div>
				</div>

				<div class="row-grid">
					<div class="col-sm-3 col-md-4">
						<a href="#" class="thumbnail white">
							<img src="img/pageantLogo.png">
							<p class="darkWhite">Question and Answer</p>
						</a>
					</div>
				</div>
			</div>

		</div>


</body>
</html>