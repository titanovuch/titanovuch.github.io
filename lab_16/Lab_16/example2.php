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
    <h3 align="center">   <a href="lab16.php" class = "button1">На головну</a><br></h3>
<?php echo "<div align=\"center\" style=\"font-size:100%\">
Введіть номер завдання:<br>
1 - обчислення максимальної температури;<br>
2  - обчислення мінімальної температури;<br>
3 - обчислення середньої температури.<br>
<form action=\"forExample2.php\" method=\"post\">
<input type=\"text\" name=\"choiceTask\" style=\"font-size:100%\"><br>
Введіть значення температури:<br>
<input type=\"text\" name=\"temparature1\" style=\"font-size:120%\"><br>
<input type=\"text\" name=\"temparature2\" style=\"font-size:120%\"><br>
<input type=\"text\" name=\"temparature3\" style=\"font-size:120%\"><br>
<input type=\"submit\" value=\"Результат\" style=\"font-size:120%\">
</form></div>

"?>
</body>
</html>