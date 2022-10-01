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
$array = array();
$vals = array_count_values(file("EX1.txt"));
echo 'Total number of duplicate elements found in the array is : '.count($vals).'<br><br>';
print_r($vals);
?>
</body>
</html>