<?php
require("config.php");
include_once("function.php");

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$number=$_POST['value'];
$i=0;
while ( $i <= 10) {
  	echo "<div align=\"center\" style=\"
  	font-size:100%;color:000000;font-weight:bold;\">".$number."*".$i."=".$number*$i."</div>";
  	echo "<br>";
  	$i++;
}  
?>
<h3 align="center"><a href="operator_while.php" class="button1">Назад</a><br></h3>
</body>
</html>
