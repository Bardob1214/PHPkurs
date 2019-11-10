<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">

		<title>Instrukcja SWITCH...CASE</title>
</head>
<body>

<?php
$b=1;
while($b<10) {
	echo "$b przebieg pętli while.<br>\n";
	$b++;
}

do {
		echo "$b To jest pętla do...while.<br>\n";
} while($b<10);

echo "<br\>";
echo "<br\>";
echo "<br\>";

$c=1;
while ($c<15) {
	if ($c>10) 
		break;

	if ($c%2 <> 0) {
		$c++;
		continue;
	}
	echo "$c jest liczbą parzystą!<br>\n";
	$c++;
}
echo "<br>Ten fragment kodu wykona się po pętli WHILE.";
?>

</body>
</html>