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
$text=explode(" ", fread($fp,filesize($fileName)));
fclose($fp);
echo "<div align=\"center\" style=\"
color:#808080;
font-weight:bold;
font-size:100%;\">Вхідний текст</div>";
foreach ($text as $value) {
    echo $value." ";
}
$maxLength=strlen($maxLength[0]);
for($i=1;$i<count($text);$i++){
  if(strlen($text[$i])>$maxLength){
   $temp=0;
   $index=array();
   $maxLength=strlen($text[$i]);
   $index[$temp]=$i;
   $temp++;
   }
   elseif (strlen($text[$i])==$maxLength) {
   $index[$temp]=$i;
   $temp++;
   }
}
echo "<br><div align=\"center\" style=\"
color:#808080;
font-weight:bold;
font-size:150%;\">Найдовші слова з тексту: ";
for ($i=0;$i<count($index);$i++) {
	if($i<count($index)-1){
		$k=$text[$index[$i]];
	echo $text[$index[$i]]." - ".(mb_strlen($text[$index[$i]]))." букв, ";

    }
    else{
    	echo $text[$index[$i]]." - ".(mb_strlen($text[$index[$i]]))." букв";
    }
}
?>

</body>
</html>
