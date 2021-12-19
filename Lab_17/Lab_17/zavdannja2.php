<?php
require("config.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <h3 align="center">   <a href="lab17.php" class = "button1">На головну</a><br></h3>
 <center>
<?php 
for($i=0;$i<10;$i++){
	
	$array[$i]=mt_rand(1,20);
	echo "<div align=\"center\" style=\"
	color:#000000 ;
	font-weight: bold;
	font-size:100%;\">A[".$i."]"."=".$array[$i]."
	</div><br>";
}
$min=$array[0];
$max=$array[0];
for($i=0;$i<10;$i++){
    if($array[$i]>$max){
      $max=$array[$i];
      $indexMax=$i;
    }
    if($array[$i]<$min){
      $min=$array[$i];
      $indexMin=$i;
    }
}
echo "<div align=\" style=\"
color:#000000;
ont-weight: bold;
font-size:100%;\">Мінімум:"."індекс - ".$indexMin.", значення - ".$min."
</div><br>";

echo "<div align=\" style=\"
color:#000000;
font-weight: bold;
font-size:100%;\">Максимум:"."індекс - ".$indexMax.", значення - ".$max."
</div><br>";
?>
</center>
</body>
</html>
