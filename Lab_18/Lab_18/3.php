<?php
require("config.php");
?>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3 align="center"><a href="lab18.php" class ="button1">На головну</a><br></h3>
<?php 
$country["Ukraine"]=array("name"=>"Україна","capital"=>"Київ","population"=>"42");
$country["USA"]=array("name"=>"Америка","capital"=>"Вашингтон","population"=>"329.5");
$country["Czech Republic"]=array("name"=>"Чехія","capital"=>"Прага","population"=>"10.7");
 echo "<table align=\"center\" style=\"
 font-size:100%; 
 border-color:#A0522D; 
 font-weight:bold;\"
 border=\"4px\"
 width: 450px;
 cellspacing=\"5\" 
 cellpadding=\"5\">";
     echo "<tr style=\"color:#BC8F8F;\">";
   	 echo "<td>"."Назва"."</td>"."<td>"."Столиця"."</td>"."<td>"."Населення, млн.ч </td>";
     echo "</tr>";
     foreach ($country as $temp) {
     echo "<tr style=\"color:#800000;\">";
     foreach ($temp as $key => $value) {
     		echo "<td>".$value."</td>";
     	}
     echo "</tr>";
     }
     echo "</table>";
     
     echo "<br><div align= \"center\" style=\"
     color:#A0522D;
      font-size:100%;
      font-weight:bold;
      width: 450px;
      margin: auto;
      border: 4px solid #FF0000;\">";

     foreach ($country as $temp) {
     foreach ($temp as $key => $value) {
     	    if($key=="name"){
     		echo $value.":";
     	     }
     		 elseif ($key=="capital") {
     		 	echo "столиця - ".$value;
     		 }
     		 else{
     		 	echo ", населення - ".$value." млн.ч";
     		 }
     	}
     	echo "<br>";
     }
     echo "</div><br>";
 
     asort($country);
     echo "<div align=\"center\" style=\"
     color:#A0522D;
     font-size:100%;
     font-weight:bold;
     width: 450px;
     margin: auto;
     border: 4px solid 	#FF0000;\">";
     foreach ($country as $key => $temp) {
     	echo $key.":<br>";
     foreach ($temp as $key1 => $value) {   	   
     		echo $key1."=>".$value."<br>";
     	}
     	echo "<br>";
     }
     echo "</div><br>";

    
    
    echo "<div style=\"
    color:#A0522D;
    font-weight:bold;
    font-size:100%;
    margin: auto;
    width: 450px;
    border: 4px solid #FF0000; 
    padding: 10px;\">";
    echo "<pre>"; 
    print_r($country); 
    echo "</pre>";
    echo "</div>";
?>

</body>
</html>
