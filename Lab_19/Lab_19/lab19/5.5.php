<?php
require("config.php");

?>
<html>
<head>
</head>
<body>
    <h3 align="center"><a href="../lab19.php" class="button1">На головну</a><br></h3>
<?php
$fileName="../files/text.txt";
$fp = fopen( $fileName, "r" ) or die ( "Не вдалося відкрити $fileName" );
echo "<div align=\"center\" style=\"
color:#808080;
font-weight:bold;
font-size:100%;\">Випадковий абзац</div>";
$text=explode("   ", fread($fp,filesize($fileName)));
fclose($fp);
if($text[0]==""){
	for ($i=0; $i < count($text)-1; $i++) { 
		$paragraphsArray[$i]=$text[$i+1];
	}
}

echo $paragraphsArray[mt_rand(0,4)]."<br><br>";

?>

</body>
</html>
