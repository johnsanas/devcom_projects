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
				<div class="row-grid ThemeWear">
					<div class="col-sm-3 col-md-4">
						<a href="themewear.php" class="thumbnail yellow">
							<img src="img/pageantLogo.png">
							<p class="darkYellow">Theme Wear</p>
						</a>
					</div>
				</div>


				<div class="row-grid SchoolWear">
					<div class="col-sm-3 col-md-4">
						<a href="schoolwear.php" class="thumbnail pink">
							<img src="img/pageantLogo.png">
							<p class="darkPink">School Wear</p>
						</a>
					</div>
				</div>

				<div class="row-grid FormalWear">
					<div class="col-sm-3 col-md-4">
						<a href="formalwear.php" class="thumbnail blue">
							<img src="img/pageantLogo.png">
							<p class="darkBlue">Formal Wear</p>
						</a>
					</div>
				</div>
				<div class="row-grid SwimWear">
					<div class="col-sm-3 col-md-4">
						<a href="swimwear.php" class="thumbnail green">
							<img src="img/pageantLogo.png">
							<p class="darkGreen">Swim Wear</p>
						</a>
					</div>
				</div>

				<div class="row-grid QnA">
					<div class="col-sm-3 col-md-4">
						<a href="questionandanswer.php" class="thumbnail white">
							<img src="img/pageantLogo.png">
							<p class="darkWhite">Question and Answer</p>
						</a>
					</div>
				</div>

				<div class="row-grid QnA">
					<div class="col-sm-3 col-md-4">
						<a href="finalQNA	.php" class="thumbnail grey">
							<img src="img/pageantLogo.png">
							<p class="dark">Final Question and Answer</p>
						</a>
					</div>
				</div>
			</div>

		</div>

	<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
	<script>
	$(document).ready(function(){

		window.sr = ScrollReveal({ duration: 2000 });
		sr.reveal('.ThemeWear', 100);
		sr.reveal('.SchoolWear', { delay: 200});
		sr.reveal('.FormalWear', { delay: 400});
		sr.reveal('.SwimWear', { delay: 600});
		sr.reveal('.QnA', { delay: 800});

	   $('#logout').click(function() {
	        return false;
	    }).dblclick(function() {
	        window.location = this.href;
	        return false;
	    });


	    $('[data-toggle="tooltip"]').tooltip();   
	}); 

	</script>
</body>
</html>