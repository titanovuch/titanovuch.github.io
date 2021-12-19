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

$text=explode(" ", fread($fp,filesize($fileName)));
fclose($fp);
echo "<div align=\"center\" style=\"
color:#808080;
font-weight:bold;
font-size:100%;\">Вхідний текст</div>";
foreach ($text as $value) {
    echo $value." ";
}
echo "<br><hr><hr><hr>";
sort($text);
echo "<div align=\"center\" style=\"
color:#808080;
font-weight:bold;
font-size:100%;\">Текст після сортування</div>";
foreach ($text as $value) {
    echo $value." ";
}
?>

</body>
</html>
