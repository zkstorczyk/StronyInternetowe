<?php
session_start();
//echo str_replace("world","Peter","Hello world!");
//$txt = str_replace("world","Peter",$_SESSION["odp"]);
//header("Location: ".$txt);
/*
echo "czesc 1 pierwszy ekran zgody<br>";
echo $_SESSION["kod"];
echo "<br>";
echo "Pytania cześć 1 + wynik z kart<br>";
print_r($_SESSION["abc"]);

echo "<br>";

/*echo "Pytania 2 czesc<br>";
print_r($_GET);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>"; 

echo implode(",",$_SESSION["abc"]);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>"; 
echo implode(",",$_GET);
echo "<br>"; 
echo "<br>"; 


echo "Dziękujemy za udział w wzięciu w badaniach<br>";
//zapis druga metoda
$czesc1=implode(";",$_SESSION["abc"]);
$czesc2=implode(";",$_GET);

$wynik=$_SESSION["kod"].";".$czesc1.";".$czesc2;


$current = file_put_contents("Wyniki.csv", $wynik.PHP_EOL , FILE_APPEND);


// Baza danych
$czesc1=implode(",",$_SESSION["abc"]);
$czesc2=implode(",",$_GET);




$servername = "sql.pandryszak.nazwa.pl";
$username = "pandryszak";
$password = "MySQL2016!";
/*
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully Pelen sukces huraa  Podlaczenie do bazy danych dziala ale jescze wynikow nie wpisuje.";
*/

