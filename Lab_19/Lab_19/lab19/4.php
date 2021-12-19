<?php
require("config.php");

?>
<html>
<head>
</head>
<body>
    <h3 align=""><a href="../lab19.php" class="button1">На головну</a><br></h3>
<?php
$fileName="../files/tag2.txt";
$fileNameForOut="../files/out.txt";
$fpForTag = fopen( $fileName, "r" ) or die ( "Не вдалося відкрити $fileName" );
$fpForText = fopen( $fileName, "r" ) or die ( "Не вдалося відкрити $fileName" );
echo "<table align=\" style=\"
font-size:100%; 
border-color:#DEB887; 
font-weight:bold;\" border=\"2px\" cellspacing=\"5\" cellpadding=\"5\">";
$temp=0;
while ( ! feof ( $fpForTag ) ){	
    $a=strtok(fgets( $fpForTag ),"<>");
     
    echo "<tr><td>&lt ".$a."&gt</td><td>".( fgetss( $fpForText ) )."</td>";
    
    $temp++;
} 
fclose($fpForTag);
fclose($fpForText);
echo "</table>";
     $fpForOut = fopen( $fileNameForOut, "w+" ) or die ( "Не вдалося відкрити $fileName" );
     fwrite($fpForOut, "Всього у файлі tag2.txt   описано тегів: ".$temp);
     fseek($fpForOut, 0);
     echo "<div align=\" style=\"
     color:#808080;
     font-weight:bold;
     font-size:100%;\">".fread($fpForOut,filesize($fileName))."</div>";
     fclose($fpForOut);
?>

</body>
</html>
