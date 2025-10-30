<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ch7-1-6a.php</title>
</head>
<body>
<?php
echo "<h2>SID: C112181145</h2>";
echo "<h2>NAME: 蔡孟洹</h2>";
// 使用define()建立常數陣列
define("ANIMALS", [
    "狗", 
    "Cat",
    "Monkey",
    "鳥",
]);
echo ANIMALS[1];
echo "<br/>";
echo ANIMALS[2];
echo "<br/>";
?>
</body>
</html>
