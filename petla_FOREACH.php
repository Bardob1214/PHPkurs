<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">

		<title>Pętla FOREACH</title>
</head>
<body>

<?php
$imie=array('Roman','Ania','Kasia','Tomek','Krzysiek');
// foreach - dla każdego elementu tablicy
foreach($imie as $wartosc) {
	echo $wartosc."<br>\n";
}
echo "<hr>\n";

$uzytkownik=array('imie'=>'Michał','nazwisko'=>'Kowalski','wiek'=>26,'płeć'=>'mężczyzna','studiuje'=>true );


foreach($uzytkownik as $klucz=>$wartosc) {
	echo ucfirst($klucz).": ".$wartosc."<br>\n";

}

?>
</body>
</html>