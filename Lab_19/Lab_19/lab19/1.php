<?php
require("config.php");

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3 align="center"><a href="../lab19.php" class ="button1">На головну</a><br></h3>
<?php 
echo "<div align=\" style=\"font-size:150%\">
<form action=\"Завдання 1.php\" method=\"post\">
<div style=\"color:#BC8F8F;font-weight:bold;\">Введіть назву файлу(існуючий файл text.txt):</div><br>
<input type=\"text\" name=\"file\" style=\"font-size:120%\"><input type=\"submit\" value=\"Готово\"  style=\"font-size:100%; background-color:#FFA500;; color:black; border-radius: 4px;\">
</form></div>";
$fileName=$_POST['file'];
if(file_exists($fileName)&&$fileName!=""){ 
echo "<div align=\" style=\"font-size:100%;font-weight:bold;color:#B8860B;\"> існує файл з ім'ям ".$fileName."</div><br>
<div align=\" style=\"font-size:100%;font-weight:bold;color:#B8860B;\">Час останньої модифікації -".( date( "d M Y H:i", filemtime( $fileName ) ) )."</div><br>
      <div align=\" style=\"font-size:100%;font-weight:bold;color:#B8860B;\">Розмір файлу -".filesize($fileName)." байт</div><br>
      <div align=\" style=\"font-size:100%;font-weight:bold;color:#B8860B;\">Час створення - ".( date( "d M Y H:i", fileatime( $fileName ) ) )."</div><br>
      
 <div align=\" style=\"font-size:100%;font-weight:bold;color:#B8860B;\">Вміст файлу</div>";
 $fp = fopen( $fileName, "r" ) or die ( "Не можливо відкрити файл  $fileName" );
 echo "<div style=\"color:#000000;font-size:110%;\">".(fread($fp,filesize($fileName)))."</div>"; 



 }
elseif($fileName!=""){
	echo "<div align=\"center\" style=\"font-size:100%;font-weight:bold;color:red;\">Файл  ".$fileName."   не існує</div>";
   }
   fclose($fp);
?>

</body>
