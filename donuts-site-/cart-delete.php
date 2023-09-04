<?php require 'includes/header.php' ?>


<div class="menu_ber">
  <div class="gest_name">
    <!-- 後に名前入力 「ようこそ{$name}様」 -->
    <?php ?>
    <a href="index.php">TOP</a><span>></span>カート
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

<?php
if (isset($_SESSION['product'])) {
  unset($_SESSION['product']);
  echo '<div class="login_inner">';
  echo '<div class="outline">';
  echo '<P class="input_name">カートを空にしました。</p>';
  echo '</div>';
  echo '</div>';
}else{
  echo '<p class="cart_null">カートは空です。</p>';
} 


?>


<?php require 'includes/footer.php' ?>