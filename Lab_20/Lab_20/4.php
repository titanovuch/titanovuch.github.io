
<html>
<head>
</head>
<h3 align="center"><a href="lab20.php">Основна</a>
<?php 
$arrayOfDate[0]="10-01-2004";
$arrayOfDate[1]="17-08-2004";
$arrayOfDate[2]="06-05-1978";
$arrayOfDate[3]="23-10-2000";
$arrayOfDate[4]="20-12-2001";
$arrayOfDate[5]="2009-01-11";
$arrayOfDate[6]="1992-04-19";
$arrayOfDate[7]="1999-07-10";
$arrayOfDate[8]="2020-09-10";
$arrayOfDate[9]="2021-02-02";
echo "<div align=\"center\" style=\"
color:#af7baa;
font-weight:bold;
font-size:120%;\">Дати:</div>";
echo "<br><div align=\"center\" style=\"
color:#2a2a2a; 
font-size:80%;\">";
	for ($i=0;$i<count($arrayOfDate);$i++) {
		if($i<count($arrayOfDate)-1){
			echo $arrayOfDate[$i].", ";
		}
		else{
			echo $arrayOfDate[$i];
		}
	}
	echo "</div><br><hr><hr>";
	echo "<div align=\"center\" style=\"
	color:#7baf80;
	\font-weight:bold;
	font-size:120%;\">Перевірка на відповідність одному із двох форматів дати:</div><br>";
	$flag=0;
	for ($i=0;$i<count($arrayOfDate);$i++) {
	 if(!preg_match( "/\b([1-9]\d{3}\-((0[1-9])|(1[0-2]))\-((0[1-9])|([1-2]\d)|(3[0-1])))\b|\b(((0[1-9])|([1-2]\d)|(3[0-1]))\-((0[1-9])|(1[0-2]))\-[1-9]\d{3})\b/", $arrayOfDate[$i] )){ 
      echo "<div align=\"center\" style=\"
      color:red; 
      font-size:150%;\">Формат дати у масиві під номером ".$i." неправильний!!!</div>";
			$flag=1;
		}
	}
	if($flag==0){
		echo "#7bb0ae;
		font-weight:bold;
		font-size:100%;\" >Всі дати відповідають форматам рррр-мм-дд та дд-мм-рррр.</div>";
	}
	echo "<br><hr><hr>"; 
	echo "<div align=\"center\" style=\"
	color:#2a2a2a;
	font-weight:bold;
	font-size:120%;\">Дати у форматі мм.дд.рррр:</div>";
$patterns = array(); 
$patterns[0] = '/(\d{4})-(\d{2})-(\d{2})/'; 
$patterns[1] = '/(\d{2})-(\d{2})-(\d{4})/';
$replacements = array(); 
$replacements[0] = '\2.\3.\1' ; 
$replacements[1] = '\2.\1.\3';

for ($i=0;$i<count($arrayOfDate);$i++) {
$arrayOfDate[$i]=preg_replace ( $patterns , $replacements , $arrayOfDate[$i] ); 
}
echo "<br><div align=\"center\" style=\"
color:#2a2a2a; 
font-size:80%;\">";
	for ($i=0;$i<count($arrayOfDate);$i++) {
		if($i<count($arrayOfDate)-1){
			echo $arrayOfDate[$i].", ";
		}
		else{
			echo $arrayOfDate[$i];
		}
	}
	echo "</div><br>";
?>

</body>
</html>
