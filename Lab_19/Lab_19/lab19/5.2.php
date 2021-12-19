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

$fpForString = fopen( $fileName, "r" ) or die ( "Не вдалося відкрити $fileName" );

echo "<div align=\"center\" style=\"
color:#808080;
font-weight:bold;
font-size:100%;\">Вхідний текст</div>";

$text=fread($fpForString,filesize($fileName));
fclose($fpForString);
$text=str_replace(",", "", $text);
$text=str_replace(".", "", $text);
$text=str_replace(":", "", $text);
$text=str_replace("!", "", $text);
$text=str_replace("?", "", $text);
$text=str_replace(")", "", $text);
$text=str_replace(")", "", $text);
echo $text."<hr><hr><hr>";
$arrayFromText=explode(" ", $text);
$text=$text." ";

for ($i=0; $i < count($arrayFromText); $i++) { 
$arrayFromText[$i]=" ".$arrayFromText[$i]." ";
}
$flag=0;
$words=array("","","");
$countsArray=array(0,0,0);
for ($i=0; $i < count($arrayFromText); $i++) { 
	$flag=0;
	for ($j=0; $j < count($words); $j++) { 
	  if($arrayFromText[$i]==$words[$j]){
       $flag=1;
	  }
	}
	
	if($flag==0){
        for ($k=0; $k < count($countsArray); $k++) { 
           if(substr_count($text, $arrayFromText[$i])>$countsArray[$k]){
           	 $tempWords=$words[$k];
             $tempCountWords=$countsArray[$k];
           	$words[$k]=$arrayFromText[$i];
           	$countsArray[$k]=substr_count($text, $arrayFromText[$i]);
           	   if($k<count($countsArray)-1){
                $words[$k+1]=$tempWords;
                $countsArray[$k+1]=$tempCountWords;
           	   }
           	break 1;
           }
        }
	}
}
echo "<div align=\"center\" style=\"
color:#808080;
font-weight:bold;
font-size:100%;\">Слова, які зустрічаються найбільше</div>";
for ($i=0; $i < count($words); $i++) { 
	echo "<div align=\"center\" style=\"color:#808080;font-weight:bold;font-size:100%;\">".$words[$i]." - ".$countsArray[$i]."</div><br>";
}


?>

</body>
</html>
