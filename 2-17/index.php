<?php

date_default_timezone_set('Asia/Tokyo');
$date=date ("H");
if (8 > $date) {
    echo "今",$date,"時台です<br>";
    echo "おはようございます";
} elseif (15 > $date) {
    echo "今",$date,"時台です<br>";
    echo "こんにちは";
} else {
    echo "今",$date,"時台です<br>";
    echo "こんばんは";
}

echo"<br>";

$sum =0;
for ($i=1; $sum<40; $i++) {
    $sai = mt_rand(1,6);
    $sum = $sum + $sai;
    echo $i,"回目 =",$sai,"<br>";      
}
echo "合計",$i-1,"回でゴールしました";


?>