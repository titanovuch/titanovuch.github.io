<?php
require("config.php");
//include_once("db.php");
include_once("function.php");

?>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$value[0]=$_POST['value1'];
$value[1]=$_POST['value2'];
$value[2]=$_POST['value3'];
$i=0;
do {
	if($value[$i]==(int)$value[$i]){
     echo "<div align=\"center\" style=\"
     font-size:100%;
     color:000000;
     font-weight:bold;\">Число ".$value[$i]." - ціле</div>";
     echo "<br>";
	}
	else{
		echo "<div align=\"center\" style=\"
		font-size:100%;
		color:000000;
		font-weight:bold;\">Число ".$value[$i]." - дробове</div>";
		echo "<br>";
	}
	$i++;
} while ($i<count($value));
?>
<h3 align="center"><a href="operator_do_while.php" class="button1">Назад</a><br></h3>
</body>
</html>
