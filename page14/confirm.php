<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <?php $totalPayment = 0 ?>
    
    <?php foreach ($menus as $menu): ?>
      <?php 
        $inputOrderCount = $_POST[$menu->getName()];
        $menu->setOrderCount($inputOrderCount);
        $totalPayment += $menu->getTotalPrice();
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $menu->getOrderCount() ?>
        個
      </p>
      <p class="order-price"><?php echo $menu->getTotalPrice() ?>円</p>
    <?php endforeach ?>
    <h3>合計金額: <?php echo $totalPayment ?>円</h3>
  </div>
  <?php
include 'db_connect.php'; // データベース接続ファイルのインクルード

// 注文ボタンの追加
echo '<form method="post" action="confirm.php">';
echo '<input type="hidden" name="menu_id" value="1">'; // メニューIDを設定（動的に変更する場合は変数を利用）
echo '<input type="hidden" name="quantity" value="2">'; // 数量を設定
echo '<input type="hidden" name="total_price" value="1000">'; // 合計金額を設定
echo '<input type="submit" name="submit_order" value="注文する">';
echo '</form>';

// 「注文する」ボタンが押された場合の処理
if (isset($_POST['submit_order'])) {
    $menu_id = $_POST['menu_id'];
    $quantity = $_POST['quantity'];
    $total_price = $_POST['total_price'];
    $order_date = date('Y-m-d H:i:s'); // 現在の日時を取得

    // 注文情報の挿入
    $sql = "INSERT INTO orders (menu_id, quantity, total_price, order_date)
            VALUES ('$menu_id', '$quantity', '$total_price', '$order_date')";

    if ($conn->query($sql) === TRUE) {
        echo "注文が確定されました！";
    } else {
        echo "注文に失敗しました: " . $conn->error;
    }

    $conn->close();
}
?>

</body>
</html>