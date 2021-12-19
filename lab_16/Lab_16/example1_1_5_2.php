<?php

require("config.php");
include_once("function.php");

?>
<html>
<head>
<title>Приклад форми get</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$variable=$_GET['formvariable'];
echo "<div align=\"center\" style=\"
color:#000000;
font-size:100%;\"><h3><b>Число додане до поточного файлу методом get:".$variable."</h3></div></b>";

echo "<br>";
echo "<div align=\"center\" style=\"
color:#000000;
;font-size:120%;\"> <b>Значення змінної передане з файлу example1_1_5_1.php, помножене на 2:".($variableFromex1_1_5_1*2)."</div></b>";
?>
<br>
<div align="center">
<form action="example1_1_5_2.php" method="get">
<input type="text" name="formvariable">
<input type="submit" value="Додати">
</form>
<div>
<h3 align="center"><a href="lab16.php" class = "button1">Назад</a><br></h3>
</body>
</html>
