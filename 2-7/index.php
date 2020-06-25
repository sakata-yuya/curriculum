<?php
$countries = ["America", "Japan", "China", "Korea"];

echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3];

echo "<br>";
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];

// りんごを出力
echo $fruits["apple"];
// みかんを出力
echo $fruits["orange"];
// ぶどうを出力
echo $fruits["grape"];
$fruits["peach"] = "もも";

var_dump($fruits);

echo "<br>";
$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($colors);

echo "<br>";
$colors["yellow"] = "黄色";
var_dump($colors);


echo "<br>";
echo "1.プルリクエスト"."<br>";
echo "開発者のローカルリポジトリで加えた変更を、他の開発者に知らせ、レビューしてもらう機能"."<br>";
echo "2.Git Flow"."<br>";
echo "チームで Git を使う際に役立つ、運用ルールをまとめたツール"."<br>";
echo "3.CRON"."<br>";
echo "利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるもの"."<br>";
?>