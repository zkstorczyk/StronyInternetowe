<?php
session_start();
$_SESSION["odp"] = $_SERVER["HTTP_REFERER"];
//$_SESSION["abc"] = $_GET;


$stoper_start =$_SESSION["czas"];
	$stoper_stop = microtime(true); //koniec pomiaru
	

//echo "Wyniki<br>";
//print_r($_GET);
str_replace("/n","\n",$_GET);

$czesc2=implode(";",$_GET);

//$wynik=nl2br($czesc2);
$wynik=$_SESSION["kod"]."\n".nl2br(str_replace("/n","\n",$czesc2));
//$wynik=$wynik.nl2br(str_replace("/n","\n",$czesc2));

$current = file_put_contents("WynikiKarty.csv", $wynik.PHP_EOL , FILE_APPEND);
?>




<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta charset="UTF-8">
<meta http-equiv=Content-Type content="text/html; charset=windows-1250">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="pytania2_pliki/filelist.xml">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>PA</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>UKW</o:LastAuthor>
  <o:Revision>3</o:Revision>
  <o:TotalTime>270</o:TotalTime>
  <o:Created>2016-04-07T07:45:00Z</o:Created>
  <o:LastSaved>2016-04-07T08:01:00Z</o:LastSaved>
  <o:Pages>5</o:Pages>
  <o:Words>1874</o:Words>
  <o:Characters>11247</o:Characters>
  <o:Company>PA</o:Company>
  <o:Lines>93</o:Lines>
  <o:Paragraphs>26</o:Paragraphs>
  <o:CharactersWithSpaces>13095</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=dataStoreItem href="pytania2_pliki/item0006.xml"
target="pytania2_pliki/props007.xml">
<link rel=themeData href="pytania2_pliki/themedata.thmx">
<link rel=colorSchemeMapping href="pytania2_pliki/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:Zoom>120</w:Zoom>
  <w:SpellingState>Clean</w:SpellingState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:HyphenationZone>21</w:HyphenationZone>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>PL</w:LidThemeOther>
  <w:LidThemeAsian>JA</w:LidThemeAsian>
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
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
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
  <w:LsdException Locked="false" Priority="59" SemiHidden="false"
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
  <w:LsdException Locked="false" SemiHidden="false" UnhideWhenUsed="false"
   QFormat="true" Name="List Paragraph"/>
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
	{font-family:Helvetica;
	panose-1:2 11 5 4 2 2 2 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:SimSun;
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-alt:\5B8B\4F53;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:3 680460288 22 0 262145 0;}
@font-face
	{font-family:Mangal;
	panose-1:0 0 4 0 0 0 0 0 0 0;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:8192 0 0 0 0 0;}
@font-face
	{font-family:Mangal;
	panose-1:0 0 4 0 0 0 0 0 0 0;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:8192 0 0 0 0 0;}
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
	mso-font-charset:238;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
@font-face
	{font-family:Times;
	panose-1:2 2 6 3 5 4 5 2 3 4;
	mso-font-charset:238;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536858881 -1073711037 9 0 511 0;}
@font-face
	{font-family:TT25o00;
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-charset:238;
	mso-generic-font-family:auto;
	mso-font-format:other;
	mso-font-pitch:auto;
	mso-font-signature:5 0 0 0 2 0;}
@font-face
	{font-family:Garamond;
	panose-1:2 2 4 4 3 3 1 1 8 3;
	mso-font-charset:238;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:647 0 0 0 159 0;}
@font-face
	{font-family:Helvetica-Bold;
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1342208091 0 0 415 0;}
@font-face
	{font-family:PLRoman12-Regular;
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-alt:"Times New Roman";
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-format:other;
	mso-font-pitch:auto;
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:PLRoman12-Italic;
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-alt:"Times New Roman";
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-format:other;
	mso-font-pitch:auto;
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:PLRoman8-Regular;
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-alt:"Times New Roman";
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-format:other;
	mso-font-pitch:auto;
	mso-font-signature:3 0 0 0 1 0;}
@font-face
	{font-family:"\@SimSun";
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:3 680460288 22 0 262145 0;}
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
h3
	{mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-qformat:yes;
	mso-style-link:"Nag��wek 3 Znak";
	mso-margin-top-alt:auto;
	margin-right:0cm;
	mso-margin-bottom-alt:auto;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	mso-outline-level:3;
	font-size:13.5pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";
	font-weight:bold;}
p.MsoPlainText, li.MsoPlainText, div.MsoPlainText
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"Zwyk�y tekst Znak";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	mso-bidi-font-size:10.5pt;
	font-family:"Calibri","sans-serif";
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
p
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-margin-top-alt:auto;
	margin-right:0cm;
	mso-margin-bottom-alt:auto;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;}
pre
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"HTML - wst�pnie sformatowany Znak";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;
	font-size:10.0pt;
	font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";}
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
	mso-fareast-language:EN-US;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
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
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
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
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
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
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
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
span.Nagwek3Znak
	{mso-style-name:"Nag��wek 3 Znak";
	mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Nag��wek 3";
	mso-ansi-font-size:13.5pt;
	mso-bidi-font-size:13.5pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	mso-fareast-language:PL;
	font-weight:bold;}
span.HTML-wstpniesformatowanyZnak
	{mso-style-name:"HTML - wst�pnie sformatowany Znak";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"HTML - wst�pnie sformatowany";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Courier New";
	mso-ascii-font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Courier New";
	mso-bidi-font-family:"Courier New";
	mso-fareast-language:PL;}
span.ZwykytekstZnak
	{mso-style-name:"Zwyk�y tekst Znak";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Zwyk�y tekst";
	mso-bidi-font-size:10.5pt;
	font-family:"Calibri","sans-serif";
	mso-ascii-font-family:Calibri;
	mso-hansi-font-family:Calibri;}
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
p.Default, li.Default, div.Default
	{mso-style-name:Default;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-layout-grid-align:none;
	text-autospace:none;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	color:black;
	mso-fareast-language:EN-US;}
span.hps
	{mso-style-name:hps;
	mso-style-unhide:no;}
span.shorttext
	{mso-style-name:short_text;
	mso-style-unhide:no;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
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
	{size:595.3pt 841.9pt;
	margin:70.85pt 70.85pt 70.85pt 70.85pt;
	mso-header-margin:35.4pt;
	mso-footer-margin:35.4pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:1;
	mso-list-type:simple;
	mso-list-template-ids:1;
	mso-list-name:WW8Num1;}
@list l0:level1
	{mso-level-tab-stop:0cm;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l1
	{mso-list-id:866722570;
	mso-list-type:hybrid;
	mso-list-template-ids:-104716978 -854940660 68485123 68485125 68485121 68485123 68485125 68485121 68485123 68485125;}
@list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F071;
	mso-level-tab-stop:53.5pt;
	mso-level-number-position:left;
	margin-left:53.5pt;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:72.9pt;
	mso-level-number-position:left;
	margin-left:72.9pt;
	text-indent:-18.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:108.9pt;
	mso-level-number-position:left;
	margin-left:108.9pt;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:144.9pt;
	mso-level-number-position:left;
	margin-left:144.9pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:180.9pt;
	mso-level-number-position:left;
	margin-left:180.9pt;
	text-indent:-18.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:216.9pt;
	mso-level-number-position:left;
	margin-left:216.9pt;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:252.9pt;
	mso-level-number-position:left;
	margin-left:252.9pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:288.9pt;
	mso-level-number-position:left;
	margin-left:288.9pt;
	text-indent:-18.0pt;
	font-family:"Courier New";
	mso-bidi-font-family:"Times New Roman";}
@list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:324.9pt;
	mso-level-number-position:left;
	margin-left:324.9pt;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2
	{mso-list-id:918293880;
	mso-list-type:hybrid;
	mso-list-template-ids:-1356416794 68485123 68485123 68485125 68485121 68485123 68485125 68485121 68485123 68485125;}
@list l2:level1
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l2:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l2:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l2:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l2:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l3
	{mso-list-id:1396659143;
	mso-list-type:hybrid;
	mso-list-template-ids:469799150 68485135 68485145 68485147 68485135 68485145 68485147 68485135 68485145 68485147;}
@list l3:level1
	{mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l3:level4
	{mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l3:level7
	{mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l3:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l4
	{mso-list-id:1412238189;
	mso-list-type:hybrid;
	mso-list-template-ids:-1040033820 573856250 68485145 68485147 68485135 68485145 68485147 68485135 68485145 68485147;}
@list l4:level1
	{mso-level-start-at:2;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Times New Roman","serif";}
@list l4:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l4:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:108.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l4:level4
	{mso-level-tab-stop:144.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l4:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:180.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l4:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:216.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l4:level7
	{mso-level-tab-stop:252.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l4:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:288.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l4:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:324.0pt;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l5
	{mso-list-id:1413359509;
	mso-list-type:hybrid;
	mso-list-template-ids:-1002253240 -1344234584 68485145 68485147 68485135 68485145 68485147 68485135 68485145 68485147;}
@list l5:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;}
@list l5:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;}
@list l5:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:90.0pt;
	text-indent:-9.0pt;}
@list l5:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:126.0pt;
	text-indent:-18.0pt;}
@list l5:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;}
@list l5:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:198.0pt;
	text-indent:-9.0pt;}
@list l5:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:234.0pt;
	text-indent:-18.0pt;}
