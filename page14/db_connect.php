<?php
$servername = "localhost"; // 通常は 'localhost' です
$username = "root"; // XAMPPのデフォルトのユーザー名は 'root' です
$password = ""; // デフォルトのパスワードは空です
$dbname = "php_progate_page14"; // 自分のデータベース名に置き換えてください

// 接続の作成
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続をチェック
if ($conn->connect_error) {
    die("接続に失敗しました: " . $conn->connect_error);
}
echo "接続に成功しました";
?>
