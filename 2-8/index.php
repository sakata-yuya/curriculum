<?php
$fruits = ["りんご", "みかん", "もも"];

foreach ($fruits as $value) {
    echo $value;
}
echo "<br>";

$fluits = ["apple"=>"りんご","orange"=>"みかん","peach"=>"もも"];

foreach($fluits as $key=>$value) {
    echo $key, "といったら";
    echo $value,"<br>";
}

echo "<br>";
echo "1.トランザクション"."<br>";
echo "関連する複数の処理や操作を一つの処理単位にまとめて管理する方式"."<br>";
echo "2.排他ロック"."<br>";
echo "データベースシステムなどで記憶領域への同時アクセスを制限するロック機構"."<br>";
echo "3.チューニング"."<br>";
echo "システムやプログラムなどを改良し、パフォーマンスの向上を図ること"."<br>";

?>