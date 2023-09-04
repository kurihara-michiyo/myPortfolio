<?php require 'includes/header.php' ?>


<div class="menu_ber detail_ber">
  <div class="gest_name">
    <!-- 選択したドーナツ名前 -->
    <?php ?>
    <a href="index.php">TOP</a><span>></span><a href="product.php">商品一覧</a>>
    <?php
    $pdo = new PDO(
      'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yomichi0329_donuts;charset=utf8',
      'yomichi0329_cca',
      'ccadonuts'
    );

    $sql = $pdo->query('select * from product where id ="' . $_REQUEST["id"] . '"');

    foreach ($sql as $row) {
      echo '<span class="ber_name">', $row['name'], '</span>';
    }    ?>
  </div>

  <div class="gest_name">
    <?php if (isset($_SESSION['customer'])) {
      echo 'ようこそ　', $_SESSION['customer']['name'], '　様';
    } else {
      echo 'ようこそ　ゲスト様';
    }
    ?>
  </div>

</div>


<section>

  <?php
  $pdo = new PDO(
    'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yomichi0329_donuts;charset=utf8',
    'yomichi0329_cca',
    'ccadonuts'
  );

  // ↓受け取ったidをレコードに当てはめ
  $sql = $pdo->query('select * from product where id ="' . $_REQUEST["id"] . '"');

  foreach ($sql as $row) {
    echo '<div class="donuts_list">';
    echo '<p class="item_img"><img alt="image" src="', $row['image'], '"></p>';
    echo '<form action="cart-show.php" method="post">';
    echo '<p class="menu-item-name">', $row['name'], '</p>';
    echo '<p class="item_text">', $row['description'], '</p>';
    echo '<p class="price">税込 ¥', number_format($row['price']), '</p>';

    echo '<div class="donuts_item">';
    echo '<input size="1" value="" name="count">', '個';
    echo '<button type="submit" value="" class="cart_btn">カートに入れる</button>';
    echo '</div>';

    echo '<input type="hidden" name="id" value="', $row['id'], '">';
    echo '<input type="hidden" name="name" value="', $row['name'], '">';
    echo '<input type="hidden" name="price" value="', $row['price'], '">';
    echo '<input type="hidden" name="image" value="', $row['image'], '">';
    echo '</form>';
    echo '</div>';
  }
  ?>



</section>



<?php require 'includes/footer.php' ?>