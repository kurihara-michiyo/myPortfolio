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

  <main class="login_wrapper logout_wrapper">

    <div class="title">
      ログインアウト
    </div>

    <div class="login_inner">
      <form action="logout-complete.php" method="post" class="outline">

        <div class="input_item logout_inner">
          <h3 class="input_name">
            ログアウトしますか？
          </h3>
          <input type="hidden" name="mail" class="login_input">
        </div>


        <button class="login_btn">
          <input type="submit" value="ログアウトする">
        </button>
      </form>

    </div>





  </main>





  <?php require 'includes/footer.php' ?>