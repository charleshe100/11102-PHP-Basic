<h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
<?php
$year=2400;
echo "年份：".$year;
echo "<hr>";

if($year%4==0 && $year%100!=0){
    echo $year."是閏年";
}else{
    echo $year."是平年";

}
?>


<h2>ChartGPT</h2>
<?php
// 输入年份
$year = 2400; // 请将年份更改为您想要检查的年份

// 判断是否为闰年
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) { //把條件要判斷比較多的放在前面，判斷會比較快，前面是true，後面就不用判斷了
    echo $year . "年是閏年。"; // 如果符合闰年规则，输出是闰年
} else {
    echo $year . "年不是閏年。"; // 如果不符合闰年规则，输出不是闰年
}
?>






