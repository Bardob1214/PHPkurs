<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">

		<title>Operacje na tablicach</title>
</head>
<body>

<?php

$liczby=array(32.09,-8,-20,120,40.56,5);

// MIN i MAX
echo 'MAX: '.max($liczby).'<br>';
echo 'MIN: '.min($liczby).'<br>';

// Czy wartość znajduje się w tablicy
if (in_array(4,$liczby))
	echo "Cyfra 4 znajduje się w tablicy.<br>";
else
	echo "Cyfra 4 nie znajduje się w tablicy.<br>";
echo "<hr>";

// Sortowanie
echo "Sortowanie - wartości liczbowe<br>";
//sort($liczby); // sortuj rosnąco
rsort($liczby); // sortuj malejąco
echo "<pre>"; print_r($liczby); echo "</pre>";
echo "<hr>";
// -----------
echo "Sortowanie - cięgi znaków<br>";
$imiona=array('Jadwiga','Adam','adam','tomasz','Zenon','Tomasz','lucyna');
sort ($imiona);
echo "<pre>"; print_r($imiona); echo "</pre>";

/*
asort($tablica_asocjacyjna); //sortuj rosnąco tabl. asocjacyjną
arsort($tablica_asocjacyjna); //sortuj malejąco tabl. asocjacyjną
*/
echo "<hr>";
// tablica asocjacyjna
echo "Zamiana kluczy z wartościami (array_flip)<br>";
$tablica=array('imie'=>'Michał','nazwisko'=>'Kowalski','wiek'=>26);
echo "<pre>"; print_r($tablica); echo "<pre>";
$zamiana=array_flip($tablica);
echo "<pre>"; print_r($zamiana); echo "<pre>";
?>
</body>
</html>