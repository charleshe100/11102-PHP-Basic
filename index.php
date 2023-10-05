<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
define('age',20); 
//define 是常數宣告，不能被改變, 只能宣告一次，只能宣告值和字串
// $age=30;

$age=50;
$name='王大明';
echo $age;
echo $name;

$tmp=$age;
$age=$name;
$name=$tmp;
echo $age;
echo $name;

?>
</body>

</html>