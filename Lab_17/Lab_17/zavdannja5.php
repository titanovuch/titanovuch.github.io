<?php
require("config.php");
include_once("function.php");
?>
<html>
<head>
</head>
<body>
    <h3 align="center"><a href="lab17.php" class = "button1" >На головну</a><br></h3>
<?php echo "<div align=\"center\"
style=\"font-size:100%\">
<form action=\"zavdannja5.php\"
method=\"post\">
<h4>Введіть ціле додатнє число:</h4><br>
<input type=\"text\"
name=\"value\" 
style=\"font-size:100%\"><br>
<input type=\"submit\" 
value=\"Передати дані\"  
style=\"font-size:100%\">
</form></div>";
$value=$_POST['value'];
if($value>0)
{
fibonacciNumber($value);
}

include_once("zavdannja6.php");
?>
</body>
</html>