<!DOCTYPE HTML>
<html>

<head>
	<link rel="icon" type="image/ico" href="img/pageantLogo2.png">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
</head>

<?php
//GLOBAL FUNCTIONS FOR SYSTEM
function Populate_Dropdown30(){
	$num = 30;

	while($num>=1){
	?>
			<option value="<?php echo $num;?>"><?php echo $num; ?></option>
	<?php
			$num--;
		}
}

function Populate_Dropdown20(){
	$num = 20;

	while($num>=1){
	?>
			<option value="<?php echo $num;?>"><?php echo $num; ?></option>
	<?php
			$num--;
		}
}
?>


<body>
</body>
</html>