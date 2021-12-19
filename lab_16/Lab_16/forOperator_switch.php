<?php
require("config.php");
include_once("function.php");

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <centre>
<?php 
$number=$_POST['choice'];

    switch ($number) {
	case '1':
	echo "<img src=\"1.png\">";
		break;
	case '2':
	echo "<img src=\"2.jpg\">";
		break;
	case '3':
	echo "<img src=\"3.jpg\">";
		break;
	default:
		echo "Некоректно введені дані, повторіть спробу";
		break;
}
?>
</centre>
<h3 align="center"><a href="operator_switch.php" class ="button1">Назад</a><br></h3>
</body>
</html>