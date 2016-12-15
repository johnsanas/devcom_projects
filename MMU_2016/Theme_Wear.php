<!DOCTYPE html>
<html>
<head>
	<title>Theme Wear</title>
</head>
<body>

	<form method="Post" action="Criteria.php">
		<label for="poise_bearing">Poise and Bearing 30%
		<input type="number" min="0" max="30" name="poise_bearing">
		<br>
 
		<label for="carriage">Carriage 30%
		<input type="number" min="0" max="30" name="carriage">
		<br>

		<label for="beauty">Beauty 20%
		<input type="number" min="0" max="20" name="beauty">
		<br>

		<label for="elegance_sophistication">Elegance and Sophistication 20%
		<input type="number" min="0" max="20" name="elegance_sophistication">
		<br>

		<input type="submit" value="Submit">


	</form>



</body>
</html>

<?php 

function subCriteria($poisber, $carr, $beau, $elesoph){

	$score = $poisber + $carr + $beau + $elesoph;
	$score *= 0.20;

	return $score;

}

$poise_bearing = $_POST["poise_bearing"];
$carriage = $_POST["carriage"];
$beauty = $_POST["beauty"];
$elegance_sophistication = $_POST["elegance_sophistication"];

/*
$Theme_Wear = $Theme_poise_bearing + $Theme_carriage + $Theme_beauty + $Theme_elegance_sophistication;
$Theme_Wear *= 0.20;
*/
echo "<b>Wear</b>" ."<br>";
echo "Poise Bearing " . $poise_bearing ."<br>";
echo "Carriage " . $carriage ."<br>";
echo "Beauty " . $beauty ."<br>";
echo "Elegance Sophistication " . $elegance_sophistication ."<br>";


echo "<b>" . "Score" . subCriteria($poise_bearing, $carriage, $beauty, $elegance_sophistication  ) . "</b>";

