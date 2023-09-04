<?php require 'includes/header.php' ?>

<div class="menu_ber">
  <div class="gest_name">
    <?php 
      echo 'ようこそ　ゲスト様';
     ?>
  </div>



  <main class="login_wrapper ok_login logout_wrapper">

    <div class="title">
      ログアウト完了
    </div>


    <?php
    if (isset($_SESSION['customer'])) {
      unset($_SESSION['customer']);
      echo '<div class="login_inner">';
      echo '<div class="outline">';
      echo '<P class="input_name">ログアウトが完了しました。</p>';
      echo '</div>';
      echo '</div>';
    } else {
      echo '<div class="login_inner">';
      echo '<div class="outline">';
      echo '<P class="input_name">すでにログアウトしています。</p>';
      echo '</div>';
      echo '</div>';
    }
    ?>


    <div class="new_login ok_new">
      <a href="index.php" class="new_text">
        TOPページへ戻る
      </a>
    </div>


  </main>

  <?php require 'includes/footer.php' ?>