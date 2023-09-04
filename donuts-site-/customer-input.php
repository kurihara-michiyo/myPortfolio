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

<main class="customer_wrapper">

  <div class="title">
    会員登録
  </div>




  <div class="customer_inner">
    <form action="customer-confirm.php" method="post">

      <?php

      // 配列初期化 空文字代入
      $name = $kana = $post_code = $address = $mail = $password = '';
      if (isset($_SESSION['customer'])) {
        $name = $_SESSION['customer']['name'];
        $kana = $_SESSION['customer']['kana'];
        $post_code = $_SESSION['customer']['post_code'];
        $address = $_SESSION['customer']['address'];
        $mail = $_SESSION['customer']['mail'];
        $password = $_SESSION['customer']['password'];
      }
      ?>

      <!-- ID -->

      <div class="input_item">
        <h3 class="input_name">
          お名前<span class="point">（必須）</span>
        </h3>
        <input type="text" name="name" class="login_input" value="">
      </div>

      <div class="input_item">
        <h3 class="input_name">
          お名前（フリガナ）<span class="point">（必須）</span>
        </h3>
        <input type="text" name="kana" class="login_input" value="">
      </div>

      <div class="input_item">
        <h3 class="input_name">
          郵便番号<span class="point">（必須）</span>
        </h3>
        <input type="text" name="post_code" class="login_input" value="">
      </div>

      <div class="input_item">
        <h3 class="input_name">
          住所<span class="point">（必須）</span>
        </h3>
        <input type="text" name="address" class="login_input" value="">
      </div>

      <div class="input_item">
        <h3 class="input_name">
          メールアドレス<span class="point">（必須）</span>
        </h3>
        <input type="text" name="mail" class="login_input" value="">
      </div>


      <div class="input_item">
        <h3 class="input_name">
          パスワード<span class="point">（必須）</span>
        </h3>
        <h4 class="input_name point">
          A-Z、a-z、0-9を少なくとも各1つは含めて8文字以上で入力してください。
        </h4>
        <input type="password" name="password" class="login_input" value="">
      </div>
      <button class="login_btn customer_btn">
        <input type="submit" value="入力内容を確認する">
      </button>
    </form>
  </div>




</main>





<?php require 'includes/footer.php' ?>