  <h3 align="center"><a href="../lab19.php" class ="button1">На головну</a><br></h3>
<?php
require("config.php");

echo
"<div align='center'>
<form action='Завдання 2.php' method='post' enctype='multipart/form-data'>
<input type='file' name='uploadfile'>
<input type='submit' value='Загрузити'>
</form></div>
<hr/>";

 $uploaddir = "../files/";
echo "<div align=\"center\"><p>uploaddir=$uploaddir";
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);

echo "<p>uploadfile=$uploadfile";
if (copy($_FILES['uploadfile']['tmp_name'],$uploadfile))

{
echo "<p>Файл завантажений на сервер";
}
else {echo "<p>Файл не завантажений на сервер!";}
echo "<p>Оригінальна назва:".$_FILES['uploadfile']['name']."</p>";
echo "<p>Тип файлу:".$_FILES['uploadfile']['type']."</p>";
echo "<p>Розмір:".$_FILES['uploadfile']['size']." байт</p>";
echo "<p>Тимчасове імя:"  .$_FILES['uploadfile']['tmp_name']."</p></div>";

?>
