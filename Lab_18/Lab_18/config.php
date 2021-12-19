<?php
$LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME'])));
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
echo "Last modified: $LastModified";
$config{'charset'} = 'utf-8';
$config{'default_lng'} = 'ua';
?>

<html>
<head>
  
    <meta name='keywords' content=''/>
    <meta name='description' content=''/>
    <meta http-equiv='Content-Type' content='text/html' charset='utf-8'>

<link rel='stylesheet' href='style.css' type='text/css' media='screen, projection'/>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="my.js"></script>
</head>
</html>