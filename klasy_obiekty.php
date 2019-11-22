<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-2">

		<title>Podstawy projektowania obiektowego</title>
</head>
<body>

<?php

class PlanBudynku
{
	public $ilosc_okien = 10;

	public function __construct()
	{
		echo 'Utworzono budynek na podstawie instrukcji ' . __CLASS__ . '<br>';
	}

	public function __destruct()
	{
		echo 'Zniszczono budynek z instrukcji ' . __CLASS__ . '<br>';
	}

	public function ustaw_ilosc_okien($nowa_ilosc_okien)
	{
		$this->ilosc_okien = $nowa_ilosc_okien;
	}

	public function pobierz_ilosc_okien()
	{
		return $this->ilosc_okien;
	}	
}
class PlanBudynkuZgarazem extends PlanBudynku
{
	public $ilosc_miejsc_postojowych = 1;
}

$budynek1 = new PlanBudynku;
$budynek2 = new PlanBudynku;
$budynek3 = new PlanBudynkuZgarazem;

echo $budynek1->ilosc_okien . '<hr>';

$budynek1->ustaw_ilosc_okien(5);
$budynek2->ustaw_ilosc_okien(22);
$budynek3->ustaw_ilosc_okien(3);

echo 'Budynek 1 ma ' . $budynek1->pobierz_ilosc_okien() . ' okien <br>';
unset($budynek1);
echo 'Budynek 2 ma ' . $budynek2->pobierz_ilosc_okien() . ' okien<br>';
echo 'Budynek 3 ma ' . $budynek3->pobierz_ilosc_okien() . ' okien i garaz na '. $budynek3->ilosc_miejsc_postojowych .' miejsce postojowe<br>';

echo 'koniec pliku <br>';
?>
</body>
</html>