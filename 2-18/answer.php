<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name2 = $_POST['my_name2'];
$numbers = $_POST['numbers'];
$answer = $_POST['answer'];
$words = $_POST['words'];
$answer2 = $_POST['answer2'];
$comands = $_POST['comands'];
$answer3 = $_POST['answer3']
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
?>

<link rel="stylesheet" href="style.css">

<p><?php echo $my_name2; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($numbers===$answer) {
    echo "正解！";
} else {
    echo "残念・・・";
}
echo "<br>";
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($words===$answer2) {
    echo "正解！";
} else {
    echo "残念・・・";
}
echo "<br>";
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($comands===$answer3) {
    echo "正解！";
} else {
    echo "残念・・・";
}
echo "<br>";
?>