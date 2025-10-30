<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-2-2.php</title>
</head>
<body>
<?php 
echo "<h2>SID: C112181145</h2>";
echo "<h2>NAME: 蔡孟洹</h2>";
$weekday = array( 1=>"Mon", "Tue", "Wed", "Thu",
                   "Fri", "Sat", "Sun");
// 顯示陣列元素
for ( $i = 1; $i <= count($weekday); $i++ )
   echo "$i : $weekday[$i] ";
echo "<br/>";?>
</body>
</html>