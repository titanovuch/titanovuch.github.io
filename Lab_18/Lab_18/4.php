<?php
require("config.php");

?>
<html>
<head>
<style>
.question{
	color:#DAA520;
	font-weight:bold;
}
</style>	
}
</head>
<body>
    <h3 align="center"><a href="lab18.php" class = "button1">На головну</a><br></h3>
<?php 
echo "<div align=\"center\" style=\"
font-size:150%\">
<form action=\"forzavd4.php\" method=\"post\">
<div style=\"color:#A0522D;font-weight:bold;\">Анкета</div><br>


<div class=\"question\">Оберіть столицю України:</div>
<div style=\"margin: auto;
width: 30px;
font-size:80%\">
<input type=\"radio\" name=\"radioButton\" value=\"Москва\">Москва
<input type=\"radio\" name=\"radioButton\" value=\"Париж\">Париж
<input type=\"radio\" name=\"radioButton\" value=\"Київ\">Київ
<input type=\"radio\" name=\"radioButton\" value=\"Варшава\">Варшава
</div>


<div class=\"question\">Скільки областей налічує Україна?</div><br>
<div style=\"margin: auto;
width: 450px;\">
<select style=\"font-size:80%\" name=specialty size=1>
<option value=\"1\"> 25 </option>
<option value=\"2\"> 40 </option>
<option value=\"3\"> 8 </option>
<option value=\"4\"> 28 </option>
</select><br>
</div>

<div class=\"question\">В якій області ви проживаєте? </div><br>
<div align=\"left\" style=\"margin: auto;
width: 200px;
font-size:80%\">
<input type=\"checkbox\" name=\"checkbox1\" value=\"Дніпропетровська\">Дніпропетровська<br>
<input type=\"checkbox\" name=\"checkbox2\" value=\"Івано-Франківська\">Івано-Франківська<br>
<input type=\"checkbox\" name=\"checkbox3\" value=\"Чернівецька\">Чернівецька<br>
<input type=\"checkbox\" name=\"checkbox4\" value=\"Черкаська\">Черкаська<br>
<input type=\"checkbox\" name=\"checkbox5\" value=\"Я не з України\">Я не з України<br>
<br>
</div>

<div class=\"question\">Що вам подобається в Україні?</div><br>
<div style=\"margin: auto;
width: 260px;\">
<select style=\"
font-size:80%\" name=hobbies[] size=4 multiple>
<option value=\" Милозвучність мови\"> Милозвучність мови </option>
<option value=\"Її пейзажі\"> Її пейзажі </option>
<option value=\"Нація\"> Нація </option>
<option value=\"Творчість\"> Творчість </option>
</select>
</div>

<div  align=\"center\">
<input type=\"submit\" value=\"Готово\"  style=\"font-size:100%; background-color:#fff; color:black; border-radius: 4px;\"></div>

</form></div>"
?>

</body>
</html>
