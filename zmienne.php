<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">

		<title>Zmienne</title>
</head>
<body>
<?php

//przypisanie i wypisanie
$licznik=0; echo $licznik; echo '<br>';
$Licznik="5"; echo $Licznik; echo '<br>';
$informacja="Stan licznika wynosi "; echo $informacja; echo '<br>';
$wlaczony=true; echo $wlaczony; echo '<br>';
$_zmienna_bez_wartosci=NULL; echo $_zmienna_bez_wartosci; echo '<br>';
$Llicznik=$Licznik; echo $Llicznik; echo '<br>';

$ilosc=7;
$informacja="Stan licznika wynosi ";

//łączenie ciągów znaków
$tekst=$informacja.$Licznik."<br>";
echo $tekst;

//operatory arytmetyczne
echo $ilosc+15; echo "<br>";
$ilosc-$ilosc+15;
$wynik1=$ilosc-$licznik;
$wynik2=$ilosc*$Licznik;
$wynik3=150/$ilosc;
$ilosc-2;
$reszta=15%$ilosc;
echo 'Reszta z dzielenie 15 / '.$ilosc.' wynosi '.$reszta; echo "<br>";

//operatory łączone
$wynik1+=5; // równoznaczne z: $wynik1=$wynik1+5;
$ilosc*=5; // równoznaczne z: $ilosc=$ilosc*5;

//inkrementacja i dekrementacja
$a=1;
//++$a; //preinkrementacja
$a++; //postinkrementacja
echo $a; echo "<br>";

//wytłómienie błędów/ostrzeżeń
@$wynik=$ilosc/0;

//definiowanie stałych
define('VAT',0.22);

$cenaBrutto=50;
$cenaNetto=$cenaBrutto/(VAT+1);

echo "Cena netto wynosi ".$cenaNetto; echo "<br>";

define('Adres',"https://www.interia.pl"); echo "<br>";
echo "Cena netto wynosi $cenaNetto"; echo"<br>"; // zmienna jako wartość zmiennej
echo 'Cena netto wynosi $cenaNetto'; echo"<br>"; //zmienna jako nazwa zmiennej
echo"<br>"; //nowa linia przy odczycie
echo"<br>\n"; // nowa linia w odczycie i w kodzie
?>
<a href="<?php echo Adres; ?>">Przejdź do strony głównej</a>
</body>
</html>