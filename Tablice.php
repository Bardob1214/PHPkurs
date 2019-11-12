<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">

		<title>Tablice</title>
</head>
<body>

<?php

$uzytkownik=array('Roman', 'Ania', "Tomek", "Krzysiek");
$uzytkownik[5]='Jarek';
echo $uzytkownik [5]; //Ania
echo "<br>\n";

$abc[0]=234;

echo $abc[0];

echo "<br>\n";

echo "<pre>";
print_r($uzytkownik);
echo "</pre>";

echo "<pre>";
print_r($abc);
echo "</pre>";
// -----------------------------------------------------------
echo "<hr>\n";

$xyz=array(24, 'tabeta', array('pn','wt','śr','czw','pt','so','nd'));
$xyz[2][]='tydzien';
echo "<pre>";
print_r($xyz);
echo "</pre>";

echo "<hr>\n";
// ------------------------------------------------------------
echo $xyz[2][3];
echo "<br>\n";
// Tablice asocjacyjne -----------------------------

$uzytkownik2=array('imie'=>'Michał','nazwisko'=>'Kowalski','wiek'=>26);
echo$uzytkownik2['nazwisko'];
echo "<br>\n";
$uzytkownik2['płeć']='mężczyzna';

echo "<pre>";
print_r($uzytkownik2);
echo "<pre>";

// -----------------------------------------------------------
echo "<hr>\n";

$baza=array('imie'=>array(), 'nazwisko'=>array(), 'wiek'=>array());

$baza['imie'][]='Barbara';
$baza['nazwisko'][]='Pasikonik';
$baza['wiek'][]='22';

$baza['imie'][]='Tomasz';
$baza['nazwisko'][]='Wielbłąd';
$baza['wiek'][]='31';

$baza['imie'][]='Janina';
$baza['nazwisko'][]='Kozioł';
$baza['wiek'][]='25';

echo "<pre>";
print_r($baza);
echo "<pre>";

$ilosc_rzedow=count($baza['imie']); // count - policz
echo $ilosc_rzedow;
echo "<br>\n";
for ($rzad=0; $rzad<$ilosc_rzedow; $rzad++) {
	echo $baza['nazwisko'][$rzad].', '.$baza['imie'][$rzad].', ('.$baza['wiek'][$rzad].")<br>\n";
}
?>

</body>
</html>