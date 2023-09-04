<?php require 'includes/header.php' ?>


<div class="menu_ber">

  <div class="gest_name">
    <?php if (isset($_SESSION['customer'])) {
      echo 'ようこそ　', $_SESSION['customer']['name'], '　様';
    } else {
      echo 'ようこそ　ゲスト様';
    }
    ?>
  </div>

</div>

<main class="customer_wrapper customer_fm">

  <div class="title">
    入力確認
  </div>

  <div class="customer_fm_inner">

    <?php
    $pdo = new PDO(
      'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yomichi0329_donuts;charset=utf8',
      'yomichi0329_cca',
      'ccadonuts'
    );
    echo '<div class="customer_inner">';
    // ↓入力値チェック
    $sql = $pdo->prepare('insert into customer values(null, ?, ?, ?, ?, ?, ?)');
    if (isset($_SESSION['customer'])) {
      $name = $_SESSION['customer']['name'];
      $kana = $_SESSION['customer']['kana'];
      $post_code = $_SESSION['customer']['post_code'];
      $address = $_SESSION['customer']['address'];
      $mail = $_SESSION['customer']['mail'];
      $password = $_SESSION['customer']['password'];
    }
    mb_convert_kana($_REQUEST['post_code'], 'a', 'UTF-8');

    // ↓名前
    if (empty(htmlspecialchars($_REQUEST['name']))) {
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_name">お名前を入力してください。</P>';
      echo '</div>';
    }   // ↓フリガナ
    elseif (empty(htmlspecialchars($_REQUEST['kana']))) {
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_name">フリガナを入力してください。</P>';
      echo '</div>';
    } // ↓郵便番号
    elseif (!preg_match('/^[0-9]{3}-[0-9]{4}$/', $_REQUEST['post_code'])) {
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_name">郵便番号を入力してください</P>';
      echo '<p class="input_name">半角で入力してください。</P>';
      echo '<p class="input_name">半角ハイフンを入れてください。</P>';
      echo '</div>';
    }
    // ↓住所
    elseif (empty(htmlspecialchars($_REQUEST['address']))) {
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_name">住所を入力してください。</P>';
      echo '</div>';
    } // ↓mail
    elseif (empty($_REQUEST['mail'])) {
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_name">メールアドレスを入力してください。</P>';
      echo '</div>';
    } // ↓パスワード
    elseif (!preg_match('/\A(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[a-zA-Z\d]{8,}+\z/', $_REQUEST['password'])) {
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_name">パスワードを入力してください。</P>';
      echo '<p class="input_name">A-Z、a-z、0-9を少なくとも各1つは含めて8文字以上で入力してください。</P>';
      echo '</div>';
    }


    //↓全部チェックOK出来た時
    else {
      echo '<div class="customer_inner">';
      echo '<form action="customer-complete.php" method="post">';
      echo '<div class="input_item">';
      echo '<div class="input_name">お名前</div>';
      echo '<input type="text" name="name" class="input_ok" value="', mb_convert_kana($_REQUEST['name'], "s"), '">';
      echo '</div>';

      echo '<div class="input_item">';
      echo '<div class="input_name">お名前（フリガナ）</div>';
      echo '<input type="text" name="kana" class="input_ok" value="', mb_convert_kana($_REQUEST['kana'], "sK"), '">';
      echo '</div>';


      echo '<div class="input_item">';
      echo '<div class="input_name">郵便番号</div>';
      echo '<input type="text" name="post_code" class="input_ok" value="', mb_convert_kana($_REQUEST['post_code'], "nr"), '">';
      echo '</div>';


      echo '<div class="input_item">';
      echo '<div class="input_name">住所</div>';
      echo '<input type="text" name="address" class="input_ok" value="', mb_convert_kana($_REQUEST['address'], "snr"), '">';
      echo '</div>';


      echo '<div class="input_item">';
      echo '<div class="input_name">メールアドレス</div>';
      echo '<input type="text" name="mail" class="input_ok" value="', mb_convert_kana($_REQUEST['mail'], "nr"), '">';
      echo '</div>';


      echo '<div class="input_item">';
      echo '<div class="input_name">パスワード</div>';
      echo '<input type="password" name="password" class="input_ok" value="', mb_convert_kana($_REQUEST['password'], "nr"), '">';
      echo '</div>';


      echo '<button class="login_btn customer_btn">';
      echo '<input type="submit" value="この内容で登録する">';
      echo '</button>';
      echo '</form>';
      echo '</div>';
    }
    ?>






</main>


















<?php require 'includes/footer.php' ?>