<?php
require("config.php");
include_once("function.php");
?>
<html>
<head>
     <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3 align="center"><a href="lab17.php" class = "button1" >На головну</a><br></h3>
<?php 
for($i=0;$i<5;$i++){
	$array[$i]=mt_rand(1,20);
	
}
showArray($array);
showArrayReverse($array);
?>

</body>
</html>