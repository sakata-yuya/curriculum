<?php
$age = 18;

if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
}
echo "<br>";

// 学生かどうか
$is_student = true;
if ($is_student) {
    echo 'あなたは学生です。';
}

echo "<br>";
// 年齢
$age = 24;
// 学生かどうか
$is_student = true;

if ($age < 25 && $is_student) {
    echo '学割パックが使えるよ';
} elseif ($age < 25) {
    echo '若者応援割引が使えるよ';
}

echo "<br>";
// 例として、血液型を診断する条件分岐
$blood = 'B';
if($blood == 'A') {
  echo "A型です";
} elseif($blood == 'B') {
  echo "B型です";
} elseif($blood == 'O') {
  echo "O型です";
} elseif($blood == 'AB') {
  echo "AB型です";
 } else {
  echo "A/B/O/ABから選択してください";
}


echo "<br>";
$name = "";

if ($name != "") {
    echo '名前を受け付けました';
} else {
    echo '名前を入力してください';
}
echo "<br>";

$name = "";

echo ($name != "") ? '名前を受け付けました' : '名前を入力してください';

echo "<br>";

$name = "taro";
$pass = "pass";

if($name=="taro"&&$pass =="pass") {
    echo "ログイン成功です";
} elseif ($name=="taro"&&$pass != "pass") {
    echo "パスワードが間違っています。";
} elseif ($name != "taro"&&$pass=="pass") {
    echo "名前が間違っています。";
} else {
    echo "入力情報が間違っています。";
}

echo "<br>";
echo "1.IDE"."<br>";
echo "プログラム開発ツールをひとまとめにした開発環境"."<br>";
echo "2.JOIN"."<br>";
echo "複数のテーブルを結合して一つにすること"."<br>";
echo "3.コンフリクト"."<br>";
echo "複数の装置やプログラムなどが同じ資源を同時に利用しようとして競合状態になってしまうこと"."<br>";
?> 