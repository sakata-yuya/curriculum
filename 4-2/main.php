<?php
// セッション開始
session_start();
// セッションにuser_nameの値がなければlogin.phpにリダイレクト
if (empty($_SESSION["user_name"])) {
    header("Location: login.php");
    exit;
}

require_once('db_connect.php');
require_once('function.php');


?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
    <h1>在庫一覧画面</h1>
    <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p>
    <button onclick="location.href='create_post.php'">新規登録</button>
    <button onclick="location.href='logout.php'">ログアウト</button>

<?php
$sql = "SELECT * FROM books";
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>
<table>
    <tr>
        <td>タイトル</td>
        <td>発売日</td>
        <td>在庫数</td>
        <td></td>
    </tr>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td><button onclick="location.href='delete_post.php?id=<?php echo $row['id']; ?>'">削除</button></td>
        </tr>
    <?php } ?>
</table>
<?php   
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>
</body>
</html>