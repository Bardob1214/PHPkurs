<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">

		<title>Instrukcja SWITCH...CASE</title>
</head>
<body>
 
<?php

$imie="Roman";

switch($imie) {

	case "Tomasz":
		echo "Witaj Tomaszu!";
		$zmianna=10;
		break;
	case "Julian":
		echo "Witaj Julian!";
		$zmienna=20;
	break;
	case "Agnieszka":
		echo "Witaj Agnieszko!";
		$zmienna=0;
	break;
	default:
		echo "Witaj nieznajomy!";
}


?>
