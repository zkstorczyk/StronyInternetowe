<?php
session_start();
//echo str_replace("world","Peter","Hello world!");
//$txt = str_replace("world","Peter",$_SESSION["odp"]);
//header("Location: ".$txt);
/*
echo "czesc 1 pierwszy ekran zgody<br>";
echo $_SESSION["kod"];
echo "<br>";
echo "Pytania czeœæ 1 + wynik z kart<br>";
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
echo "<br>"; */



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
	
	
	
	
	
	
//konczenie sesji	
	 session_unset(); 

// destroy the session 
session_destroy(); 


?>



<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1250">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="laczenie_pliki/filelist.xml">
<link rel=Edit-Time-Data href="laczenie_pliki/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Paulina Andryszak</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>UKW</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>1</o:TotalTime>
  <o:LastPrinted>2016-06-01T09:06:00Z</o:LastPrinted>
  <o:Created>2016-06-01T10:55:00Z</o:Created>
  <o:LastSaved>2016-06-01T10:55:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>36</o:Words>
  <o:Characters>216</o:Characters>
  <o:Lines>1</o:Lines>
  <o:Paragraphs>1</o:Paragraphs>
  <o:CharactersWithSpaces>251</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="laczenie_pliki/themedata.thmx">
<link rel=colorSchemeMapping href="laczenie_pliki/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:HyphenationZone>21</w:HyphenationZone>
  <w:PunctuationKerning/>
  <w:DrawingGridHorizontalSpacing>5,5 pkt</w:DrawingGridHorizontalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>2</w:DisplayHorizontalDrawingGridEvery>
  <w:DisplayVerticalDrawingGridEvery>2</w:DisplayVerticalDrawingGridEvery>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>PL</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <w:DoNotOptimizeForBrowser/>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
  DefSemiHidden="true" DefQFormat="false" DefPriority="99"
  LatentStyleCount="267">
  <w:LsdException Locked="false" Priority="0" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" Priority="10" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" Priority="11" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" Priority="22" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="false"
   UnhideWhenUsed="false" Name="Table Grid"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:238;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1073786111 1 0 415 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
a:link, span.MsoHyperlink
	{mso-style-priority:99;
	color:#0563C1;
	mso-themecolor:hyperlink;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:#954F72;
	mso-themecolor:followedhyperlink;
	text-decoration:underline;
	text-underline:single;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"Tekst dymka Znak";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-bidi-font-family:Tahoma;
	mso-fareast-language:EN-US;}
