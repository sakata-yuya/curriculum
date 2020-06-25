<?php
function getTriangleArea($base, $height) {
    $area = $base * $height / 2;
    print "三角形の面積は".$area."だよ。";
}

// 1)
getTriangleArea(10,5);
// 2)
getTriangleArea(15,8);
// 3)
getTriangleArea(8,6);
echo "<br>";

function getRectangular($vertical,$side,$height) {
    $volume = $vertical * $side * $height;
    print $volume;
}

getRectangular(5,10,8);

echo "<br>";
echo "1.ハッシュ化"."<br>";
echo "元のデータから一定の計算手順に従ってハッシュ値と呼ばれる規則性のない固定長の値を求め、その値によって元のデータを置き換えること"."<br>";
echo "2.総合テスト"."<br>";
echo "構築したシステムが全体で予定通りの機能を満たしているか、また機能や性能が仕様書通りに構築できているかを検証すること"."<br>";
echo "3.デバック"."<br>";
echo "コンピュータプログラムや電気機器中のバグ・欠陥を発見および修正し、動作を仕様通りのものとするための作業"."<br>";
?>