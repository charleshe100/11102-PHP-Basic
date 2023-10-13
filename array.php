<?php
$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo $a[3];

echo "<br>";
$b=[];

$b['姓名']='王大明';
$b['學歷']='明志科大';
$b['tel']='0912654987';
$b['血型']='A';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['姓名'];
echo $b['血型'];

echo "<br>";
$c=[];

$c['name']='王大明';
$c['興趣']=['看書','玩手遊','追劇'];

echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['name'];
echo '，喜歡~';
echo $c['興趣'][0];
echo '、';
echo $c['興趣'][1];
echo '、';
echo $c['興趣'][2];


?>