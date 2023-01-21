<?php
if ($_POST["BMI"] == "Bereken")
{
$gewicht = $_POST["txtKilo"];
$lengte = $_POST["txtMeter"];
if ((!empty($_POST["txtKilo"]))&&(!empty($_POST["txtMeter"]))){
$totaal = $gewicht / ($lengte*$lengte);	
echo "Uw BMI is: $totaal";
}
else{
	echo"Er is een veld niet ingevuld.<br/>";
}
}
else if($_POST["BMR"] == "Bereken")
{
$kilo = $_POST["txtKilo_"];
$centi = $_POST["txtCenti"];
$leeftijd = $_POST["txtLeeftijd"];
$radio = $_POST["gender"];
if ((!empty($_POST["txtKilo_"]))&&(!empty($_POST["txtCenti"] && $_POST["txtLeeftijd"] && $_POST["gender"])))
{
$totaal = "";
if($radio == "man")
{
	$totaal2 = (((13.7516 * $kilo) + (5.0033 * $centi)-(6.755 *$leeftijd)) + 66.473);
	echo "BMR-waarde (man): $totaal2 kcal per dag.";
}
else if ($radio == "vrouw")
{
	$totaal2 = (((9.5634 *$kilo) + (1.8496 * $centi)- (4.6756 *$leeftijd)) + 655.0955);
	echo "BMR-waarde (vrouw): $totaal2 kcal per dag.";
}
}
else
{
	echo"Er is een veld niet ingevuld.<br/>";
}
}
?>