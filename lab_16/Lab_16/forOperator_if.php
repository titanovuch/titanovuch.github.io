<?php
require("config.php");
include_once("function.php");

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3 align="center">   <a href="lab16.php" class = "button1">На головну</a><br></h3>
<?php 
$number=$_POST['value'];
    if($number>0){
    echo "<div align=\"center\" style=\"
    font-size:100%;color:#000000;font-weight:bold;\">Число ".$number." - додатнє</div>";
    }
	elseif ($number<0) {
    echo "<div align=\"center\" style=\"
    font-size:100%;
    color:#000000;\">Число ".$number." - від'ємне<div>";
	}
    else{  echo "<div align=\"center\" style=\"
    font-size:100%;color:#000000;\">Число ".$number." дорівнює нулю</div>"; }
?>
<h3 align="center"><a href="operator_if.php" class="button1">Назад</a><br></h3>
</body>
</html>
