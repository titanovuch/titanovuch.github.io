<?php
require("config.php");


?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h3 align="center"><a href="lab18.php" class ="button1">На головну</a><br></h3>
<?php 
echo "<div align=\"center\" style=\"
font-size:120%\">
<form action=\"forExample2.php\" method=\"post\">
<div style=\"
color:#000000;
font-weight:bold;\">Введіть дані:</div><br>
<table style=\"font-size:70%\">
<td>Прізвище <input type=\"text\" name=\"lastName\" style=\"font-size:140%\"></td>
<tr><td>Ім'я <input type=\"text\" name=\"firstName\" style=\"font-size:150%\"></td>
<tr><td>Вік <input type=\"text\" name=\"age\" style=\"font-size:150%\"></td>
<tr><td>E-mail <input type=\"text\" name=\"email\" placeholder=\"name@gmail.com\"style=\"font-size:150%\"></td>
<tr><td>Пароль <input type=\"password\" name=\"password\" style=\"font-size:150%\"></td>
<tr><td>Повторити пароль <input type=\"password\" name=\"repeatPassword\" style=\"font-size:150%\"><br></td>
</table><br>
<input type=\"submit\" value=\"Готово\"  style=\"font-size:100%; background-color:#fff; 
color:black; 
border-radius: 3px;\">
</form></div>"
?>

</body>
</html>
