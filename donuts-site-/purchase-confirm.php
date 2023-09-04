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
<main>
  
</main>

<?php require 'includes/footer.php' ?>