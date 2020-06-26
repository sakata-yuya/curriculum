<?php
$x = 8.2;
echo ceil($x);
echo floor($x);
echo round($x);
echo "<br>";

echo pi();
function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
circleArea(5);

echo "<br>";
echo mt_rand(1,1000);

echo"<br>";
$str = "comic";
echo strlen($str);

echo "<br>";
$str = "kanagawa";
echo strpos($str, "a");

echo "<br>";
$str = "kanagawa";
echo substr($str, -3, 2);

echo "<br>";
$str = "kanagawa";
echo str_replace("naga", "NAGA", $str);

echo "<br>";
$name = "sakataさん";
$limit_number = 20;
printf("%sはあと%d時間で、終了", $name, $limit_number);
$limit_time = sprintf("%sはあと%d時間で、終了", $name, $limit_number);
echo $limit_time;

echo "<br>";
echo "1.PostgreSQL・Oracle SQL"."<br>";
echo "オープンソースのリレーショナルデータベース管理システム・米国オラクル が開発・販売している、関係データベース管理システム"."<br>";
echo "2.TortoiseGit・TortoiseSVN"."<br>";
echo "分散バージョン管理「Git(ギット)」のGUIクライアント・集中型バージョン管理システム「Subversion(SVN)」のWindows用GUIソフト"."<br>";
echo "3.外部設計・内部設計"."<br>";
echo "要件から、システムの仕様を決定する・プログラミングしてシステムを実現するために、処理方法や定義などの内部機能を定める"."<br>";
?>