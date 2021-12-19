<?php
require("config.php");
include_once("function.php");

?>
<html>
<head>
<title>Приклад оператора do while</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3 align="center"><a href="lab16.php" class = "button1">На головну</a><br></h3>
<?php echo "<div align=\"center\" style=\"font-size:110%\">
Перевірка, яке з чисел ціле, а яке дробове (дробові числа вводити через крапку)<br>
<form action=\"forOperator_do_while.php\" method=\"post\">
Введіть числа:<br>
<input type=\"text\" name=\"value1\" style=\"font-size:120%\"><br>
<input type=\"text\" name=\"value2\" style=\"font-size:120%\"><br>
<input type=\"text\" name=\"value3\" style=\"font-size:120%\"><br>
<input type=\"submit\" value=\"Перевірити\"  style=\"font-size:120%\">
</form></div>

"?>
</body>
</html>
