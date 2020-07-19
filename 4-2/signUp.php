<?php
require_once ('db_connect.php');
// セッション開始

include_once("db_connect.php");

// エラーメッセージ、登録完了メッセージの初期化
$errorMessage = "";
$signUpMessage = "";

// セッション開始


// ログインボタンが押された場合
if (isset($_POST["signUp"])) {
    // 1. ユーザIDの入力チェック
    if (empty($_POST)) {  // 値が空のとき
        $errorMessage = 'ユーザーIDが未入力です。';
    } else if (empty($_POST["password"])) {
        $errorMessage = 'パスワードが未入力です。';
    } 

    if (!empty($_POST["name"]) && !empty($_POST["password"])) {
        // 入力したユーザIDとパスワードを格納
        $username = $_POST["name"];
        $password = $_POST["password"];
        

        // 2. ユーザIDとパスワードが入力されていたら認証する
        $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);

        // 3. エラー処理
        
        try {
            $pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $stmt = $pdo->prepare("INSERT INTO users(name, password) VALUES (?, ?)");
            $stmt->bindParam('?',$user);
            $stmt->bindParam('?',$pass);
            $password_hash= password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindValue(':password',$password_hash);
            $stmt->execute(array($username, $password_hash)); 

            $signUpMessage = '登録が完了しました';  
        } catch (PDOException $e) {
            $errorMessage = 'データベースエラー';
            // $e->getMessage() でエラー内容を参照可能（デバック時のみ表示）
            echo $e->getMessage();
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
    <h1>ユーザー登録画面</h1>
    <form method="POST" action="">
        <div><font color="#ff0000"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></font></div>
        <div><font color="#0000ff"><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></font></div>
        
        <input type="text" placeholder="ユーザー名" name="name" id="name">
        <br>    
        <input type="password" placeholder="パスワード" name="password" id="password">
        <br>
        <input type="submit" value="新規登録" id="signUp" name="signUp">
    </form>
</body>
</html>