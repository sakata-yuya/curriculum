<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// 提出ボタンが押された場合
if (!empty($_POST)) {
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '日付が未入力です。';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未入力です。';
    }

    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
        
        $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
        $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
        $stock = htmlspecialchars($_POST['stock'], ENT_QUOTES);

        // PDOのインスタンスを取得
        $pdo = db_connect();

        try {
            // SQL文の準備
            $sql ="INSERT INTO books(title,date,stock) VALUES (:title,:date,:stock)";
            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            $stmt->bindParam(':title', $title);
            // 日付をバインド
            $stmt->bindParam(':date', $date);
            // 在庫数をバインド
            $stmt->bindParam(':stock', $stock);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            die();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>本 登録画面</h1>
    <form method="POST" action="">
        <br>
        <input type="text" placeholder="タイトル" name="title" id="title" style="width:200px;height:50px;">
        <br>
        <br>
        <input type="text" placeholder="発売日" name="date" id="date" style="width:200px;height:50px;"><br>
        <p>在庫数</p>
        <input type="number" placeholder="選択してください" name="stock" id="stock" style="width:200px;height:50px;"><br>
        <input type="submit" value="登録" id="post" name="post">
    </form>
</body>
</html>