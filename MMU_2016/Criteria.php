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