/*


 $polecenie = INSERT INTO `pandryszak`.`OdpowiedziFormularzGracza` (`ID`, `KodZezwolenie`, `SD1`, `SD2`, `SD3`, `SD4`, `ZS1`, `ZS2`, `ZS3`, `ZS4`, `ZS5`, `ZS6`, `ZS7`, `ZS8`, `GI1`, `GI2`, `GI3`, `GI4`, `GI5`, `GI6`, `GI7`, `GI8`, `GI9`, `GI10`, `GI11`, `GI12`, `GI13`, `GI14`, `GI15`, `GI16`, `GI17`, `GI18`, `GI19`, `GI20`, `GAS1`, `GAS2`, `GAS3`, `GAS4`, `GAS5`, `GAS6`, `GAS7`, `AUDIT1`, `AUDIT2`, `AUDIT3`, `AUDIT4`, `AUDIT5`, `AUDIT6`, `AUDIT7`, `AUDIT8`, `AUDIT9`, `AUDIT10`, `ASIST1`, `ASIST2`, `ASIST3`, `ASIST4`, `ASIST5`, `ASIST6`, `Karty`, `GPM1`, `GPM2`, `GPM3`, `GPM4`, `GPM5`, `GPM6`, `GPM7`, `GPM8`, `GPM9`, `GPM10`, `GPM11`, `GPM12`, `GPM13`, `GPM14`, `GPM15`, `SDHS1`, `SDHS2`, `SDHS3`, `SDHS4`, `SDHS5`, `SDHS6`, `UPPS1`, `UPPS2`, `UPPS3`, `UPPS4`, `UPPS5`, `UPPS6`, `UPPS7`, `UPPS8`, `UPPS9`, `UPPS10`, `UPPS11`, `UPPS12`, `UPPS13`, `UPPS14`, `UPPS15`, `UPPS16`, `UPPS17`, `UPPS18`, `UPPS19`, `UPPS20`, `MEQ1`, `MEQ2`, `MEQ3`, `MEQ4`, `MEQ5`, `MEQ6`, `MEQ7`, `MEQ8`, `MEQ9`, `MEQ10`, `MEQ11`, `MEQ12`, `MEQ13`, `MEQ14`, `MEQ15`, `MEQ16`, `MEQ17`, `MEQ18`, `MEQ19`, `MEQ20`, `MEQ21`, `ACS1`, `ACS2`, `ACS3`, `ACS4`, `ACS5`, `ACS6`, `ACS7`, `ACS8`, `ACS9`, `ACS10`, `ACS11`, `ACS12`, `ACS13`, `ACS14`, `ACS15`, `ACS16`, `ACS17`, `ACS18`, `ACS19`, `ACS20`, `LB1`, `LB2`)
VALUES ('0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);



*/
/*
try {
    $conn = new PDO("mysql:host=$servername;dbname=pandryszak", $username, $password);
    // set the PDO error mode to exception nie ruszac tego 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	/*
	 $sql = "INSERT INTO `pandryszak`.`OdpowiedziFormularzGracza` (`ID`, `KodZezwolenie`, `SD1`, `SD2`, `SD3`, `SD4`, `ZS1`, `ZS2`, `ZS3`, `ZS4`, `ZS5`, `ZS6`, `ZS7`, `ZS8`, `GI1`, `GI2`, `GI3`, `GI4`, `GI5`, `GI6`, `GI7`, `GI8`, `GI9`, `GI10`, `GI11`, `GI12`, `GI13`, `GI14`, `GI15`, `GI16`, `GI17`, `GI18`, `GI19`, `GI20`, `GAS1`, `GAS2`, `GAS3`, `GAS4`, `GAS5`, `GAS6`, `GAS7`, `AUDIT1`, `AUDIT2`, `AUDIT3`, `AUDIT4`, `AUDIT5`, `AUDIT6`, `AUDIT7`, `AUDIT8`, `AUDIT9`, `AUDIT10`, `ASIST1`, `ASIST2`, `ASIST3`, `ASIST4`, `ASIST5`, `ASIST6`, `Karty`, `GPM1`, `GPM2`, `GPM3`, `GPM4`, `GPM5`, `GPM6`, `GPM7`, `GPM8`, `GPM9`, `GPM10`, `GPM11`, `GPM12`, `GPM13`, `GPM14`, `GPM15`, `SDHS1`, `SDHS2`, `SDHS3`, `SDHS4`, `SDHS5`, `SDHS6`, `UPPS1`, `UPPS2`, `UPPS3`, `UPPS4`, `UPPS5`, `UPPS6`, `UPPS7`, `UPPS8`, `UPPS9`, `UPPS10`, `UPPS11`, `UPPS12`, `UPPS13`, `UPPS14`, `UPPS15`, `UPPS16`, `UPPS17`, `UPPS18`, `UPPS19`, `UPPS20`, `MEQ1`, `MEQ2`, `MEQ3`, `MEQ4`, `MEQ5`, `MEQ6`, `MEQ7`, `MEQ8`, `MEQ9`, `MEQ10`, `MEQ11`, `MEQ12`, `MEQ13`, `MEQ14`, `MEQ15`, `MEQ16`, `MEQ17`, `MEQ18`, `MEQ19`, `MEQ20`, `MEQ21`, `ACS1`, `ACS2`, `ACS3`, `ACS4`, `ACS5`, `ACS6`, `ACS7`, `ACS8`, `ACS9`, `ACS10`, `ACS11`, `ACS12`, `ACS13`, `ACS14`, `ACS15`, `ACS16`, `ACS17`, `ACS18`, `ACS19`, `ACS20`, `LB1`, `LB2`) 
	 VALUES (NULL, 'abc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);"; //"INSERT INTO MyGuests (firstname, lastname, email)VALUES ('John', 'Doe', 'john@example.com')";
	 */
	 /*
	 
	 
	 $sql = "INSERT INTO `pandryszak`.`OdpowiedziFormularzGracza` (`ID`, `KodZezwolenie`, `SD1`, `SD2`, `SD3`, `SD4`, `ZS1`, `ZS2`, `ZS3`, `ZS4`, `ZS5`, `ZS6`, `ZS7`, `ZS8`, `GI1`, `GI2`, `GI3`, `GI4`, `GI5`, `GI6`, `GI7`, `GI8`, `GI9`, `GI10`, `GI11`, `GI12`, `GI13`, `GI14`, `GI15`, `GI16`, `GI17`, `GI18`, `GI19`, `GI20`, `GAS1`, `GAS2`, `GAS3`, `GAS4`, `GAS5`, `GAS6`, `GAS7`, `AUDIT1`, `AUDIT2`, `AUDIT3`, `AUDIT4`, `AUDIT5`, `AUDIT6`, `AUDIT7`, `AUDIT8`, `AUDIT9`, `AUDIT10`, `ASIST1`, `ASIST2`, `ASIST3`, `ASIST4`, `ASIST5`, `ASIST6`, `Karty`, `GPM1`, `GPM2`, `GPM3`, `GPM4`, `GPM5`, `GPM6`, `GPM7`, `GPM8`, `GPM9`, `GPM10`, `GPM11`, `GPM12`, `GPM13`, `GPM14`, `GPM15`, `SDHS1`, `SDHS2`, `SDHS3`, `SDHS4`, `SDHS5`, `SDHS6`, `UPPS1`, `UPPS2`, `UPPS3`, `UPPS4`, `UPPS5`, `UPPS6`, `UPPS7`, `UPPS8`, `UPPS9`, `UPPS10`, `UPPS11`, `UPPS12`, `UPPS13`, `UPPS14`, `UPPS15`, `UPPS16`, `UPPS17`, `UPPS18`, `UPPS19`, `UPPS20`, `MEQ1`, `MEQ2`, `MEQ3`, `MEQ4`, `MEQ5`, `MEQ6`, `MEQ7`, `MEQ8`, `MEQ9`, `MEQ10`, `MEQ11`, `MEQ12`, `MEQ13`, `MEQ14`, `MEQ15`, `MEQ16`, `MEQ17`, `MEQ18`, `MEQ19`, `MEQ20`, `MEQ21`, `ACS1`, `ACS2`, `ACS3`, `ACS4`, `ACS5`, `ACS6`, `ACS7`, `ACS8`, `ACS9`, `ACS10`, `ACS11`, `ACS12`, `ACS13`, `ACS14`, `ACS15`, `ACS16`, `ACS17`, `ACS18`, `ACS19`, `ACS20`, `LB1`, `LB2`) 
	 VALUES (NULL,".$_SESSION["kod"].",".$czesc1.",".$czesc2.";"; //"INSERT INTO MyGuests (firstname, lastname, email)VALUES ('John', 'Doe', 'john@example.com')";
	 
	 
	 
	$conn->exec($sql);//zatwierdzenie
	echo "<br>"; 
	//jesli to jest  to jest dobrze
    echo "Connected successfully Pelen sukces huraa  Podlaczenie do bazy danych dziala ale jescze wynikow nie wpisuje.";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

	
	*/
	
	
	
	$stoper_start =$_SESSION["czas"];
	$stoper_stop = microtime(true); //koniec pomiaru
	

//echo "Wyniki<br>";
//print_r($_GET);
str_replace("/n","\n",$_GET);

$czesc2=implode(";",$_GET);

$wynik=$_SESSION["kod"]."\n";
$wynik=$wynik.nl2br(str_replace("/n","\n",$czesc2));

$current = file_put_contents("WynikiKarty.csv", $wynik.PHP_EOL , FILE_APPEND);
echo "Dziekujemy za udzial Wyniki gry zostały zapisane a czas badania jest napisany poniżej w sekundach<br>";
echo bcsub($stoper_stop, $stoper_start, 4);
echo " s";





//konczenie sesji	
	 session_unset(); 

// destroy the session 
session_destroy(); 

?>