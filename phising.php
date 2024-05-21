<?php
$ip_address = $_SERVER['REMOTE_ADDR'];

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>I Am Febry</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <img src="https://g.top4top.io/p_3059kmpti0.jpg">
  <br>
  <p><b>I Am Febry</b></p><br>
</body>
</html>

$file = 'ip.txt';
$ip_entry = date("Y-m-d H:i:s") . " - " . $ip_address . PHP_EOL;
file_put_contents($file, $ip_entry, FILE_APPEND | LOCK_EX);
?>
