<?php
require("config.php");
include_once("function.php");

?>
<html>
<head>
<title>Приклад оператора for</title>
</head>
<body>
    <h3 align="center"><a href="lab16.php" class = "button1">На головну</a><br></h3>
<?php 
echo "<div align=\"center\" style=\"font-size:120%\">
Перевірка, які з чисел діляться націло на число k (ціле)<br>
<form action=\"forOperator_for.php\" method=\"post\">
Введіть число k:<br>
<input type=\"text\" name=\"value_k\" style=\"font-size:100%\"><br>
Введіть числа, для яких хочете здійснити перевірку (цілі):<br>
<input type=\"text\" name=\"value1\" style=\"font-size:100%\"><br>
<input type=\"text\" name=\"value2\" style=\"font-size:100%\"><br>
<input type=\"text\" name=\"value3\" style=\"font-size:100%\"><br>
<input type=\"submit\" value=\"Перевірити\" <div style=\"font-size:120%\">
</form></div>

"?>
</body>
</html>
