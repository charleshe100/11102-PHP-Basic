<h2>九九乘法表</h2>
<style>
    table,tr,td{
        border-collapse: collapse;
        border: 1px solid black;        
    }
    tr,td{
        padding: 3px 9px;
    }
</style>

<?php
echo "<table>";
for ($j=1;$j<=9;$j++){
    echo "<tr>";    
    for ($i=1;$i<=9;$i++){
        echo "<td>";
        echo $j.'x'.$i.'='.($j*$i);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<hr>
<h2>九九乘法表-有標頭</h2>
<?php
echo "<table>";
echo "<tr>";

for ($j=0;$j<10;$j++){
    if($j==0){
    echo "<tr style='background:#eee'>";
    }else{
        echo"<tr>";
    }

    for ($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#eee'>";
            }else{
        echo "<td>";
            }
        if($j==0 && $i==0){
            echo"";
        }else if($j==0){
            echo$i;
        }else if($i==0){
            echo$j;
        }else{        
            echo $j*$i;
        echo "</td>";
            }        
    
}
    echo "</tr>";
}
echo "</table>";
?>
<hr>

<h2>九九乘法表-三角</h2>
<?php
echo "<table>";
echo "<tr>";

for ($j=0;$j<10;$j++){
    if($j==0){
    echo "<tr style='background:#eee'>";
    }else{
        echo"<tr>";
    }

    for ($i=0;$i<10;$i++){
        if($i==0){
            echo "<td style='background:#eee'>";
            }else{
        echo "<td>";
            }
        if($j==0 && $i==0){
            echo"";
        }else if($j==0){
            echo$i;
        }else if($i==0){
            echo$j;
        }else if($j<$i){
            echo"";
        }else{        
            echo $j*$i;
        echo "</td>";
            }        
    
}
    echo "</tr>";
}
echo "</table>";
?>