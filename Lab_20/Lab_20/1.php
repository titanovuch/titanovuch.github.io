
<html>
<head>
</head>
<h3 align="center"><a href="lab20.php">Основна</a>
<form action="Завдання1.php" method="get">
<div  align="center" style="
color:#7d0b0b;
font-weight:bold;
font-size:150%">Введіть свою електронну адресу:</div><br>
<div align="center">
<input type="text"
name="email" 
style="font-size:150%">
<input type="submit" 
value="Перевірити рядок"  
style="font-size:120%;
background-color:#690909;
color:#ffffff; 
border-radius: 7px;"></div>
</form>

<?php 
$emailAddress=$_GET['email'];
$flagForCheckEmail = preg_match( "/^([a-zA-Z0-9\._\-]+@[a-zA-Z0-9\._\-]+(\.[a-zA-Z0-9]+)+)+$/", $emailAddress );

if($emailAddress!=""){
if($flagForCheckEmail){
  echo "<div  align=\"center\" style=\"
  color:#C0C0C0;
  font-size:150%; 
  font-weight:bold;\">Ваш електронний адрес ".$emailAddress." правильний)</div>";
}
else{
	echo "<div  align=\"center\" style=\"
	color:red; font-size:150%; font-weight:bold;\">Помилка!!(";
	}
}
?>

</body>
</html>
