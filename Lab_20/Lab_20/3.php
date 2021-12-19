<html>
<head>
</head>
<h3 align="center"><a href="lab20.php">Основна</a>
<form action="Завдання 3.php" method="get">
<div  align="center" style="
color:#2b0d2a;
font-weight:bold;
font-size:160%">Введіть номер телефону, щоб перевірити, чи відповідає він шаблону +38 (097) 24-27-917:</div><br>
<div align="center">
<input type="text" name="phoneNUMBER" style="font-size:150%"><input type="submit" value="Перевірити номер"  style="font-size:100%; background-color:#690000;
color:#ffffff; 
border-radius: 3px;\">
</form></div>

<?php 
$phoneNumber=$_GET['phoneNUMBER'];
$flagForCheckPhoneNumber = preg_match( "/^\+(38 \(0(39|50|63|66|67|68|73|89|91|92|93|94|95|96|97|98|99)\)) \d{2}-\d{2}-\d{3}$/", $phoneNumber );
if($phoneNumber!=""){
if($flagForCheckPhoneNumber){
  echo "<div  align=\"center\" style=\"
  color:#6b2a42;
  font-size:150%; 
  font-weight:bold;\">Цей номер телефону ".$phoneNumber." відповідає шаблону.</div>";
}
else{
	echo "<div  align=\"center\" style=\"
	color:#980004; font-size:150%;
	font-weight:bold;\">Цей номер телефону ".$phoneNumber." не відповідає шаблону!!! </div>";
	

	}
}
?>

</body>
</html>
