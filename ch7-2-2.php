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

// 建立關聯陣列
$arr = array(
    "color" => "紅色",
    "name"  => "Miachle",
    "shape" => "Circle"
);

// 逐項輸出
foreach($arr as $key => $value) {
    echo "$key~$value~<br/><hr>";
}

print_r($arr);
?>
</body>
</html>
