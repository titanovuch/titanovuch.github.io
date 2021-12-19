<?php
require("config.php");
include_once("function.php");

?>
<html>
<head>
<title>Приклад оператора switch</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
echo "<div align=\"center\" style=\"font-size:100%;\">
<br>
1)Фото 1<br>
2)Фото 2<br>
3)Фото 3<br>
<form action=\"forOperator_switch.php\" method=\"post\">
Введіть число, яку картинку ви хочете побачити:<br>
<input type=\"text\" name=\"choice\" style=\"font-size:100%\"><br>
<input type=\"submit\" value=\"Показати\" style=\"font-size:100%\";>
</form></div>

"?>
<h3 align="center"><a href="lab16.php" class = "button1">На головну</a><br></h3>
</body>
</html>