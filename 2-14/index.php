<?php
$colors = ["red", "blue", "green", "yellow"];
echo count($colors);

echo "<br>";
$colors = ["red", "blue", "green", "yellow"];
sort($colors);
var_dump($colors);

echo "<br>";
if (in_array("blue",$colors)) {
    echo "青がある";
} else {
    echo "青がない";
}

echo "<br>";
$atstr = implode("@", $colors);
var_dump ($atstr);

$re_members = explode("@",$atstr);
var_dump ($re_members);

echo "<br>";
echo "1.要件定義"."<br>";
echo "発注したユーザーの希望、要望を明らかにし、実装すべき機能や性能を明文化すること"."<br>";
echo "2.単体テスト・結合テスト"."<br>";
echo "プログラムを構成する比較的小さな単位（ユニット）が個々の機能を正しく果たしているかどうかを検証するテスト・プログラムが全体として正しく動作しているかを検証する結合テスト"."<br>";
echo "３．テスト仕様書"."<br>";
echo "システムやソフトウェアが、要件定義書の通りに機能するかどうかテストするポイントをまとめたもの"."<br>";



?>