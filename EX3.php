<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise 2</title>
</head>
<body>
	<h4>Array Exercise 2</h4>
<?php
$arr=file("EX3.txt");
$oddArray = array();
$evenArray = array();
echo "Orginal array: \n";
$size = count($arr);
for ($i = 0; $i < $size; $i++) {
    echo "$arr[$i] ";
}
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenArray[$j] = $arr[$i];
        $j++;
    } else {
        $oddArray[$k] = $arr[$i];
        $k++;
    }
}
echo "\nArray of even numbers : ";
for ($i = 0; $i<=$j; $i++) {
    echo "$evenArray[$i]";
}
echo "\nArray of odd numbers : ";
for ($i = 0; $i<=$k; $i++) {
    echo "$oddArray[$i]";
}
?>
</body>
</html>