@list l5:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;}
@list l5:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:306.0pt;
	text-indent:-9.0pt;}
@list l6
	{mso-list-id:2025400934;
	mso-list-type:hybrid;
	mso-list-template-ids:711859578 1216785924 68485145 68485147 68485135 68485145 68485147 68485135 68485145 68485147;}
@list l6:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	mso-ansi-font-weight:normal;}
@list l6:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;}
@list l6:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:90.0pt;
	text-indent:-9.0pt;}
@list l6:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:126.0pt;
	text-indent:-18.0pt;}
@list l6:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;}
@list l6:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:198.0pt;
	text-indent:-9.0pt;}
@list l6:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:234.0pt;
	text-indent:-18.0pt;}
@list l6:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;}
@list l6:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:306.0pt;
	text-indent:-9.0pt;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
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
	font-size:10.0pt;
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
	mso-style-priority:59;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
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

<body lang=PL style='tab-interval:35.4pt'>

<form action="laczenie.php">

<div class=WordSection1>

<div style='mso-element:para-border-div;border-top:solid windowtext 1.0pt;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
padding:1.0pt 0cm 1.0pt 0cm;background:#C6D9F1;mso-background-themecolor:text2;
mso-background-themetint:51'>
<br>
<p class=MsoNormal align=center style='text-align:center;background:#C6D9F1;
mso-background-themecolor:text2;mso-background-themetint:51;border:none;
mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
padding:0cm;mso-padding-alt:1.0pt 0cm 1.0pt 0cm'><b style='mso-bidi-font-weight:
normal'><span style='font-size:10.0pt;mso-bidi-font-size:11.0pt;line-height:
115%;mso-bidi-font-family:Times'>GPM<o:p></o:p></span></b></p>

</div>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal;mso-layout-grid-align:none;text-autospace:none'><span class=hps>Prosz�
oceni�</span>, jak <span class=hps>wa�ny jest dla Pana/i </span>ka�dy z
poni�szych element�w, kiedy grasz w gry online<span class=hps>. <o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal;mso-layout-grid-align:none;text-autospace:none'><span class=hps><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=75%
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=225 valign=top style='width:168.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><o:p>&nbsp;</o:p></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span lang=FR style='font-size:
  10.0pt;mso-bidi-font-size:11.0pt;mso-ansi-language:FR'>W og�le niewa�ne<o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span lang=FR style='font-size:
  10.0pt;mso-bidi-font-size:11.0pt;mso-ansi-language:FR'>Raczej wa�ne<o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:56.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span lang=FR style='font-size:
  10.0pt;mso-bidi-font-size:11.0pt;mso-ansi-language:FR'>Wa�ne<o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span lang=FR style='font-size:
  10.0pt;mso-bidi-font-size:11.0pt;mso-ansi-language:FR'>Bardzo wa�ne<o:p></o:p></span></b></p>
  </td>
  <td width=96 valign=top style='width:71.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span lang=FR style='font-size:
  10.0pt;mso-bidi-font-size:11.0pt;mso-ansi-language:FR'>Ekstremalnie wa�ne<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span lang=FR
  style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
  mso-ansi-language:FR;mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>1.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='mso-bidi-font-family:TT25o00'>Zdobywanie mocy</span><b><span lang=FR
  style='mso-ansi-language:FR'><o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM1" value="1" checked>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
   <input type="radio" name="GPM1" value="2"> 
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
 <input type="radio" name="GPM1" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM1" value="4"> 
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM1" value="5"> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span lang=FR
  style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
  mso-ansi-language:FR;mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>2.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='mso-bidi-font-family:TT25o00'>Pozyskiwanie rzadkich przedmiot�w</span><b><span
  lang=FR style='mso-ansi-language:FR'><o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM2" value="1" checked> 
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
 <input type="radio" name="GPM2" value="2"> 
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM2" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
 <input type="radio" name="GPM2" value="4">
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM2" value="5">
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;mso-bidi-font-weight:bold'><span
  style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='mso-bidi-font-family:TT25o00'>Tworzenie
  jak najlepszej postaci<span style='mso-spacerun:yes'>� </span>(<span
  class=SpellE><i style='mso-bidi-font-style:normal'>builda</i></span>)</span><b><o:p></o:p></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM3" value="1" checked> 
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM3" value="2"> 
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM3" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
   <input type="radio" name="GPM3" value="4"> 
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM3" value="5"> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span lang=FR
  style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
  mso-ansi-language:FR;mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>4.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='mso-bidi-font-family:TT25o00'>Rywalizacja z innymi graczami</span><b><span
  lang=FR style='mso-ansi-language:FR'><o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM4" value="1" checked> 
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM4" value="2"> 
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM4" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
 <input type="radio" name="GPM4" value="4"> 
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM4" value="5"> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span lang=FR
  style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
  mso-ansi-language:FR;mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>5.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='mso-bidi-font-family:TT25o00'>Czatowanie z innymi graczami</span><b><span
  lang=FR style='mso-ansi-language:FR'><o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM5" value="1" checked> 
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM5" value="2"> 
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM5" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM5" value="4"> 
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
 <input type="radio" name="GPM5" value="5">
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span lang=FR
  style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
  mso-ansi-language:FR;mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>6.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:TT25o00;mso-ansi-language:
  EN-US'>Bycie</span></span><span lang=EN-US style='mso-bidi-font-family:TT25o00;
  mso-ansi-language:EN-US'> <span class=SpellE>cz�ci�</span> <span
  class=SpellE>gildii</span></span><b><span lang=FR style='mso-ansi-language:
  FR'><o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM6" value="1" checked> 
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
   <input type="radio" name="GPM6" value="2"> 
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM6" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM6" value="4"> 
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
   <input type="radio" name="GPM6" value="5"> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;mso-bidi-font-weight:bold'><span
  style='mso-list:Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='mso-bidi-font-family:TT25o00'>Tworzenie
  grup z innymi graczami</span><b><o:p></o:p></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <input type="radio" name="GPM7" value="1" checked> 

  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM7" value="2">
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM7" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM7" value="4">
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM7" value="5">
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span lang=FR
  style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
  mso-ansi-language:FR;mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>8.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='mso-bidi-font-family:TT25o00'>Utrzymywanie kontaktu ze znajomymi</span><b><span
  lang=FR style='mso-ansi-language:FR'><o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM8" value="1" checked> 
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM8" value="2">
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM8" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM8" value="4"> 
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM8" value="5"> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;mso-bidi-font-weight:bold'><span
  style='mso-list:Ignore'>9.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='mso-bidi-font-family:TT25o00'>Poznawanie
  opowie�ci i historii �wiata</span><b><o:p></o:p></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM9" value="1" checked> 
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
   <input type="radio" name="GPM9" value="2">
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM9" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM9" value="4">
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM9" value="5">
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span lang=FR
  style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
  mso-ansi-language:FR;mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>10.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
  class=SpellE><span lang=EN-US style='mso-bidi-font-family:TT25o00;mso-ansi-language:
  EN-US'>Uczucie</span></span><span lang=EN-US style='mso-bidi-font-family:
  TT25o00;mso-ansi-language:EN-US'> <span class=SpellE>zanurzenia</span> w <span
  class=SpellE>�wiecie</span></span><b><span lang=FR style='mso-ansi-language:
  FR'><o:p></o:p></span></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM10" value="1" checked>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM10" value="2">
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM10" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM10" value="4">
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM10" value="5">
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;mso-bidi-font-weight:bold'><span
  style='mso-list:Ignore'>11.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><![endif]><span style='mso-bidi-font-family:TT25o00'>Odkrywanie
  �wiata dla samego jego poznawania</span><b><o:p></o:p></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM11" value="1" checked>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM11" value="2">
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM11" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM11" value="4">
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM11" value="5"> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:12'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;mso-bidi-font-weight:bold'><span
  style='mso-list:Ignore'>12.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><![endif]><span style='mso-bidi-font-family:TT25o00'>Tworzenie
  historii i t�a twojej postaci</span><b><o:p></o:p></b></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
 <input type="radio" name="GPM12" value="1" checked>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM12" value="2"> 
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM12" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM12" value="4">
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM12" value="5">
  </td>
 </tr>
 <tr style='mso-yfti-irow:13'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>13.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
  style='mso-bidi-font-weight:bold'>Granie, �eby unikn�� my�lenia o problemach
  w �yciu codziennym </span></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM13" value="1" checked>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM13" value="2">
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM13" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM13" value="4">
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM13" value="5">
  </td>
 </tr>
 <tr style='mso-yfti-irow:14'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span lang=FR
  style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
  mso-ansi-language:FR'><span style='mso-list:Ignore'>14.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
  lang=FR style='mso-ansi-language:FR;mso-bidi-font-weight:bold'>Granie, �eby zrelaksowa�
  si� po dniu pracy lub zaj�� </span><span lang=FR style='mso-ansi-language:
  FR'><o:p></o:p></span></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM14" value="1" checked> 
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM14" value="2">
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM14" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM14" value="4">
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM14" value="5">
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;mso-yfti-lastrow:yes'>
  <td width=225 valign=top style='width:168.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-indent:
  -18.0pt;line-height:normal;mso-list:l6 level1 lfo1;mso-layout-grid-align:
  none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-family:
  Calibri;mso-bidi-theme-font:minor-latin;mso-bidi-font-weight:bold'><span
  style='mso-list:Ignore'>15.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><![endif]><span style='mso-bidi-font-weight:bold'>Uciekanie
  od �ycia w �wiecie realnym <o:p></o:p></span></p>
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM15" value="1" checked> 
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM15" value="2"> 
  </td>
  <td width=75 valign=top style='width:56.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="radio" name="GPM15" value="3">
  </td>
  <td width=75 valign=top style='width:55.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
 <input type="radio" name="GPM15" value="4"> 
  </td>
  <td width=96 valign=top style='width:71.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
 <input type="radio" name="GPM15" value="5"> 

  </td>
 </tr>
