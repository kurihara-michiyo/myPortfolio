<?php
$pdo = new PDO(
  'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yomichi0329_donuts;charset=utf8',
  'yomichi0329_cca',
  'ccadonuts'
);


// if (!empty($_SESSION['product'])) {
$str = $pdo->query('select * from product where id="' . $_REQUEST['id'] . '" ');

$str = array(['id' => $_REQUEST['id'], 'name' => htmlspecialchars($_REQUEST['name']), 'price' => $_REQUEST['price'], 'image' => $_REQUEST['image'], 'count' => $_REQUEST['count']]);

foreach ($str as $row) {
  $_SESSION['product'] = [
    'id' => $row['id'], 'name' => $row['name'],
    'price' => $row['price'], 'image' => $row['image'],
    'count' => $row['count']
  ];
}

// if (isset($_SESSION['product'])) {
//   $id = $_SESSION['product']['id'];
//   $name = $_SESSION['product']['name'];
//   $price = $_SESSION['product']['price'];
//   $image = $_SESSION['product']['image'];
//   $count = $_SESSION['product']['count'];
// }

// 削除
function del()
{
  unset($_SESSION['product']);
}


// 確認用↓
// echo var_dump($_SESSION['product']);

// for ($i = 1; $i < 10; $i++) {  }
if (isset($_SESSION['product'])) {

  foreach ($str as $row) {
    // echo '<table>';
    // echo '<tr><th>', $row['name'], '</th>';
    // echo '<th>', $row['price'], '</th><th>', $row['count'], '</th><th>', $row['price'] * $row['count'], '</th><th></th></tr>';
    $total = 0;
    // echo '<tr>';
    // echo '<td><a href="detail.php?id=', $row['id'], '">',
    // $row['name'], '</a></td>';
    // echo '<td>', $row['price'], '</td>';
    // echo '<td>', $row['count'], '</td>';
    $subtotal = $row['price'] * $row['count'];
    $total += $subtotal;
    // echo '<td>', $subtotal, '</td>';
    // echo '<td><a href="cart-delete.php?id=', $row['id'], '">削除</a></td>';
    // echo '</tr>';
    // echo '<tr><td>合計</td><td></td><td></td><td></td><td>', $total,
    // '</td><td></td></tr>';
    // echo '</table>';

    echo '<div class="cart_item_inner">';
    echo '<div class="menu-item">';
    echo '<div class="menu-list_cart">';
    echo '<img src="', $row['image'], '"" class="menu-item-image">';
    echo '</div>';
    echo '<div class="menu-list_cart">';
    echo '<h3 class="menu-item-name">', $row['name'], '</h3>';
    echo '<p class="price">税込 ¥', number_format($row['price']), '</p>';
    echo '<h2 class="menu-count">数量　', $row['count'], '個</h2>';
    echo '<a href="" class="delete">', del(), '削除する</a>';
    echo '</div>';
    echo '</div>';
  }

  echo '<div class="outline cart_line"> ';
  echo '<div class="total_cush">合計金額：<span class="point">税込 ￥', number_format($total), '</span></div>';
  echo '<button type="submit" name="count" value="1" class="cart_show_btn"> 購入確認へ進む
';
  echo ' </button>';
  echo '</div>';


  echo '<div class="cart-btn"> ';
  echo '<button type="submit" name="count" value="1" class="cart_btn"><a href="product.php">買い物を続ける</a>
';
  echo ' </button>';
  echo '</div>';
} else {
  echo '<p class="cart_null">カートは空です。</p>';
}
