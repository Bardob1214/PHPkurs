<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">

		<title>Instrukcja warunkowa IF...ELSE</title>
</head>
<body>

<?php

$ilosc=17;
$klient="Krzysztof";

if (($ilosc>15) && ($ilosc<46)) {
	echo 'Zmienna $ilosc jest większa niż 15 i mniejsza niż 45!' . "<br/>";
	$sprawdzenie=true;
}
elseif ($ilosc>15) {
	echo 'Zmienna $ilosc leży poza zakresem 16-44!'."<br/>";
	$sprawdzenie=false;
}
	

else {
	echo 'Zmienna $ilosc jest mniejsza niż 15' . "<br/>";
	$sprawdzenie=true;
}

if (!$sprawdzenie == false)
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

/*
Podstawowe operatory logiczne
------------------------------------------
Symbol  Nazwa  Przykład
------  -----  --------
!       NOT    np. !$wlaczony
(zwraca TRUE, jeśli zmienna $wlaczony jest FALSE)

&&      AND    np. $ilosc -- 10 && $klient=="Bogdan"
(zwraca TRUE, jeśli oba porównania są TRUE)

||      OR     np. $ilosc > 10 || $kwota > 100
(zwraca TRUE, jeśli oba porównania lub jedno z nich jest TRUE)
*/
?>