</table>

<b style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:11.0pt;
line-height:115%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-font-family:Tahoma;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='mso-special-character:line-break;
page-break-before:always'>
</span></b>



<div style='mso-element:para-border-div;border-top:solid windowtext 1.0pt;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
padding:1.0pt 0cm 1.0pt 0cm;background:#C6D9F1;mso-background-themecolor:text2;
mso-background-themetint:51'>
<br>
<p class=MsoPlainText align=center style='text-align:center;background:#C6D9F1;
mso-background-themecolor:text2;mso-background-themetint:51;border:none;
mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
padding:0cm;mso-padding-alt:1.0pt 0cm 1.0pt 0cm'><b style='mso-bidi-font-weight:
normal'><span lang=EN-US style='mso-bidi-font-size:11.0pt;mso-ascii-font-family:
Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;
mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Tahoma;mso-ansi-language:
EN-US'>SDHS<o:p></o:p></span></b></p>
<br>
</div>

<p class=MsoNormal style='text-align:justify;tab-stops:63.8pt 120.5pt 184.3pt 241.0pt 290.6pt 326.05pt 361.5pt 411.1pt 446.55pt'><span
style='mso-bidi-font-family:Tahoma'>Poni�ej znajduj� si� stwierdzenia, jakie
ludzie stosuj� do okre�lenia tego, jak si� czuj�. Prosz� przeczyta� ka�de z nich i zaznacz, kt�ra najlepiej opisuje, w jakim stopniu ka�de zdanie by�o
prawdziwe dla Pana/Pani podczas ostatnich 7 dni (lub w innym ustalonym okresie).
Niekt�re zdania opisuj� uczucia pozytywne a niekt�re negatywne. Mog�a Pani/ m�g� Pan
odczuwa� zar�wno pozytywne jak i negatywne uczucia w r�nych momentach podczas
ostatniego tygodnia. <o:p></o:p></span></p>

<div align=center>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0>
  <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:29.65pt'>
  <td width="8%" style='width:8.38%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:29.65pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></i></b></p>
  </td>
  <td width="53%" style='width:53.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .25pt;mso-border-right-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:29.65pt'>
  <p class=MsoNormal style='tab-stops:19.85pt'><b style='mso-bidi-font-weight:
  normal'><i style='mso-bidi-font-style:normal'><span style='mso-bidi-font-size:
  12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></i></b></p>
  </td>
  <td width="8%" style='width:8.84%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .25pt;mso-border-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:29.65pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'>Nigdy<o:p></o:p></span></i></b></p>
  </td>
  <td width="9%" style='width:9.48%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .25pt;mso-border-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:29.65pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'>Rzadko<o:p></o:p></span></i></b></p>
  </td>
  <td width="10%" style='width:10.7%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .25pt;mso-border-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:29.65pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'>Czasami<o:p></o:p></span></i></b></p>
  </td>
  <td width="8%" style='width:8.78%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .25pt;mso-border-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:29.65pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'><span
  style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'>Cz�sto<o:p></o:p></span></i></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:34.45pt'>
  <td width="8%" style='width:8.38%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .25pt;mso-border-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:34.45pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='mso-bidi-font-size:12.0pt;
  line-height:115%;mso-bidi-font-family:Tahoma'>1<o:p></o:p></span></i></b></p>
  </td>
  <td width="53%" style='width:53.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:34.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;tab-stops:
  19.85pt'><span style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:
  Tahoma'>Czu�am/em si� niezadowolona/y ze swojego �ycia.<o:p></o:p></span></p>
  </td>
  <td width="8%" style='width:8.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:34.45pt'>
  <input type="radio" name="SDHS1" value="3"> 

  </td>
  <td width="9%" style='width:9.48%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:34.45pt'>
  <input type="radio" name="SDHS1" value="2"> 
  </td>
  <td width="10%" style='width:10.7%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:34.45pt'>
  <input type="radio" name="SDHS1" value="1">
  </td>
  <td width="8%" style='width:8.78%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:34.45pt'>
  <input type="radio" name="SDHS1" value="0">
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:26.0pt'>
  <td width="8%" style='width:8.38%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .25pt;mso-border-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:26.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='mso-bidi-font-size:12.0pt;
  line-height:115%;mso-bidi-font-family:Tahoma'>2<o:p></o:p></span></i></b></p>
  </td>
  <td width="53%" style='width:53.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:26.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'>Czu�am/em
  si� szcz�liwa/y.<o:p></o:p></span></p>
  </td>
  <td width="8%" style='width:8.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:26.0pt'>
  <input type="radio" name="SDHS2" value="0"> 
  </td>
  <td width="9%" style='width:9.48%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:26.0pt'>
  <input type="radio" name="SDHS2" value="1"> 
  </td>
  <td width="10%" style='width:10.7%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:26.0pt'>
  <input type="radio" name="SDHS2" value="2">
  </td>
  <td width="8%" style='width:8.78%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:26.0pt'>
  <input type="radio" name="SDHS2" value="3">
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:27.0pt'>
  <td width="8%" style='width:8.38%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .25pt;mso-border-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:27.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='mso-bidi-font-size:12.0pt;
  line-height:115%;mso-bidi-font-family:Tahoma'>3<o:p></o:p></span></i></b></p>
  </td>
  <td width="53%" style='width:53.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:27.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'>Czu�am/em
  si� przygn�biona/y.<o:p></o:p></span></p>
  </td>
  <td width="8%" style='width:8.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:27.0pt'>
  <input type="radio" name="SDHS3" value="3">
  </td>
  <td width="9%" style='width:9.48%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:27.0pt'>
  <input type="radio" name="SDHS3" value="2"> 
  </td>
  <td width="10%" style='width:10.7%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:27.0pt'>
  <input type="radio" name="SDHS3" value="4"> 
  </td>
  <td width="8%" style='width:8.78%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:27.0pt'>
  <input type="radio" name="SDHS3" value="0">
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:31.4pt'>
  <td width="8%" style='width:8.38%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .25pt;mso-border-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:31.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='mso-bidi-font-size:12.0pt;
  line-height:115%;mso-bidi-font-family:Tahoma'>4<o:p></o:p></span></i></b></p>
  </td>
  <td width="53%" style='width:53.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:31.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'>Czu�am/em
  si� zadowolona/y z sytuacji, w kt�rej jestem.<o:p></o:p></span></p>
  </td>
  <td width="8%" style='width:8.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:31.4pt'>
  <input type="radio" name="SDHS4" value="0">
  </td>
  <td width="9%" style='width:9.48%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:31.4pt'>
  <input type="radio" name="SDHS4" value="1">
  </td>
  <td width="10%" style='width:10.7%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:31.4pt'>
  <input type="radio" name="SDHS4" value="2">
  </td>
  <td width="8%" style='width:8.78%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:31.4pt'>
  <input type="radio" name="SDHS4" value="3">
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:26.45pt'>
  <td width="8%" style='width:8.38%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .25pt;mso-border-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:26.45pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='mso-bidi-font-size:12.0pt;
  line-height:115%;mso-bidi-font-family:Tahoma'>5<o:p></o:p></span></i></b></p>
  </td>
  <td width="53%" style='width:53.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:26.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'>Czu�am/em,
  �e �ycie jest przyjemne.<o:p></o:p></span></p>
  </td>
  <td width="8%" style='width:8.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:26.45pt'>
  <input type="radio" name="SDHS5" value="0">
  </td>
  <td width="9%" style='width:9.48%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:26.45pt'>
  <input type="radio" name="SDHS5" value="1">
  </td>
  <td width="10%" style='width:10.7%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:26.45pt'>
  <input type="radio" name="SDHS5" value="2">
  </td>
  <td width="8%" style='width:8.78%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:26.45pt'>
  <input type="radio" name="SDHS5" value="3">
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes;height:20.1pt'>
  <td width="8%" style='width:8.38%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .25pt;mso-border-alt:solid windowtext .25pt;
  padding:0cm 5.35pt 0cm 5.35pt;height:20.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span style='mso-bidi-font-size:12.0pt;
  line-height:115%;mso-bidi-font-family:Tahoma'>6<o:p></o:p></span></i></b></p>
  </td>
  <td width="53%" style='width:53.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:20.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='mso-bidi-font-size:12.0pt;line-height:115%;mso-bidi-font-family:Tahoma'>Czu�am/em,
  �e �ycie jest pozbawione sensu.<o:p></o:p></span></p>
  </td>
  <td width="8%" style='width:8.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:20.1pt'>
  <input type="radio" name="SDHS6" value="3">
  </td>
  <td width="9%" style='width:9.48%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:20.1pt'>
  <input type="radio" name="SDHS6" value="2">
  </td>
  <td width="10%" style='width:10.7%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:20.1pt'>
  <input type="radio" name="SDHS6" value="1">
  </td>
  <td width="8%" style='width:8.78%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .25pt;mso-border-left-alt:solid windowtext .25pt;
  mso-border-alt:solid windowtext .25pt;padding:0cm 5.35pt 0cm 5.35pt;
  height:20.1pt'>
  <input type="radio" name="SDHS6" value="0">
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal style='line-height:normal'><o:p>&nbsp;</o:p></p>

