<?php

$score=55;

$score=$score+20; 
// 這裡執行的順序是$score=$score，然後再+20
echo "我的成績：" . $score;
echo"<br>";
echo "判斷為：";

if($score>=60){
    echo"及格";
}else{
    echo"不及格";
}

echo"<br>";
// 不論前面是否符合，都要跑5次
if($score>=90 && $score<=100){
    $level="A";
}
if($score>=80 && $score<=89){
    $level="B";
}
if($score>=70 && $score<=79){
    $level="C";
}
if($score>=60 && $score<=69){
    $level="D";
}
if($score>=0 && $score<=59){
    $level="E";
}

// 要跑1~5次，就當前面符合了，就會停止
if($score>=90 && $score<=100){
    $level="A";
}
else if($score>=80 && $score<=89){
    $level="B";
}
else if($score>=70 && $score<=79){
    $level="C";
}
else if($score>=60 && $score<=69){
    $level="D";
}
else if($score>=0 && $score<=59){
    $level="E";
}

// $level='A';

echo"成績等級為：" . $level;
echo"<br>";

switch ($level) {
    case"A":
    echo "表現優良，請繼續保持";
    break;
    case"B":
    echo "值得肯定，還有進步空間";
    break;
    case"C":
    echo "需要更多的練習";
    break;
    case"D":
    echo "需要加強基本功";
    break;
    default:
    echo"是否無心學業?";
}
?>