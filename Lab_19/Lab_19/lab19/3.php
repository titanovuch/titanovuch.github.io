<?php
require("config.php");

?>
<html>
<head>
</head>
<body>
    <h3 align=""><a href="../lab19.php" class="button1">На головну</a><br></h3>
<?php
$fileName="../files/tag1.txt";
$fp = fopen( $fileName, "r" ) or die ( "Файл $fileName не відкривається"  );
echo "<table align=\" style=\"font-size:100%; 
border-color:#DEB887;
font-weight:bold;\"
border=\"2px\" cellspacing=\"5\" cellpadding=\"5\">";
$temp=0;
while ( ! feof ( $fp ) ){ 
	if($temp%2==0){		
    echo "<tr><td>&lt ".( fgets( $fp ) )."&gt</td>";
    
    }
    else{
    	 echo "<td>".( fgets( $fp ) )."</td></tr>";
    }
    $temp++;
} 
echo "</table>";
fclose($fp);
 
?>

</body>
</html>