<div style='mso-element:para-border-div;border-top:solid windowtext 1.0pt;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
padding:1.0pt 0cm 1.0pt 0cm;background:#C6D9F1;mso-background-themecolor:text2;
mso-background-themetint:51'>
<br>
<p class=MsoNormal align=center style='text-align:center;line-height:normal;
background:#C6D9F1;mso-background-themecolor:text2;mso-background-themetint:
51;border:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
solid windowtext .5pt;padding:0cm;mso-padding-alt:1.0pt 0cm 1.0pt 0cm'><b
style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-family:Tahoma'>UPPS
<o:p></o:p></span></b></p>

</div>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Poni�ej znajduj� si� stwierdzenia
opisuj�ce sposoby zachowania i/lub sposoby my�lenia. Przy ka�dym stwierdzeniu
prosz� zaznaczy�, w jakim stopniu Pan/Pani si� z nim zgadza lub nie zgadza:<o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-family:
Garamond'>1- zdecydowanie si� Pan/Pani zgadza ze stwierdzeniem<o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-family:
Garamond'>2 - raczej si�<span style='mso-spacerun:yes'>� </span>Pan/Pani zgadza
ze stwierdzeniem<o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-family:
Garamond'>3 - raczej nie zgadza si� Pan/Pani ze stwierdzeniem<o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-family:
Garamond'>4 - zdecydowanie nie zgadza si� Pan/Pani ze stwierdzeniem <o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:normal'><span style='font-size:12.0pt;mso-bidi-font-family:
Garamond'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Prosz� si� upewni�, �e
wskaza� Pan/Pani swoj� odpowied� (zgod� lub niezgod�) przy ka�dym stwierdzeniu
znajduj�cym si� poni�ej. <o:p></o:p></span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width="4%" valign=top style='width:4.42%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:18.0pt;margin-bottom:.0001pt;text-align:justify;line-height:normal;
  mso-hyphenate:none;layout-grid-mode:char'><span style='mso-fareast-font-family:
  Calibri;mso-fareast-language:AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none;layout-grid-mode:char'><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;mso-bidi-font-family:Garamond'>Zdecydowanie
  si� zgadzam</span><span style='font-size:9.0pt;mso-bidi-font-size:12.0pt;
  mso-fareast-font-family:Calibri;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;mso-bidi-font-family:Garamond'>Raczej
  si� zgadzam</span><span style='font-size:9.0pt;mso-bidi-font-size:12.0pt;
  mso-fareast-font-family:Calibri;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  mso-bidi-font-size:12.0pt;mso-bidi-font-family:Garamond'>Raczej si�</span><span
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;mso-fareast-font-family:
  Calibri;mso-bidi-font-family:Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;mso-bidi-font-family:Garamond'><span
  style='mso-spacerun:yes'>�</span>nie zgadzam</span><span style='font-size:
  9.0pt;mso-bidi-font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:9.0pt;mso-bidi-font-size:12.0pt;mso-bidi-font-family:Garamond'>Zdecydowanie
  si� nie zgadzam</span><span style='font-size:12.0pt;mso-fareast-font-family:
  Calibri;mso-bidi-font-family:Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>1.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>Zazwyczaj dobrze si� zastanawiam zanim
  cokolwiek zrobi�.</span><span style='font-size:12.0pt;mso-fareast-font-family:
  Calibri;mso-bidi-font-family:Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS1" value="1"> </span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS1" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS1" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS1" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>2.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>Kiedy jestem podekscytowany, mam tendencj�, �eby
  nie my�le� o skutkach moich dzia�a�. </span><span style='font-size:12.0pt;
  mso-fareast-font-family:Calibri;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS2" value="1"> </span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS2" value="2"> </span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS2" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS2" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>3.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>Lubi� czasem robi� rzeczy, kt�re s� troch�
  przera�aj�ce.</span><span style='font-size:12.0pt;mso-fareast-font-family:
  Calibri;mso-bidi-font-family:Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS3" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS3" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS3" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS3" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>4.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>Kiedy jestem zdenerwowany(a), zirytowany(a),
  to<span style='color:red'> </span>cz�sto dzia�am bez zastanowienia.</span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS4" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS4" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS4" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS4" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>5.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>Na og� wol� doprowadza� sprawy do ko�ca.</span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS5" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS5" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS5" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS5" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>6.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>M�j spos�b my�lenia jest zwykle rozwa�ny i
  drobiazgowy.</span><span style='font-size:12.0pt;mso-fareast-font-family:
  Calibri;mso-bidi-font-family:Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS6" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS6" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS6" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS6" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>7.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>Kiedy dyskusja/debata si� o�ywia (rozgrzewa
  si�), cz�sto m�wi� rzeczy, kt�rych potem �a�uj�. </span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS7" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS7" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS7" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS7" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>8.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>Ko�cz� to, co zacz��em / zacz�am.</span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS8" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS8" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS8" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS8" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>9.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>Odczuwam przyjemno��, kiedy podejmuj� ryzyko.</span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS9" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS9" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS9" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS9" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>10.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>Kiedy jestem zadowolony(a) nie mog� si�
  powstrzyma�, �eby nie da� si� ponie�� emocjom.</span><span style='font-size:
  12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:Garamond;
  mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS10" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS10" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS10" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS10" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>11.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none;text-autospace:ideograph-numeric'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Kiedy zaczynam realizowa�
  jaki� projekt to prawie zawsze go sko�cz�. </span><span style='font-size:
  12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:Garamond;
  mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS11" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS11" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS11" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS11" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:12.7pt'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.7pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>12.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.7pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none;text-autospace:ideograph-numeric'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Kiedy kto� mi si�
  przeciwstawia<span style='color:red'> </span>cz�sto pogarszam sprawy,<span
  style='mso-spacerun:yes'>� </span>bo dzia�am<span style='mso-spacerun:yes'>�
  </span>bez zastanowienia, gdy jestem zdenerwowany(a). </span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS12" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS12" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS12" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.7pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS12" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>13.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;tab-stops:50.8pt'><span style='font-size:12.0pt;
  mso-bidi-font-family:Garamond'>Po przemy�leniu podejmuj� dojrzale decyzje.</span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS13" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS13" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS13" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS13" value="4"></span><span
  style='mso-fareast-font-family:Calibri;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>14.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none;text-autospace:ideograph-numeric'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Na og� poszukuj�
  nowych i ekscytuj�cych do�wiadcze� i wra�e�.</span><span style='font-size:
  12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:Garamond;
  mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS14" value="1"> </span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS14" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS14" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS14" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>15.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none;text-autospace:ideograph-numeric'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Kiedy jestem bardzo
  podekscytowany(a) cz�sto dzia�am bez zastanowienia.</span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS15" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS15" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS15" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS15" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>16.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none;text-autospace:ideograph-numeric'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Jestem osob�
  skuteczn�, kt�ra zawsze ko�czy swoj� prac�.</span><span style='font-size:
  12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:Garamond;
  mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS16" value="1"> </span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS16" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS16" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS16" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>17.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;mso-hyphenate:none;text-autospace:ideograph-numeric'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Kiedy czuj� si�
  odrzucony, cz�sto m�wi� rzeczy, kt�rych p�niej �a�uj�.</span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS17" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS17" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS17" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS17" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>18.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-hyphenate:none;text-autospace:ideograph-numeric'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Czekam na nowe do�wiadczenia
  i wra�enia, nawet je�li s� one wbrew obowi�zuj�cym normom i troch�
  przera�aj�ce.</span><span style='font-size:12.0pt;mso-fareast-font-family:
  Calibri;mso-bidi-font-family:Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS18" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS18" value="2"> </span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS18" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS18" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>19.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-hyphenate:none;text-autospace:ideograph-numeric'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Przed podj�ciem
  decyzji rozwa�am wszystkie<span style='mso-spacerun:yes'>� </span>plusy i
  minusy<span style='color:red'>.</span></span><span style='font-size:12.0pt;
  mso-fareast-font-family:Calibri;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS19" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS19" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS19" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS19" value="4"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;mso-yfti-lastrow:yes'>
  <td width="4%" valign=top style='width:4.42%;border:none;border-bottom:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-top-alt:solid black .5pt;
  mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;mso-add-space:auto;text-align:
  justify;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo3;
  mso-hyphenate:none;tab-stops:list 0cm;layout-grid-mode:char'><![if !supportLists]><span
  style='font-size:12.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:AR-SA'><span style='mso-list:Ignore'>20.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond;mso-fareast-language:
  AR-SA'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="47%" valign=top style='width:47.44%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-hyphenate:none;text-autospace:ideograph-numeric'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>Kiedy jestem bardzo szcz�liwy(a),
  mam wra�enie, �e normalnym jest spe�nianie swoich pragnie� i pozwalanie sobie
  na wybryki.</span><span style='font-size:12.0pt;mso-fareast-font-family:Calibri;
  mso-bidi-font-family:Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>1<input type="radio" name="UPPS20" value="1"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>2<input type="radio" name="UPPS20" value="2"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>3<input type="radio" name="UPPS20" value="3"></span><span
  style='font-size:12.0pt;mso-fareast-font-family:Calibri;mso-bidi-font-family:
  Garamond;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
  <td width="12%" valign=top style='width:12.04%;border:none;border-bottom:
  solid black 1.0pt;mso-border-top-alt:solid black .5pt;mso-border-top-alt:
  solid black .5pt;mso-border-bottom-alt:solid black .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-hyphenate:none'><span
  style='font-size:12.0pt;mso-bidi-font-family:Garamond'>4<input type="radio" name="UPPS20" value="4"></span><span
  style='mso-fareast-font-family:Calibri;mso-fareast-language:AR-SA'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
