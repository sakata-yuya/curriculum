<form action="result.php" method="post">
    私の名前：<input type="text" name="my_name" />
    <br>
    パスワード：<input type="password" name="password" />
    <br>
    性別：
<input type="radio" name="sex" value="男性">男性
<input type="radio" name="sex" value="女性">女性
<br>
  <input type="hidden" name="hidden_param" value="隠しパラメータから" />
  年齢：
<select name="age">
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
</select>
  <input type="submit" value="送信するよ！" />
</form>

<form action="result.php" method="post">
    お名前：<input type="text" name="my_name2" />
    <br>
    ご希望商品：<input type="radio" name="kibo" value="A賞">A賞
                <input type="radio" name="kibo" value="B賞">B賞
                <input type="radio" name="kibo" value="C賞">C賞
    <br>
    個数：
    <select name="number">
  <?php for ($i=1;$i<=10;$i++){ ?>
    <option value="<?php echo $i; ?>">
      <?php echo $i; ?>
    </option>
  <?php } ?>
    </select>
    <br>
    <input type="submit" value="申込">
</form>

<?php
echo "<br>";
echo "1.モジュール"."<br>";
echo "機器やシステムの一部を構成するひとまとまりの機能を持った部品"."<br>";
echo "2.バージョン管理システム"."<br>";
echo "コンピュータ上で作成および編集されるファイルの変更履歴を管理するためのシステム"."<br>";
echo "3.サブクエリ"."<br>";
echo "SQLステートメントの内部に入れ子状態で入っているSQL文（クエリ）のこと"."<br>";
?>
