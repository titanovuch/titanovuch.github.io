<?php
require("config.php");
//include_once("db.php");

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3 align="center"><a href="lab18.php" class ="button1">На головну</a><br></h3>
<?php 
$array=array("firstValue"=>2,"secondValue"=>4,"thirdValue"=>6,"fourthValue"=>8,"fifthValue"=>10);
echo "<div align=\"center\" style=\"
font-size:120%;
font-weight:bold;
color:#D2691E;\">";
foreach ($array as $temp) {
  echo $temp."^2=".$temp*$temp."<br>";
}
echo "</div>";
?>

</body>
</html>