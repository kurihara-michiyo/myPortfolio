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

  <main class="login_wrapper">

    <div class="title">
      ログイン
    </div>

    <div class="login_inner">
      <form action="login-output.php" method="post" class="outline">

        <div class="input_item">
          <h3 class="input_name">
            メールアドレス
          </h3>
          <input type="text" name="mail" class="login_input">
        </div>


        <div class="input_item">
          <h3 class="input_name">
            パスワード
          </h3>
          <input type="password" name="password" class="login_input">
        </div>
        <button class="login_btn">
          <input type="submit" value="ログインする">
        </button>
      </form>
    </div>

    <div class="new_login">
      <a href="customer-input.php" class="new_text">
        会員登録がお済みでない方はこちら
      </a>
    </div>


  </main>




  <?php require 'includes/footer.php' ?>