span.TekstdymkaZnak
	{mso-style-name:"Tekst dymka Znak";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Tekst dymka";
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	mso-ascii-font-family:Tahoma;
	mso-hansi-font-family:Tahoma;
	mso-bidi-font-family:Tahoma;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:12.0pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
@page WordSection1
	{size:842.0pt 595.0pt;
	mso-page-orientation:landscape;
	margin:70.85pt 70.85pt 70.85pt 70.85pt;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:Standardowy;
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-fareast-language:EN-US;}
table.MsoTableGrid
	{mso-style-name:"Tabela - Siatka";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-priority:39;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-fareast-language:EN-US;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=PL link="#0563C1" vlink="#954F72" style='tab-interval:35.4pt'>

<div class=WordSection1>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
lang=FR style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:
text1;mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0;mso-ansi-language:FR;mso-no-proof:yes'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'><o:p>&nbsp;</o:p></span></p>

<div align=center>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  <td width=933 valign=top style='width:699.8pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center;background:#DEEAF6;
  mso-background-themecolor:accent1;mso-background-themetint:51'><span
  style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
  mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
  0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
  round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
  solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
  simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
  mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
  1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:
  topleft;mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;
  mso-effects-shadow-anglekx:0;mso-effects-shadow-angleky:0'><br>Bardzo dziêkujemy
  za poœwiêcony czas i udzia³ w badaniu.<br> Pana/i odpowiedzi s¹ dla nas bardzo
  wa¿ne!<br><o:p></o:p></span><br></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span lang=FR style='font-size:14.0pt;
color:black;mso-themecolor:text1;mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0;mso-ansi-language:FR;mso-no-proof:yes'>Badanie:<o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:14.0pt;color:black;
mso-themecolor:text1;mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'>NEUROPSYCHOLOGICZNE ASPEKTY GIER ONLINE<span
style='mso-spacerun:yes'>  </span><o:p></o:p></span></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:14.0pt;color:black;
mso-themecolor:text1;mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'>Kontakt :</span><span style='font-size:14.0pt'>
</span><a href="mailto:contact@neuropsygame.eu"><span style='font-size:14.0pt'>contact@neuropsygame.eu</span></a><span
style='font-size:14.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  <td width="35%" valign=top style='width:35.22%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><a href="http://www.ukw.edu.pl/"><span style='font-size:
  14.0pt;line-height:115%;color:black;mso-themecolor:text1;mso-fareast-language:
  PL;mso-no-proof:yes;text-decoration:none;text-underline:none'><!--[if gte vml 1]><v:shapetype
   id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
   path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
   <v:stroke joinstyle="miter"/>
   <v:formulas>
    <v:f eqn="if lineDrawn pixelLineWidth 0"/>
    <v:f eqn="sum @0 1 0"/>
    <v:f eqn="sum 0 0 @1"/>
    <v:f eqn="prod @2 1 2"/>
    <v:f eqn="prod @3 21600 pixelWidth"/>
    <v:f eqn="prod @3 21600 pixelHeight"/>
    <v:f eqn="sum @0 0 1"/>
    <v:f eqn="prod @6 1 2"/>
    <v:f eqn="prod @7 21600 pixelWidth"/>
    <v:f eqn="sum @8 21600 0"/>
    <v:f eqn="prod @7 21600 pixelHeight"/>
    <v:f eqn="sum @10 21600 0"/>
   </v:formulas>
   <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
   <o:lock v:ext="edit" aspectratio="t"/>
  </v:shapetype><v:shape id="Obraz_x0020_13" o:spid="_x0000_i1027" type="#_x0000_t75"
   href="http://www.ukw.edu.pl/" style='width:174pt;height:51pt;visibility:visible;
   mso-wrap-style:square' o:button="t">
   <v:imagedata src="laczenie_pliki/image001.jpg" o:title=""/>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
  border=0 width=232 height=68 src="laczenie_pliki/image002.jpg" v:shapes="Obraz_x0020_13"></span><![endif]></span></a><span
  style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
  mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
  0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
  round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
  solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
  simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
  mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
  1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:
  topleft;mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;
  mso-effects-shadow-anglekx:0;mso-effects-shadow-angleky:0'><o:p></o:p></span></p>
  </td>
  <td width="34%" valign=top style='width:34.12%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><a href="http://www.unige.ch/"><span style='font-size:
  14.0pt;line-height:115%;color:black;mso-themecolor:text1;mso-fareast-language:
  PL;mso-no-proof:yes;text-decoration:none;text-underline:none'><!--[if gte vml 1]><v:shape
   id="Picture_x0020_6" o:spid="_x0000_i1026" type="#_x0000_t75" alt="sur_fond50"
   href="http://www.unige.ch/" style='width:168pt;height:60.75pt;visibility:visible;
   mso-wrap-style:square' o:button="t">
   <v:imagedata src="laczenie_pliki/image003.png" o:title="sur_fond50"/>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
  border=0 width=224 height=81 src="laczenie_pliki/image004.jpg"
  alt="sur_fond50" v:shapes="Picture_x0020_6"></span><![endif]></span></a><span
  style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
  mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
  0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
  round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
  solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
  simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
  mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
  1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:
  topleft;mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;
  mso-effects-shadow-anglekx:0;mso-effects-shadow-angleky:0'><o:p></o:p></span></p>
  </td>
  <td width="30%" valign=top style='width:30.66%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><a href="http://www.hug-ge.ch/"><span style='font-size:
  14.0pt;line-height:115%;color:black;mso-themecolor:text1;mso-fareast-language:
  PL;mso-no-proof:yes;text-decoration:none;text-underline:none'><!--[if gte vml 1]><v:shape
   id="Obraz_x0020_12" o:spid="_x0000_i1025" type="#_x0000_t75"
   href="http://www.hug-ge.ch/" style='width:150pt;height:57pt;visibility:visible;
   mso-wrap-style:square' o:button="t">
   <v:imagedata src="laczenie_pliki/image005.jpg" o:title="" croptop="10385f"
    cropbottom="14867f" cropleft="5494f"/>
  </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'><img
  border=0 width=200 height=76 src="laczenie_pliki/image006.jpg" v:shapes="Obraz_x0020_12"></span><![endif]></span></a><span
  style='font-size:14.0pt;line-height:115%;color:black;mso-themecolor:text1;
  mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
  0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
  round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
  solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
  simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
  mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
  1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:
  topleft;mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;
  mso-effects-shadow-anglekx:0;mso-effects-shadow-angleky:0'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14.0pt;color:black;mso-themecolor:text1;
mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14.0pt;color:black;mso-themecolor:text1;
mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'><span style='mso-spacerun:yes'> </span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14.0pt;color:black;mso-themecolor:text1;
mso-style-textoutline-type:none;mso-style-textoutline-outlinestyle-dpiwidth:
0pt;mso-style-textoutline-outlinestyle-linecap:flat;mso-style-textoutline-outlinestyle-join:
round;mso-style-textoutline-outlinestyle-pctmiterlimit:0%;mso-style-textoutline-outlinestyle-dash:
solid;mso-style-textoutline-outlinestyle-align:center;mso-style-textoutline-outlinestyle-compound:
simple;mso-effects-shadow-color:black;mso-effects-shadow-themecolor:dark1;
mso-effects-shadow-alpha:40.0%;mso-effects-shadow-dpiradius:3.0pt;mso-effects-shadow-dpidistance:
1.5pt;mso-effects-shadow-angledirection:2700000;mso-effects-shadow-align:topleft;
mso-effects-shadow-pctsx:100.0%;mso-effects-shadow-pctsy:100.0%;mso-effects-shadow-anglekx:
0;mso-effects-shadow-angleky:0'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
