<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">

		<title>Funkcje</title>
</head>
<body>

<?php

function napisz($kurs, $opis) {
	$nazwa_kursu=$kurs;
	$opis_kursu=$opis;
	echo "Witaj w kursie $nazwa_kursu,<br/> opis: $opis_kursu !<br>\n";
}

napisz('PHP','Kurs o języku PHP');

function rabat($kwota,$procent) {
	global $wynik;
	$wynik=$kwota-($kwota*$procent/100);
	return $wynik;
}
echo rabat(100,10);
echo $wynik;

function licznik() {
	static $licznik=0;
	$licznik++;
	echo $licznik."<br>\n";
}
echo"<hr>\n";
for ($i=1;$i<=5;$i++)
	licznik();
?>
</body>
</html>