style='mso-bidi-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<div style='mso-element:para-border-div;border-top:solid windowtext 1.0pt;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
padding:1.0pt 0cm 1.0pt 0cm;background:#C6D9F1;mso-background-themecolor:text2;
mso-background-themetint:51'>

<p class=Default align=center style='margin-top:12.0pt;text-align:center;
background:#C6D9F1;mso-background-themecolor:text2;mso-background-themetint:
51;border:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
solid windowtext .5pt;padding:0cm;mso-padding-alt:1.0pt 0cm 1.0pt 0cm'><b><span
lang=FR style='font-size:11.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Helvetica-Bold;
mso-ansi-language:FR'>MEQ</span></b><span lang=FR style='font-size:11.0pt;
font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-ansi-language:FR'><o:p></o:p></span></p>
<br>
</div>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-family:PLRoman12-Regular'>Prosimy o uwa�ne przeczytanie
zamieszczonych poni�ej pyta�. W ka�dym pytaniu nale�y zaznaczy� tylko jedna z kilku
mo�liwych odpowiedzi. Niekt�re pytania b�d� zawiera�y skale. W tych przypadkach
odpowiedzi� jest zaznaczenie na wybranym przez siebie miejscu skali. Prosimy
odpowiada� mo�liwie szybko, bez nadmiernego namys�u. Z regu�y pierwsza
nasuwaj�ca si� odpowiedz najlepiej oddaje to, co czujemy lub my�limy na dany
temat. Prosimy tak�e o udzielanie odpowiedzi w kolejno�ci pojawiania si� pyta�.
</span><i><span style='mso-bidi-font-family:PLRoman12-Italic'>Nie nale�y wraca�
do poprzednich pyta� ani poprawia� ju� zaznaczonych odpowiedzi</span></i><span
style='mso-bidi-font-family:PLRoman12-Regular'>. Prosimy o udzielenie
odpowiedzi na wszystkie pytania. Zale�y nam bardzo na uzyskaniu mo�liwie
szczerych odpowiedzi. <o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-family:PLRoman12-Regular'>1. O kt�rej godzinie wstawa�by�,
gdyby� m�g� ca�kowicie swobodnie zaplanowa� sw�j dzie�?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ1" value="5">&nbsp;4:00 � 6:30<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ1" value="4">&nbsp;6:30 � 7:45<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ1" value="3">&nbsp;7:45 � 9:45<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ1" value="2">&nbsp;9:45 � 11:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ1" value="1">&nbsp;11:00 � 12:00<br> 

<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>2. O kt�rej
godzinie k�ad�by� si� wieczorem spa�, gdyby� m�g� ca�kowicie swobodnie
zaplanowa� nast�pny dzie�?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ2" value="5">&nbsp;20:00 � 21:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ2" value="4">&nbsp;21:00 � 22:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ2" value="3">&nbsp;22:00 � 23:30<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ2" value="2">&nbsp;23:30 � 1:30<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ2" value="1">&nbsp;1:30 � 4:00<br> 

<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>3.
Je�li rano musisz obudzi� si� o �ci�le okre�lonej porze, jak bardzo zale�ny
jeste� od budzika?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ3" value="1">&nbsp;zupe�nie niezale�ny<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ3" value="2">&nbsp;w niewielkim stopniu<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ3" value="3">&nbsp;w znacznym stopniu<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ3" value="4">&nbsp;bardzo zale�ny<br> 

<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>4. W
zwyk�y dzie� wstawanie rano jest dla Ciebie<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ4" value="1">&nbsp;bardzo trudne<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ4" value="2">&nbsp;raczej trudne<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ4" value="3">&nbsp;raczej �atwe<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ4" value="4">&nbsp;bardzo �atwe<br> 

<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>5.
Wstawanie rano zima jest dla Ciebie<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ5" value="4">&nbsp;r�wnie �atwe (trudne) co i latem<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ5" value="3">&nbsp;nieco trudniejsze ni� latem<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ5" value="2">&nbsp;znacznie trudniejsze ni� latem<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ5" value="1">&nbsp;zdecydowanie trudniejsze ni� latem<br> 


<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>6. Na
ile �przytomny� jeste� w p� godziny po obudzeniu si� rano?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ6" value="1">&nbsp;w bardzo ma�ym stopniu<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ6" value="2">&nbsp;w niewielkim stopniu<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ6" value="3">&nbsp;w znacznym
stopniu<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ6" value="4">&nbsp;ca�kowicie <br>
<br>
<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-family:PLRoman12-Regular'>7. Jaki masz apetyt w p�
godziny po obudzeniu si� rano?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ7" value="1">&nbsp;zupe�nie nie mam<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ7" value="2">&nbsp;mam s�aby apetyt<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ7" value="3">&nbsp;mam niez�y
apetyt<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ7" value="4">&nbsp;mam bardzo dobry
apetyt<br>  

<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>8. Na
ile zm�czony jeste� w p� godziny po obudzeniu si� rano?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ8" value="1">&nbsp;bardzo zm�czony<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ8" value="2">&nbsp;raczej zm�czony<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ8" value="3">&nbsp;raczej wypocz�ty<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ8" value="4">&nbsp;zdecydowanie wypocz�ty<br>  

<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>9. O
jakiej porze idziesz spa�, je�eli wiesz, ze nast�pnego dnia nie musisz wsta� o
okre�lonej godzinie?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ9" value="4">&nbsp;raczej tak jak
zwykle<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ9" value="3">&nbsp;nie wi�cej ni�
godzin� p�niej ni� zwykle<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ9" value="2">&nbsp;jedn� - dwie
godziny p�niej ni� zwykle<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ9" value="1">&nbsp;kilka godzin
p�niej ni� zwykle<br> 

<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>10.
Przyjaciel proponuje Ci wsp�lne uprawianie sportu dwa razy w tygodniu miedzy
si�dma a �sma rano. Jak sadzisz, w jakiej formie by�by� o tej porze?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ10" value="1">&nbsp;w bardzo dobrej<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ10" value="2">&nbsp;w dobrej<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ10" value="3">&nbsp;raczej w z�ej<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ10" value="4">&nbsp;w bardzo z�ej<br>  

<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>11. O
kt�rej godzinie wieczorem jeste� tak zm�czony, �e odczuwasz potrzeb� snu?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ11" value="5">&nbsp;20:00 � 21:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ11" value="4">&nbsp;21:00 � 22:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ11" value="3">&nbsp;22:00 � 23:30<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ11" value="2">&nbsp;23:30 � 1:30<br>  

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ11" value="1">&nbsp;1:30 � 4:00<br> 

<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>12.
Ile godzin snu na dob� zapewnia Ci optymalne dzia�anie i samopoczucie w ci�gu
dnia?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ12" value="4">&nbsp;24 - 5 godzin<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ12" value="3">&nbsp;6 - 7 godzin<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ12" value="2">&nbsp;7 - 8 godzin<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ12" value="1">&nbsp;9 i wi�cej
godzin<br>  

