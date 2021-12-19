
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
color:#930000;
font-weight:bold;
font-size:150%;\">Текст:</div>";
echo $text;
 $pattern1 ="/\bтег[a-яіїй]*\b/ui";
preg_match_all ( $pattern1 ,$text,$out1,PREG_PATTERN_ORDER ); 
echo "<div align=\"center\" style=\"
color:#930000;
font-weight:bold;
font-size:150%;\">А) Всі слова 'тег':</div>";
echo "<div align=\"center\" style=\"
color:#000000;
font-size:100%;\">";
	for ($i=0; $i < count($out1[0]); $i++) { 
		echo $out1[0][$i]." ";
	}
	echo "</div><br><br>";
	$pattern2 ="/[\b\<]*(html[a-za-яіїй]*)/ui";
preg_match_all ( $pattern2 ,$text,$out2,PREG_PATTERN_ORDER ); 
echo "<div align=\"center\" style=\"
color:#930000;
font-weight:bold;
font-size:150%;\">В) Всі слова 'HTML':</div>";
echo "<div align=\"center\" style=\"color:#000000;
font-size:100%;\">";
	for ($i=0; $i < count($out2[0]); $i++) { 
		echo $out2[0][$i]." ";
	}

echo "</div><br><br>";
echo "<div align=\"center\" style=\"
color:#930000;
font-weight:bold;
font-size:150%\">С) Введіть слова в називному відмінку:</div>";
echo "<div align=\"center\"><form action=\"Завдання 5.php\" method=\"get\"><input type=\"text\" name=\"word\" style=\"font-size:150%\"><input type=\"submit\" value=\"Знайти\"  style=\"
font-size:150%;
background-color:#930000; color:#ffffff;
border-radius: 7px;\">
</form></div>";
$wordFromForm=$_GET['word'];
if($wordFromForm!=""){
  $pattern3="/\b[&lt]*(".$wordFromForm."[a-za-яіїй]*)\b/ui";
  preg_match_all ( $pattern3 ,$text,$out3,PREG_PATTERN_ORDER );
  echo "<br><div align=\"center\" style=\"color:#000000; font-size:100%;\">";
    if(count($out3[0])==0){
    	echo "<div align=\"center\" style=\"
    	color:red;font-weight:bold;
    	font-size:150%;\">Слово '".$wordFromForm."' у даному реченні відсутнє!!</div>";
    }
    else{
    	echo "<div align=\"center\" style=\"color:#930000;
    	font-weight:bold;
    	font-size:150%;\">Всі слова '".$wordFromForm."':</div>";
	for ($i=0; $i < count($out3[0]); $i++) { 
		$out3[0][$i]=str_replace("lt", "",$out3[0][$i] );
		echo $out3[0][$i]." ";
	}
	echo "<div align=\"center\" style=\"
	color:#930000;
	font-weight:bold;
	font-size:150%;\">Речення в порядку спадання чисел слів в тексті: '".$wordFromForm."':</div>";
	forTask5($text,$pattern3);
    }
echo "</div><br><hr>";
}
?>

</body>
</html>
