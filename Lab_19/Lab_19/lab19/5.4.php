<?php
require("config.php");

?>
<html>
<head>
</head>
<body>
    <h3 align="center"><a href="../lab19.php" class="button1">Назад</a><br></h3>
<?php
$fileName="../files/text.txt";
$fp = fopen( $fileName, "r" ) or die ( "Не вдалося відкрити $fileName" );
echo "<div align=\"center\" style=\"
color:#808080;
font-weight:bold;
font-size:100%;\">Вхідний текст</div>";
$text=explode(" ", fread($fp,filesize($fileName)));
fclose($fp);
foreach ($text as $value) {
     echo $value." ";
}
echo "<br><br><br><div align=\"center\" style=\"
color:#808080;
font-weight:bold;
font-size:150%;\">Слова у тексті, які починаються на 'ряд': ";
for($i=0;$i<count($text);$i++){
   if(strncmp($text[$i],"ряд",4)==0){
    echo $text[$i]." ";
   }
  
}
?>

</body>
</html>