<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>13. Gdyby�
musia� p�j�� spa� o godzinie jedenastej wieczorem, to by�aby to pora:<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ13" value="1">&nbsp;gdy zupe�nie nie
jeste� zm�czony<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ13" value="2">&nbsp;gdy jeste� ma�o
zm�czony<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ13" value="3">&nbsp;gdy jeste�
raczej zm�czony<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ13" value="4">&nbsp;gdy jeste� bardzo zm�czony<br>  <br>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-family:PLRoman12-Regular'>14. Chcesz by� w doskona�ej
formie w trakcie dwugodzinnego, wyczerpuj�cego umys�owo egzaminu. W jakich
godzinach chcia�by� go zdawa�?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ14" value="5">&nbsp;7:00 � 9:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ14" value="5">&nbsp;9:00 � 11:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ14" value="4">&nbsp;11:00 � 13:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ14" value="3">&nbsp;13:00 � 15:00<br>  

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ14" value="2">&nbsp;15:00 � 17:00<br>  

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ14" value="1">&nbsp;17:00 � 19:00<br>  

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ14" value="1">&nbsp;19:00 � 21:00<br>  

<br>
<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-family:PLRoman12-Regular'>15. Poszed�e� spa� kilka godzin p�niej ni� zwykle. Je�li nast�pnego dnia nie musisz wsta� o �ci�le okre�lonej porze, to: <o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ15" value="4">&nbsp;zbudzisz si� o
zwyk�ej porze i ju� nie za�niesz<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ15" value="3">&nbsp;budzisz si� o
zwyk�ej porze, po czym b�dziesz troch� drzema�<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ15" value="2">&nbsp;zbudzisz si� o
zwyk�ej porze, po czym z powrotem za�niesz<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ15" value="1">&nbsp;zbudzisz si�
p�niej ni� zwykle<br>  
<br>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-family:PLRoman12-Regular'>16. Musisz by� w pe�nej
dyspozycji fizycznej i psychicznej miedzy czwarta i sz�sta rano, po czym masz
przed sob� wolny dzien. Kt�ra z poni�szych mo�liwo�ci najbardziej by Ci
odpowiada�a?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ16" value="1">&nbsp;nie k�ad�by� si�
w og�le spa� a� do sz�stej rano<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ16" value="2">&nbsp;zdrzemn��by� si�
kr�tko przed czwarta, a dopiero po sz�stej poszed�by� spa�<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ16" value="3">&nbsp;przespa�by� si�
do czwartej rano, a po sz�stej ju� tylko kr�tko si� zdrzemn��<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ16" value="4">&nbsp;przespa�by� si�
do czwartej rano i to by Ci zupe�nie wystarczy�o<br> 


<br>
<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-family:PLRoman12-Regular'>17. O ile godzin chcia�by�
zwi�kszy� czas, kt�ry przeznaczasz na sen?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ17" value="3">&nbsp;o 1 godzin�<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ17" value="2">&nbsp;o 2 godzin�<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ17" value="1" >&nbsp;o 4godzin�<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ17" value="4">&nbsp;nie chcia�by�
wyd�u�a� godzin snu<br>  


<br>
<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-family:PLRoman12-Regular'>18. Jaka por� dnia wybierzesz,
aby wykona� dwugodzinna, ci�k� prace fizyczna?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ18" value="4">&nbsp;7:00 - 9:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ18" value="3">&nbsp;9:00 - 11:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ18" value="3">&nbsp;11:00 - 13:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ18" value="2">&nbsp;13:00 - 15:00<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ18" value="2">&nbsp;15:00 - 17:00<br>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ18" value="1">&nbsp;17:00 - 19:00<br>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ18" value="1">&nbsp;19:00 - 21:00<br> 


<br>
<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-family:PLRoman12-Regular'>19. Przyjaciel proponuje Ci
wsp�lne uprawianie sportu dwa razy w tygodniu miedzy dziesi�t� a jedenasta
wiecz�r. Jak sadzisz, w jakiej formie by�by� o tej porze?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ19" value="1">&nbsp;w bardzo dobrej<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ19" value="2">&nbsp;w dobrej<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ19" value="3">&nbsp;raczej w z�ej<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ19" value="4">&nbsp;w bardzo z�ej<br> 



<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>20.
Jakie godziny pracy wybierzesz, je�li masz pracowa� piec godzin dziennie, praca
jest interesuj�ca, a Twoje zarobki s� uzale�nione od uzyskanych efekt�w?
Zaznacz pi�ciogodzinny okres doby, kt�ry najch�tniej chcia�by� przeznaczy� na
te prace.<o:p></o:p></span></p>


<!--
<p id="demo"></p>

<script>
var greeting;

function maxFunction() {
    var x = document.getElementById("Check1").value;
    var max = 0;

for (i = 0; i < 2; i++) {
if (max = 5) {
        greeting = "Good day";
    } else {
        greeting = "Good evening";
    }

document.getElementById("demo").innerHTML = "You selected: " + greeting;
}


for (i = 0; i < cars.length; i++) {
    text += cars[i] + "<br>";
}

}
</script>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>24<o:p></o:p></span></p>
  </td>
  <td width=22 valign=top style='width:16.85pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>1<o:p></o:p></span></p>
  </td>
  <td width=22 valign=top style='width:16.85pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>2<o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>3<o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>4<o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>5<o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>6<o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>7<o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>8<o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>9<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>10<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>11<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>12<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>13<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>14<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>15<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>16<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>17<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>18<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>19<o:p></o:p></span></p>
  </td>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>20<o:p></o:p></span></p>
  </td>
  <td width=16 valign=top style='width:12.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>21<o:p></o:p></span></p>
  </td>
  <td width=16 valign=top style='width:12.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>22<o:p></o:p></span></p>
  </td>
  <td width=16 valign=top style='width:12.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>23<o:p></o:p></span></p>
  </td>
  <td width=16 valign=top style='width:12.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal;mso-layout-grid-align:
  none;text-autospace:none'><span style='font-size:9.0pt;mso-bidi-font-size:
  11.0pt;mso-bidi-font-family:PLRoman12-Regular'>24<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width=29 valign=top style='width:22.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check0" onchange="maxFunction()">
  </td>
  <td width=22 valign=top style='width:16.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check1" onchange="maxFunction()">
  </td>
  <td width=22 valign=top style='width:16.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check2" onchange="maxFunction()">
  </td>
  <td width=23 valign=top style='width:16.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check3" onchange="maxFunction()">
  </td>
  <td width=23 valign=top style='width:16.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check4" onchange="maxFunction()">
  </td>
  <td width=23 valign=top style='width:16.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check5" onchange="maxFunction()">
  </td>
  <td width=23 valign=top style='width:16.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check6" onchange="maxFunction()">
  </td>
  <td width=23 valign=top style='width:16.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check7" onchange="maxFunction()">
  </td>
  <td width=23 valign=top style='width:16.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check8" onchange="maxFunction()">
  </td>
  <td width=23 valign=top style='width:16.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check9" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check10" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check11" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check12" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check13" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check14" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check15" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check16" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check17" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check18" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check19" onchange="maxFunction()">
  </td>
  <td width=29 valign=top style='width:22.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check20" onchange="maxFunction()">
  </td>
  <td width=16 valign=top style='width:12.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check21" onchange="maxFunction()">
  </td>
  <td width=16 valign=top style='width:12.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check22" onchange="maxFunction()">
  </td>
  <td width=16 valign=top style='width:12.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check23" onchange="maxFunction()">
  </td>
  <td width=16 valign=top style='width:12.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="checkbox" id="Check24" onchange="maxFunction()">
  </td>
 </tr>
</table>
---->
&nbsp;&nbsp;&nbsp;<input type="text" name="MEQ20" value="1"><br>


<p class=MsoNormal style='margin-top:6.0pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-family:PLRoman12-Regular'>21.
Uwa�a si�, ze niekt�rzy ludzie najlepiej czuj� si� i dzia�aj� rano (�ranne
ptaszki�), inni za� - wieczorem (�nocne marki�). Do kt�rej grupy zaliczy�by�
siebie?<o:p></o:p></span></p>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ21" value="1">&nbsp;zdecydowanie do �rannych ptaszk�w�<br>


  &nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ21" value="2">&nbsp;raczej do
�rannych ptaszk�w�<br>

  &nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ21" value="3">&nbsp;trudno mi zdecydowa�<br> 

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ21" value="4">&nbsp;raczej do
�nocnych mark�w"<br>

&nbsp;&nbsp;&nbsp;<input type="radio" name="MEQ21" value="5">&nbsp;zdecydowanie do �nocnych mark�w"<br> <br>

<div style='mso-element:para-border-div;border-top:solid windowtext 1.0pt;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
padding:1.0pt 0cm 1.0pt 0cm;background:#C6D9F1;mso-background-themecolor:text2;
mso-background-themetint:51'>
<br>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal;background:#C6D9F1;mso-background-themecolor:
text2;mso-background-themetint:51;mso-layout-grid-align:none;text-autospace:
none;border:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
solid windowtext .5pt;padding:0cm;mso-padding-alt:1.0pt 0cm 1.0pt 0cm'><b><span
lang=FR style='mso-bidi-font-family:Helvetica-Bold;color:black;mso-ansi-language:
FR'>ACS<o:p></o:p></span></b></p>
<br>
</div>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal;mso-layout-grid-align:none;text-autospace:none'><span lang=FR
style='mso-bidi-font-family:Helvetica;mso-ansi-language:FR'><o:p>&nbsp;</o:p></span></p>





