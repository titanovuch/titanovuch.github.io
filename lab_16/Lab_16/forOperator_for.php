<?php

require("config.php");
//include_once("db.php");
include_once("function.php");

?>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$k=$_POST['value_k'];
$value[0]=$_POST['value1'];
$value[1]=$_POST['value2'];
$value[2]=$_POST['value3'];
for($i=0;$i<count($value);$i++){
  if($value[$i]%$k==0){
   echo "<div align=\"center\" style=\"color:green; 
   font-size:100%;
   color:#000000;font-weight:bold;\">Число ".$value[$i]." ділиться націло на число ".$k."</div>";
   echo "<br>";
  }
  else{
  	echo "<div align=\"center\" style=\"color:red; 
  	font-size:100%;
  	color:#000000;font-weight:bold;\">Число ".$value[$i]." не ділиться націло на число ".$k."</div>";
  	echo "<br>";
  }
}
?>
<h3 align="center"><a href="operator_for.php" class="button1">Назад</a><br></h3>
</body>
</html>
