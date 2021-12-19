<?php
require("config.php");
include_once("function.php");

?>
<html>
<head>
<title>Приклад операторів if, eseif, else</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h3 align="center">   <a href="lab16.php" class = "button1">На головну</a><br></h3>
<?php
echo "<div align=\"center\" style=\"font-size:140%;\">
Перевірка числа(додатнє, від'ємне або нуль)<br>
<form action=\"forOperator_if.php\" method=\"post\">
Введіть число:<br>
<input type=\"text\" name=\"value\" style=\"font-size:100%;\"><br>
<input type=\"submit\" value=\"Перевірити\"  style=\"font-size:100%;\">
</div>
</form>

"?>
</body>
</html>
