
<html>
<head>
</head>
<h3 align="center"><a href="lab20.php">Основна</a>
<?php 
$fileName="text.txt";
$fp = fopen( $fileName, "r" ) or die ( "Не вдалося відкрити $fileName" );
$text=fread($fp,filesize($fileName));
$text=str_replace("<", "&lt", $text);
$text=str_replace(">", "&gt", $text);

fclose($fp);
echo "<div align=\"center\" style=\"
color:#6c096a;
font-weight:bold;
font-size:160%;\">А) Весь текст:</div>";
echo $text;
echo "<div align=\"center\" style=\"
color:#0a5c6e;
font-weight:bold;
font-size:160%;\">В) Назви відкриваючих тегів:</div>";
 $pattern ="/&lt([a-zA-Z]+)&gt/";
preg_match_all ( $pattern ,$text,$out,PREG_PATTERN_ORDER ); 

echo "<br><div align=\"center\" style=\"
color:#aa5d20;
font-size:120%;\">";
	for ($i=0; $i < count($out[1]); $i++) { 
		echo $out[1][$i]." ";
	}
echo "</div>";
echo "<div align=\"center\" style=\"
color:#6e1c0a;
font-weight:bold;
font-size:160%;\">С) Назви відкриваючих тегів із кутовими дужками:</div>";
echo "<br><div align=\"center\" style=\"color:#aa5d20; font-size:120%;\">";
	for ($i=0; $i < count($out[0]); $i++) { 
		echo $out[0][$i]." ";
	}
?>

</body>
</html>
