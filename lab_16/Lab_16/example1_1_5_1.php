<?php
require("config.php");
include_once("function.php");

?>
<html>
<head>
<title>Приклад форми Post</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$variable=$_POST['formvariable'];
echo "<br>";
echo "<div align=\"center\" style=\"
color:#000000;font-size:120%;\"><b>Число додане до поточного файлу методом post:".
$variable."</b></div>";
echo "<div align=\"center\" style=\"font-size:140%;\">
<form action=\"example1_1_5_1.php\" method=\"post\">
<input type=\"text\" name=\"formvariable\">
<input type=\"submit\" value=\"Додати число до поточного файлу\"><br></form>
<form action=\"example1_1_5_2.php\" method=\"get\">
<input type=\"text\" name=\"formvariableGet\">
<input type=\"submit\" value=\"Додати число до файлу example1_1_5_2.php\"></form></div>"?>
<h3 align="center"><a href="lab16.php" class="button1">Назад</a><br></h3>
</body>
</html>