<?php require 'includes/header.php' ?>


<main>

  <div class="gest_name">
    <?php if (isset($_SESSION['customer'])) {
      echo 'ようこそ　', $_SESSION['customer']['name'], '　様';
    } else {
      echo 'ようこそ　ゲスト様';
    }
    ?>
  </div>

  <div class="mv">
  </div>

  <section class="select_menu">

    <div class="select_item">
      <img src="common/images/sp_img/sp_new.jpg" alt="新商品">
    </div>
    <div class="select_item">
      <img src="common/images/sp_img/sp_menuimg_donuts.jpg" alt="ドーナツのある暮らし">
    </div>
    <div class="select_item">
      <a href="product.php"><img src="common/images/sp_img/sp_donuts_menu.jpg" alt="商品一覧"></a>
    </div>

  </section>

  <section class="image_section">
    <div class="Philosophy"></div>
  </section>


  <section class="ranking">

    <div class="title">
      人気ランキング
    </div>

    <div class="menu-items">
      <?php
      $pdo = new PDO(
        'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yomichi0329_donuts;charset=utf8',
        'yomichi0329_cca',
        'ccadonuts'
      );
      // $ranking = $pdo->query('select * from ranking');
      // $sql = $pdo->query('select * from ranking');

      // ↓puroductから結び付けるの諦めた残骸たち
      // $ranking01 = $sql->bindParam('id', $data['1']);
      // $ranking02 = $sql->bindParam('id', $data['8']);
      // $ranking03 = $sql->bindParam('id', $data['9']);
      // $ranking04 = $sql->bindParam('id', $data['2']);
      // $ranking05 = $sql->bindParam('id', $data['10']);
      // $ranking06 = $sql->bindParam('id', $data['7']);


      $ranking01 = $pdo->query('select * from product where id = 1');
      $ranking02 = $pdo->query('select * from product where id = 7');
      $ranking03 = $pdo->query('select * from product where id = 8');
      $ranking04 = $pdo->query('select * from product where id = 2');
      $ranking05 = $pdo->query('select * from product where id = 9');
      $ranking06 = $pdo->query('select * from product where id = 6');

      // 生かせず↓
      // $rankings = array(
      //   $ranking01, $ranking02, $ranking03, $ranking04, $ranking05, $ranking06
      // );

      foreach ($ranking01 as $row) : ?>
        <form action="cart-show.php" method="post">
          <div class="menu-item">
            <a href="detail.php?id=<?php echo $row['id'] ?>">
              <div class="cube no-1">1</div>
              <img src="<?php echo $row['image'] ?>" class="menu-item-image">
              <h3 class="menu-item-name"><?php echo $row['name'] ?></h3>
            </a>
            <p class="price">税込 ¥<?php echo number_format($row['price']) ?></p>
            <button type="submit" name="count" value="1" class="cart_btn">
              カートに入れる
            </button>
          </div>
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
          <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
          <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
          <input type="hidden" name="image" value="<?php echo $row['image'] ?>">
        </form>
      <?php endforeach ?>

      <?php foreach ($ranking02 as $row) : ?>
        <form method="post" action="cart-show.php">
          <div class="menu-item">
            <a href="detail.php?id=<?php echo $row['id'] ?>">
              <div class="cube no-2">2</div>
              <img src="<?php echo $row['image'] ?>" class="menu-item-image">
              <h3 class="menu-item-name"><?php echo $row['name'] ?></h3>
            </a>
            <p class="price">税込 ¥<?php echo number_format($row['price']) ?></p>

            <button type="submit" name="count" value="1" class="cart_btn">
              カートに入れる
            </button>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
            <input type="hidden" name="image" value="<?php echo $row['image'] ?>">
          </div>
        </form>
      <?php endforeach ?>

      <?php foreach ($ranking03 as $row) : ?>
        <form method="post" action="cart-show.php">
          <div class="menu-item">
            <a href="detail.php?id=<?php echo $row['id'] ?>">
              <div class="cube no-3">3</div>
              <img src="<?php echo $row['image'] ?>" class="menu-item-image">
              <h3 class="menu-item-name"><?php echo $row['name'] ?></h3>
            </a>
            <p class="price">税込 ¥<?php echo number_format($row['price']) ?></p>

            <button type="submit" name="count" value="1" class="cart_btn">
              カートに入れる
            </button>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
            <input type="hidden" name="image" value="<?php echo $row['image'] ?>">

          </div>
        </form>
      <?php endforeach ?>

      <?php foreach ($ranking04 as $row) : ?>
        <form method="post" action="cart-show.php">

          <div class="menu-item">
            <a href="detail.php?id=<?php echo $row['id'] ?>">
              <div class="cube">4</div>
              <img src="<?php echo $row['image'] ?>" class="menu-item-image">
              <h3 class="menu-item-name"><?php echo $row['name'] ?></h3>
            </a>
            <p class="price">税込 ¥<?php echo number_format($row['price']) ?></p>

            <button type="submit" name="count" value="1" class="cart_btn">
              カートに入れる
            </button>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
            <input type="hidden" name="image" value="<?php echo $row['image'] ?>">

          </div>
        </form>
      <?php endforeach ?>

      <?php foreach ($ranking05 as $row) : ?>
        <form method="post" action="cart-show.php">

          <div class="menu-item">
            <a href="detail.php?id=<?php echo $row['id'] ?>">
              <div class="cube">5</div>
              <img src="<?php echo $row['image'] ?>" class="menu-item-image">
              <h3 class="menu-item-name"><?php echo $row['name'] ?></h3>
            </a>
            <p class="price">税込 ¥<?php echo number_format($row['price']) ?></p>

            <button type="submit" name="count" value="1" class="cart_btn">
              カートに入れる
            </button>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
            <input type="hidden" name="image" value="<?php echo $row['image'] ?>">

          </div>
        </form>
      <?php endforeach ?>

      <?php foreach ($ranking06 as $row) : ?>
        <form method="post" action="cart-show.php">

          <div class="menu-item">
            <a href="detail.php?id=<?php echo $row['id'] ?>">
              <div class="cube">6</div>
              <img src="<?php echo $row['image'] ?>" class="menu-item-image">
              <h3 class="menu-item-name"><?php echo $row['name'] ?></h3>
            </a>
            <p class="price">税込 ¥<?php echo number_format($row['price']) ?></p>

            <button type="submit" name="count" value="1" class="cart_btn">
              カートに入れる
            </button>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
            <input type="hidden" name="image" value="<?php echo $row['image'] ?>">

          </div>
        </form>
      <?php endforeach ?>



    </div>




  </section>





</main>


<?php require 'includes/footer.php' ?>