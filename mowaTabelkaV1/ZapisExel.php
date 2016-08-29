
<?php

//Zapis do EXELA z auto ściągnieciem go.

header("Content-type: text/csv; charset=UTF-8");
header("Content-Disposition: attachment; filename=Exel.csv");
header("Pragma: no-cache");
header("Expires: 0");
ob_end_clean();//czyszczenie pierwszej lini
echo "\xEF\xBB\xBF";
$napis = $_POST["tekst"];
$napis = str_replace("+n","\n",$napis);
echo $napis;
header("Connection: close");




?>