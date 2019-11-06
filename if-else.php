<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">

		<title>Instrukcja warunkowa IF...ELSE</title>
</head>
<body>

<?php

$ilosc=18;
$klient="Krzysztof";

if ($ilosc == 15) {
	echo 'Zmienna $ilosc jest równa 15!' . "<br/>";
	$sprawdzenie=true;
}
elseif ($ilosc>15) {
	echo 'Zmienna $ilosc jest większa niż 15!'."<br/>";
	$sprawdzenie=false;
}
	

else {
	echo 'Zmienna $ilosc jest mniejsza niż 15' . "<br/>";
	$sprawdzenie=true;
}

if ($sprawdzenie == true)
	echo 'Zmienna $sprawdzenie jest TRUE' . "<br/>";
/*
Operatory porównania:
---------------------------------
Operatory	Zwraca TRUE, jeśli:
--------	-------------------
==			Równość (takie same wartości)
===			Identyczność (identyczne wartości i typy zmiennych)
!=			Nierówność
<>			-=-
<			Mniejszy
>			Większy
<=			Mniejszy lub równy
>=			Większy lub równy
*/

?>
