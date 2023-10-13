<?php
$sum=0;
for($i=1;$i<=10;$i=$i+1){
    $sum=$sum+$i;
}
echo "1加到10000總和是：".$sum;
echo "<hr>";


$sum=0;
for($i=1;$i<=10;$i=$i+1){
    // $sum=$sum+$i;
    echo '當$i='.$i.'時';
    echo '$sum+$i的結果是：';
    echo $sum . '+' . $i .'=';
    echo $sum+$i;
    echo "<br>";
    $sum += $i;
}
?>
echo "<h2>迴圈練習</h2>"
使用for迴圈來產生以下的數列

echo "<br>"1,3,5,7,9……n ;
echo "<br>"10,20,30,40,50,60……n ;
echo "<br>"3,5,7,11,13,17……97 ;
echo "<br>";
echo "<hr>

<?php
$n=100;

for($i=1;$i<=$n;$i=$i+2){
    echo $i;
    echo ',';
}
echo "<hr>";

for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo ',';
}

echo "<hr>";
$a=4;

$flag=true;
for($i=2;$i<=($a/2);$i++){
    echo "$a 除以 $i 餘數 ".($a % $i);
    if(($a % $i) == 0){
        $flag=false;
        echo "<br>";
        break;
    }
    echo "<br>";
}
if($flag==true){
    echo $a . '是質數';
}else{
    echo $a . '不是質數';
}
?>

<h3>陣列</h3>
<?php
$a=['甲','乙','丙','丁','戊'];
// for($i=0;$i<4;$i++){
for($i=0;$i<count($a);$i++){
    echo $a[$i];
}

echo "<br>";
// foreach($a as $b){
foreach($a as $idx => $b){
    echo $idx ."=>".$b;
    echo "<br>";
}

?>