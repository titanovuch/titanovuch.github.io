<?php
require("config.php");
?>
<html>
<head>
</head>
<body>
    <h3 align="center"><a href="lab17.php" class = "button1" >На головну</a><br></h3>
   <h3><center> <p>Натисніть на посилання</p></center></h3>
<?php
$value=mt_rand(1,5);

 echo "<h3 align=\"center\"><a href=zavdannja6.php?passedValue=$value style=\"color:000000;font-weight:\" >zavdannja6.php</a></h3>";
$valueFromLink=$_GET["passedValue"];
	switch ($valueFromLink) {
		case '1':
			echo "<div align=\"center\" style=\"
			color:#000000;
			font-weight: bold;
			font-size:100%;\">Викликати функцію fun1()<div/>";
			break;
		case '2':
			echo "<div align=\"center\" 
			style=\"color:#000000;font-weight: bold;
			font-size:100%;\">Викликати функцію fun2()<div/>";
			break;
		case '3':
			echo "<div align=\"center\" style=\"
			color:#000000;
			font-weight: bold;
			font-size:100%;\">Викликати функцію fun3()<div/>";
			break;
		default:
			echo "<div align=\"center\" 
			style=\"color:#000000;font-weight: bold;
			font-size:100%;\">Некоректно введені дані</div>";
			break;
	}

?>
</body>
</html>
