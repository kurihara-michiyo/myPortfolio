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

  <main class="login_wrapper ok_login">

    <?php
    unset($_SESSION['customer']);
    $pdo = new PDO(
      'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yomichi0329_donuts;charset=utf8',
      'yomichi0329_cca',
      'ccadonuts'
    );
    $sql = $pdo->prepare('select * from customer where mail=? and password=?');
    $sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
    foreach ($sql as $row) {
      $_SESSION['customer'] = [
        'id' => $row['id'], 'name' => $row['name'],
        'address' => $row['address'], 'kana' => $row['kana'],
        'post_code' => $row['post_code'], 'address' => $row['address'],
        'mail' => $row['mail'], 'password' => $row['password']
      ];
    }
    if (isset($_SESSION['customer'])) {
      echo '<div class="title">';
      echo 'ログイン完了';
      echo '</div>';

      echo '<div class="login_inner">';
      echo '<div class="outline">';
      echo '<P class="input_name">ログインが完了しました。</p>';
      echo '</div>';
      echo '</div>';
    } else {
      echo '<div class="login_inner">';
      echo '<div class="outline">';
      echo '<P class="input_name">ログイン名またはパスワードが違います。</p>';
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