<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal;mso-layout-grid-align:none;text-autospace:none'>Prosimy o ustosunkowanie
si� do podanych poni�ej stwierdze� zaznaczaj�c odpowied�, kt�ra najlepiej <span
lang=CS style='mso-ansi-language:CS'>opisuje</span><b style='mso-bidi-font-weight:
normal'><span lang=CS> </span></b>Pani/Pana zachowania na co dzie�. Przy ka�dej
z pozycji testowych nale�y wybra� jedn� z odpowiedzi.</p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal;mso-layout-grid-align:none;text-autospace:none'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Nie mog� skoncentrowa� si� na trudnym
zadaniu,<span style='mso-spacerun:yes'>� </span>kiedy wok� mnie s�ycha� jakie�
odg�osy.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>


  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS1" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS1" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS1" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS1" value="4"> zawsze<br>


<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Jest mi trudno skupi� uwag�, kiedy musz� si�
skoncentrowa� i rozwi�za� jaki� problem.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS2" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS2" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS2" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS2" value="4"> zawsze<br>


<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>To co dzieje si� wok� rozprasza <span lang=CS
style='mso-ansi-language:CS'>mnie</span>, nawet je�li pracuj� nad czym�
intensywnie</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS3" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS3" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS3" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS3" value="4"> zawsze<br>



<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Potrafi� si� skoncentrowa� nawet je�li w pokoju
gra muzyka</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS4" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS4" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS4" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS4" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Kiedy staram si� skoncentrowa�, potrafi� tak
skupi� uwag�, �e nie zdaj� sobie sprawy z tego, co dzieje si� wok� mnie.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS5" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS5" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS5" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS5" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Kiedy czytam lub si� ucz� �atwo rozprasza mnie
czyja� rozmowa prowadzona w tym samym miejscu.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS6" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS6" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS6" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS6" value="4"> zawsze<br>


<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Jest mi trudno pozby� si� rozpraszaj�cych mnie
my�li, gdy staram si� skupi� na czym� uwag�.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS7" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS7" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS7" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS7" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Kiedy jestem czym� podekscytowany/a<span
style='mso-spacerun:yes'>� </span>jest mi trudno si� skoncentrowa�.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS8" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS8" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS8" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS8" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>9.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Kiedy pr�buj� si� skupi�, nie zwracam uwagi na
uczucie g�odu i pragnienia.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS9" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS9" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS9" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS9" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>10.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]>Potrafi� szybko przechodzi� z jednego zadania do
drugiego.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS10" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS10" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS10" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS10" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>11.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]>Potrzebuj� troch� czasu, �eby naprawd�<span
style='mso-spacerun:yes'>� </span>zaanga�owa� si� w nowe zadanie.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS11" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS11" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS11" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS11" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>12.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]>Sprawia mi trudno�� jednoczesne s�uchanie i
robienie notatek podczas wyk�adu.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS12" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS12" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS12" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS12" value="4"> zawsze<br>


<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>13.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]>Kiedy zajdzie taka potrzeba, potrafi� bardzo
szybko zainteresowa� si� nowym zagadnieniem.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS13" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS13" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS13" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS13" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>14.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]><span lang=CS style='mso-ansi-language:CS'>Kiedy</span>
rozmawiam przez telefon <span lang=CS style='mso-ansi-language:CS'>mog�</span>
jednocze�nie co� zapisa� lub przeczyta�.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS14" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS14" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS14" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS14" value="4"> zawsze<br>


<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>15.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]>Trudno mi uczestniczy� w dw�ch rozmowach
jednocze�nie.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS15" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS15" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS15" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS15" value="4"> zawsze<br>


<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>16.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]>Sprawia mi trudno�� szybkie znajdowanie nowych
rozwi�za�.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS16" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS16" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS16" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS16" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>17.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]>Potrafi� z �atwo�ci� skupi� uwag� na tym, co
robi�em/<span class=SpellE>am</span> nawet, kiedy kto� mi przeszkodzi� lub co�
mnie rozproszy�o.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS17" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS17" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS17" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS17" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>18.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]>Kiedy przychodzi mi do g�owy jaka� rozpraszaj�ca
my�l,<span style='mso-spacerun:yes'>� </span>bez trudu potrafi� odwr�ci<span
lang=CS style='mso-ansi-language:CS'>�</span> od niej uwag�.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS18" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS18" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS18" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS18" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>19.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]>Z �atwo�ci� mog� wykonywa� dwie czynno�ci na
przemian.</p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><o:p>&nbsp;</o:p></p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS19" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS19" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS19" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS19" value="4"> zawsze<br>



<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:72.0pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:normal;
mso-list:l1 level1 lfo1;tab-stops:list 18.0pt'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>20.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
</span></span></span><![endif]>Jest mi trudno odej�� od jednego sposobu
my�lenia o czym� i spojrze� na to z innej strony.</p>



  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS20" value="1"> nigdy&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS20" value="2"> czasami&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS20" value="3"> cz�sto&nbsp;&nbsp; <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ACS20" value="4"> zawsze<br>



</div>


