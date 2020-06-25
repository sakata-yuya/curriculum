<?php

$num = 0; 
while($num < 10) {
    echo $num;
    $num++;
    if($num == 5) {
    break;
}
}

echo "<br>";
$num = 0; 
do {
    echo $num;
    $num++; 
} while($num < 10);

echo "<br>";
$i = 0; 
for($i=0 ; $i<10 ; $i++) { 
    echo $i;
}

echo "<br>";

for($i=1;$i<101;$i++) {
    echo $i ,"<br>";
}


echo "<br>";
echo "1.サブクエリ"."<br>";
echo "データベースなどの問い合わせ(クエリ)文の内部に含まれる、別の問い合わせ文のこと"."<br>";
echo "2.Bootstrap"."<br>";
echo "CSSのフレームワーク"."<br>";
echo "3.ライブラリ・フレームワーク"."<br>";
echo "汎用性の高い複数のプログラムを、再利用可能な形でひとまとまりにしたもの・大まかな雛形を用意することである特定の機能をもたせようとしたもの"."<br>";
?>