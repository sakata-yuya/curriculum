<?php
for ($i =1;$i<=100; $i++) {
    if ($i % 3===0) {
        echo "Fizz!","<br>";
    } elseif ($i % 5===0) {
        echo "Buzz!","<br>";
    } elseif ($i % 3===0&&$i % 5===0) {
        echo "FizzBuzz!","<br>";
    } else {
        echo $i,"<br>";
    }
}

echo "<br>";
echo "1.パフォーマンス"."<br>";
echo "コンピュータなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・容量などのこと"."<br>";
echo "2.スロークエリ"."<br>";
echo "時間のかかっているSQL(遅いSQL)のこと"."<br>";
echo "3.クエリログ"."<br>";
echo "MySQL サーバが実行した全ての SQL クエリを出力するログ"."<br>";
?>