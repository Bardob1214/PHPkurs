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

?>
</body>
</html>