<!--------------------------------
<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal;mso-layout-grid-align:none;text-autospace:none'>Prosimy o ustosunkowanie
si� do podanych poni�ej stwierdze� stawiaj�c �x� pod odpowiedzi�, kt�ra
najlepiej <span lang=CS style='mso-ansi-language:CS'>opisuje<b
style='mso-bidi-font-weight:normal'> </b></span>Pani/Pana zachowania na co
dzie�. Przy ka�dej z pozycji testowych nale�y<span style='mso-spacerun:yes'>�
</span>wybra� jedn� z odpowiedzi, pos�uguj�c si� skal�:   1-nigdy       2-czasami       3-cz�sto        4-zawsze</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
 width=1436 style='width:1076.8pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:480;mso-table-lspace:
 7.05pt;margin-left:4.8pt;mso-table-rspace:7.05pt;margin-right:4.8pt;
 mso-table-bspace:10.0pt;margin-bottom:7.75pt;mso-table-anchor-vertical:paragraph;
 mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:7.2pt;
 mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <ol style='margin-top:0cm' start=1 type=1>
   <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
       line-height:normal;mso-list:l3 level1 lfo4;tab-stops:list 36.0pt;
       mso-element:frame;mso-element-frame-hspace:7.05pt;mso-element-wrap:around;
       mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
       margin;mso-element-top:7.2pt;mso-height-rule:exactly'>Nie mog�
       skoncentrowa� si� na trudnym zadaniu,<span style='mso-spacerun:yes'>�
       </span>kiedy </li>
  </ol>
  <p class=MsoNormal style='margin-left:18.0pt;mso-element:frame;mso-element-frame-hspace:
  7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:paragraph;
  mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;mso-height-rule:
  exactly'><span style='mso-spacerun:yes'>������ </span>wok� mnie <span
  lang=CS style='mso-ansi-language:CS'>s�ycha�</span> jakie� <span lang=CS
  style='mso-ansi-language:CS'>odg�osy</span>.</p>
  </td>
  <td width=442 style='width:331.3pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS1" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS1" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS1" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS1" value="4">4

  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <ol style='margin-top:0cm' start=2 type=1>
   <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
       line-height:normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;
       mso-element:frame;mso-element-frame-hspace:7.05pt;mso-element-wrap:around;
       mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
       margin;mso-element-top:7.2pt;mso-height-rule:exactly'>Jest mi trudno
       skupi� uwag�, kiedy musz� si� skoncentrowa� i rozwi�za� jaki� problem.</li>
  </ol>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS2" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS2" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS2" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS2" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <ol style='margin-top:0cm' start=3 type=1>
   <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
       line-height:normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;
       mso-element:frame;mso-element-frame-hspace:7.05pt;mso-element-wrap:around;
       mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
       margin;mso-element-top:7.2pt;mso-height-rule:exactly'>To co dzieje si�
       wok� rozprasza <span lang=CS style='mso-ansi-language:CS'>mnie</span>, nawet
       je�li</li>
  </ol>
  <p class=MsoNormal style='mso-element:frame;mso-element-frame-hspace:7.05pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:7.2pt;mso-height-rule:exactly'><span
  style='mso-spacerun:yes'>�������������� </span>pracuj� nad czym� intensywnie.
  </p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS3" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS3" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS3" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS3" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>4.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]>Potrafi�
  si� skoncentrowa� nawet je�li w pokoju gra muzyka.</p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS4" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS4" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS4" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS4" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>5.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]>Kiedy
  staram si� skoncentrowa�, potrafi� tak skupi� uwag�, �e nie zdaj� sobie
  sprawy z tego, co dzieje si� wok� mnie.</p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
 <input type="radio" name="ACS5" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS5" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS5" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS5" value="4">4

  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>6.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]>Kiedy
  czytam lub si� ucz� �atwo rozprasza mnie czyja� rozmowa prowadzona w tym
  samym miejscu.</p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
 <input type="radio" name="ACS6" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS6" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS6" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS6" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>7.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]>Jest
  mi trudno pozby� si� rozpraszaj�cych mnie my�li, gdy staram si� skupi� na
  czym� uwag�.</p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS7" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS7" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS7" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS7" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>8.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]>Kiedy
  jestem czym� podekscytowany/a<span style='mso-spacerun:yes'>� </span>jest mi
  trudno si� skoncentrowa�. </p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
 <input type="radio" name="ACS8" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS8" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS8" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS8" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>9.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]>Kiedy
  pr�buj� si� skupi�, nie zwracam uwagi na uczucie g�odu i pragnienia.</p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
 <input type="radio" name="ACS9" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS9" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS9" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS9" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>10.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]>Potrafi�
  szybko przechodzi� z jednego zadania do drugiego. </p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS10" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS10" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS10" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS10" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>11.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]>Potrzebuj�
  troch� czasu, �eby naprawd�<span style='mso-spacerun:yes'>�
  </span>zaanga�owa� si� w nowe zadanie.</p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS11" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS11" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS11" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS11" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:71.3pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:71.3pt'>
  <ol style='margin-top:0cm' start=12 type=1>
   <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
       line-height:normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;
       mso-element:frame;mso-element-frame-hspace:7.05pt;mso-element-wrap:around;
       mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
       margin;mso-element-top:7.2pt;mso-height-rule:exactly'>Sprawia mi trudno��
       jednoczesne s�uchanie i robienie notatek podczas wyk�adu.</li>
  </ol>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:71.3pt'>
 <input type="radio" name="ACS12" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS12" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS12" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS12" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <ol style='margin-top:0cm' start=13 type=1>
   <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
       line-height:normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;
       mso-element:frame;mso-element-frame-hspace:7.05pt;mso-element-wrap:around;
       mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
       margin;mso-element-top:7.2pt;mso-height-rule:exactly'>Kiedy zajdzie taka
       potrzeba, potrafi� bardzo szybko zainteresowa� si� nowym zagadnieniem.</li>
  </ol>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
 <input type="radio" name="ACS13" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS13" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS13" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS13" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <ol style='margin-top:0cm' start=14 type=1>
   <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
       line-height:normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;
       mso-element:frame;mso-element-frame-hspace:7.05pt;mso-element-wrap:around;
       mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
       margin;mso-element-top:7.2pt;mso-height-rule:exactly'><span lang=CS
       style='mso-ansi-language:CS'>Kiedy</span> rozmawiam przez telefon <span
       lang=CS style='mso-ansi-language:CS'>mog�</span> jednocze�nie co�
       zapisa� lub przeczyta�. </li>
  </ol>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS14" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS14" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS14" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS14" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>15.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]>Trudno
  mi uczestniczy� w dw�ch rozmowach jednocze�nie.</p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS15" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS15" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS15" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS15" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>16.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]>Sprawia
  mi trudno�� szybkie znajdowanie nowych rozwi�za�.</p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS16" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS16" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS16" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS16" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:35.7pt;margin-bottom:.0001pt;text-indent:-17.85pt;line-height:
  normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;mso-element:frame;
  mso-element-frame-hspace:7.05pt;mso-element-wrap:around;mso-element-anchor-vertical:
  paragraph;mso-element-anchor-horizontal:margin;mso-element-top:7.2pt;
  mso-height-rule:exactly'><![if !supportLists]><span style='font-family:"Times New Roman","serif";
  mso-fareast-font-family:"Times New Roman"'><span style='mso-list:Ignore'>17.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]>Potrafi�
  z �atwo�ci� skupi� uwag� na tym, co robi�em/<span class=SpellE>am</span>
  nawet, kiedy kto� mi przeszkodzi� lub co� mnie<span
  style='mso-spacerun:yes'>� </span>rozproszy�o.</p>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS17" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS17" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS17" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS17" value="4">4
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <ol style='margin-top:0cm' start=18 type=1>
   <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
       line-height:normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;
       mso-element:frame;mso-element-frame-hspace:7.05pt;mso-element-wrap:around;
       mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
       margin;mso-element-top:7.2pt;mso-height-rule:exactly'>Kiedy przychodzi mi
       do g�owy jaka� rozpraszaj�ca my�l,<span style='mso-spacerun:yes'>�
       </span>bez trudu potrafi� odwr�ci<span lang=CS style='mso-ansi-language:
       CS'>�</span> od niej uwag�. </li>
  </ol>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS18" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS18" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS18" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS18" value="4">4

  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <ol style='margin-top:0cm' start=19 type=1>
   <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
       line-height:normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;
       mso-element:frame;mso-element-frame-hspace:7.05pt;mso-element-wrap:around;
       mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
       margin;mso-element-top:7.2pt;mso-height-rule:exactly'>Z �atwo�ci� mog�
       wykonywa� dwie czynno�ci na przemian.</li>
  </ol>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS19" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS19" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS19" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS19" value="4">4

  </td>
 </tr>
 <tr style='mso-yfti-irow:19;mso-yfti-lastrow:yes;height:47.55pt'>
  <td width=994 valign=top style='width:745.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <ol style='margin-top:0cm' start=20 type=1>
   <li class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;
       line-height:normal;mso-list:l4 level1 lfo5;tab-stops:list 36.0pt;
       mso-element:frame;mso-element-frame-hspace:7.05pt;mso-element-wrap:around;
       mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
       margin;mso-element-top:7.2pt;mso-height-rule:exactly'>Jest mi trudno
       odej�� od jednego sposobu my�lenia o czym� i spojrze� na to z innej
       strony.</li>
  </ol>
  </td>
  <td width=442 style='width:331.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:47.55pt'>
  <input type="radio" name="ACS20" value="1">1&nbsp;&nbsp; 

  <input type="radio" name="ACS20" value="2">2&nbsp;&nbsp;

  <input type="radio" name="ACS20" value="3">3&nbsp;&nbsp;

  <input type="radio" name="ACS20" value="4">4
  </td>
 </tr>
</table>


<br>
<br>
<br>
<br>
<br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<!--------------------------------------------------------------->

<br>
<div style='mso-element:para-border-div;border-top:solid windowtext 1.0pt;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
padding:1.0pt 0cm 1.0pt 0cm;background:#C6D9F1;mso-background-themecolor:text2;
mso-background-themetint:51'>
<br>




<p class=MsoPlainText align=center style='text-align:center;background:#C6D9F1;
mso-background-themecolor:text2;mso-background-themetint:51;border:none;
mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
padding:0cm;mso-padding-alt:1.0pt 0cm 1.0pt 0cm'><b style='mso-bidi-font-weight:
normal'><span lang=FR style='mso-bidi-font-size:11.0pt;mso-ascii-font-family:
Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;
mso-hansi-theme-font:minor-latin;mso-ansi-language:FR'>Lie-Bet<o:p></o:p></span></b></p>
<br>
</div>

<p class=MsoListParagraph style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
10.0pt;margin-left:18.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l5 level1 lfo6'><![if !supportLists]><span
style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Czy kiedykolwiek musia�a�/e� ok�amywa� wa�ne dla
siebie osoby na temat tego ile gra�e� w gry hazardowe?</p>

&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Lie1" value="1"> TAK&nbsp;&nbsp;&nbsp;&nbsp; 

&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Lie1" value="2"> NIE<br><br>

<p class=MsoListParagraph style='margin-top:0cm;margin-right:-3.2pt;margin-bottom:
10.0pt;margin-left:18.0pt;mso-add-space:auto;text-indent:-18.0pt;line-height:
normal;mso-pagination:none;mso-list:l5 level1 lfo6;mso-hyphenate:none;
mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-font-kerning:1.0pt;mso-fareast-language:HI;mso-bidi-language:HI'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]>Czy kiedykolwiek czu�a�/e�, �e masz potrzeb�
obstawia� za coraz wi�cej pieni�dzy?<b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;mso-fareast-font-family:SimSun;mso-bidi-font-family:
Mangal;mso-font-kerning:1.0pt;mso-fareast-language:HI;mso-bidi-language:HI'><o:p></o:p></span></b></p>

&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Lie2" value="1"> TAK&nbsp;&nbsp;&nbsp;&nbsp; 

&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Lie2" value="2"> NIE<br>


<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal;mso-layout-grid-align:none;text-autospace:none'><span lang=FR
style='mso-bidi-font-family:Helvetica;mso-ansi-language:FR'><o:p>&nbsp;</o:p></span></p>



<div style='mso-element:para-border-div;border-top:solid windowtext 1.0pt;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
padding:1.0pt 0cm 1.0pt 0cm;background:#C6D9F1;mso-background-themecolor:text2;
mso-background-themetint:51'>
<br>




<p>Je�li chcia�(a)by Pan/i pozna� wyniki badania oraz otrzyma� dalsze informacj� na temat prowadzonego badania prosimy o podanie adresu email. 
  <input type="email" name="email"></p>
<br>
</div>

</div>
 <input type="submit" value="dalej">
</form>
</body>

</html>
