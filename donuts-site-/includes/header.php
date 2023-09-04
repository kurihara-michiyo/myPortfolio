<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="common/images/pc_img/pc_dorowa_logo.svg">
  <title>C.C.docunts</title>
  <link rel="stylesheet" href="common/css/destyle.css">
  <link rel="stylesheet" href="common/css/base.css">
  <link rel="stylesheet" href="common/css/home.css">
  <link rel="stylesheet" href="common/css/sub.css">
</head>

<body>

  <!-- ハンバーガーメニュー内 -->
  <div class="hamburger">

    <div class="menu_logo">
      <a href="index.php"><img src="common/images/sp_img/sp_logo.svg" alt="CCdonutsロゴ"></a>
    </div>


    <nav>
      <ul>
        <li>
          <a href="index.php">TOP</a>
        </li>
        <li>
          <a href="product.php">商品一覧</a>
        </li>
        <li>
          <a href="">よくある質問</a>
        </li>
        <li>
          <a href="">問い合わせ</a>
        </li>
        <li>
          <a href="">当サイトのポリシー</a>
        </li>
        <li>
          <a href="logout-input.php">ログアウト</a>
        </li>
      </ul>
    </nav>

  </div>


  <header>

    <!-- ハンバーガーメニュー -->
    <div class="menu_button">
      <div class="openbtn1">
        <span></span><span></span><span></span>
      </div>


    </div>

    <div class="nav_logo">
      <a href="index.php"><img src="common/images/sp_img/sp_logo.svg" alt=""></a>
    </div>


    <div class="cart_logo">
      <button class="login">
        <a href="login-input.php"><img src="common\images\sp_img\sp_icon-login.svg" alt="ログイン"></a>
      </button>
      <button class="cart">
        <a href="cart-show.php"><img src="common\images\sp_img\sp_icon-cart.svg" alt="カート"></a>
      </button>
    </div>


  </header>