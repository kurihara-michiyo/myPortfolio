<?php require 'includes/header.php' ?>

<div class="menu_ber">
  <div class="gest_name">
    <!-- 後に名前入力 「ようこそ{$name}様」 -->
    <?php ?>
    <a href="index.php">TOP</a><span>></span>商品一覧
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


<main class="product_donuts_wrapper">

  <section class="product_donuts">

    <div class="title">
      商品一覧
    </div>

    <div class="main_donuts">
      <div class="main_title">
        メインメニュー
      </div>

      <!-- 商品一覧の雛型 -->
      <form method="post" action="detail.php">
        <div class="menu-items main_menu-item">
          <?php
          $pdo = new PDO(
            'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yomichi0329_donuts;charset=utf8',
            'yomichi0329_cca',
            'ccadonuts'
          );
          $sql = $pdo->query('select * from product');
          $main = $pdo->query('select * from product where id <= 6');
          $var = $pdo->query('select * from product where id > 6');

          foreach ($main as $row) : ?>
            <div class="menu-item">
              <a href="detail.php?id=<?php echo $row['id'] ?>">

                <img src="<?php echo $row['image'] ?>" class="menu-item-image">
                <h3 class="menu-item-name"><?php echo $row['name'] ?></h3>
                <p class="price">税込 ¥<?php echo number_format($row['price']) ?></p>
              </a>

              <button type="submit" value="" class="cart_btn">
                <a href="cart-show.php?id=<?php echo $row['id'] ?>">
                  カートに入れる
                </a>
              </button>
            </div>
          <?php endforeach ?>
        </div>


        <div class="main_title variety">
          バラエティセット
        </div>

        <div class="menu-items main_menu-item">
          <?php foreach ($var as $row) : ?>
            <div class="menu-item">
              <a href="detail.php?id=<?php echo $row['id'] ?>">
                <img src="<?php echo $row['image'] ?>" class="menu-item-image">
                <h3 class="menu-item-name"><?php echo $row['name'] ?></h3>
                <p class="price">税込 ¥<?php echo number_format($row['price']) ?></p>
              </a>
              <button type="submit" value="0" class="cart_btn">
                <a href="cart-show.php?id=<?php echo $row['id'] ?>">
                  カートに入れる
                </a>
              </button>
            </div>
          <?php endforeach ?>
        </div>


      </form>


    </div>

  </section>




</main>



<?php require 'includes/footer.php' ?>