<?php require 'includes/header.php' ?>


<div class="gest_name">
  <?php if (isset($_SESSION['customer'])) {
    echo 'ようこそ　', $_SESSION['customer']['name'], '　様';
  } else {
    echo 'ようこそ　ゲスト様';
  }
  ?>
</div>

<main class="complete_wrapper">

  <!-- <div class="title">
    会員登録完了
  </div> -->




  <?php
$pdo = new PDO(
  'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yomichi0329_donuts;charset=utf8',
  'yomichi0329_cca',
  'ccadonuts'
);
  $sql = $pdo->prepare('insert into customer values(null, ?, ?, ?, ?, ?, ?)');

  if (isset($_SESSION['customer'])) {
    $name = $_SESSION['customer']['name'];
    $kana = $_SESSION['customer']['kana'];
    $post_code = $_SESSION['customer']['post_code'];
    $address = $_SESSION['customer']['address'];
    $mail = $_SESSION['customer']['mail'];
    $password = $_SESSION['customer']['password'];
  }



  if (isset($_SESSION['customer'])) {
    $id = $_SESSION['customer']['id'];
    $sql = $pdo->prepare('select * from customer where id!=? and mail=?');
    $sql->execute([$id, $_REQUEST['mail']]);
  } else {
    $sql = $pdo->prepare('select * from customer where mail=?');
    $sql->execute([$_REQUEST['mail']]);
  }
  if (isset($_SESSION['customer'])) {
    $id = $_SESSION['customer']['id'];
    $sql = $pdo->prepare('select * from customer where id!=? and mail=?');
    $sql->execute([$id, $_REQUEST['mail']]);
  } else {
    $sql = $pdo->prepare('select * from customer where mail=?');
    $sql->execute([$_REQUEST['mail']]);
  }
  if (empty($sql->fetchAll())) {
    if (isset($_SESSION['customer'])) {
      $sql = $pdo->prepare('update customer set name=?, kana=?, ' .
        'post_code=?,address=?,mail=?, password=? where id=?');
      $sql->execute([
        $_REQUEST['name'], $_REQUEST['kana'],
        $_REQUEST['post_code'], $_REQUEST['address'], $_REQUEST['mail'],
        $_REQUEST['password'], $id
      ]);
      $_SESSION['customer'] = [
        'id' => $id, 'name' => $_REQUEST['name'], 'kana' => $_REQUEST['kana'],
        'post_code' => $_REQUEST['post_code'], 'address' => $_REQUEST['address'],
        'mail' => $_REQUEST['mail'], 'password' => $_REQUEST['password']
      ];

      echo '<div class="title">';
      echo '会員登録完了';
      echo '</div>';

      echo '<div class="login_inner">';
      echo '<div class="outline ok_cus">';
      echo '<p class="input_name">すでに登録されています。</P>';
      echo '<a href="login-input.php" class="new_text">ログイン画面へ進む</a>';
      echo '</div>';
      echo '</div>';
    } else {
      $sql = $pdo->prepare('insert into customer values(null,?,?,?,?,?,?)');
      $sql->execute([
        $_REQUEST['name'], $_REQUEST['kana'],
        $_REQUEST['post_code'], $_REQUEST['address'], $_REQUEST['mail'],
        $_REQUEST['password'],
      ]);


      echo '<div class="title">';
      echo '会員登録完了';
      echo '</div>';

      echo '<div class="login_inner">';
      echo '<div class="outline ok_cus">';
      echo '<p class="input_name">会員登録が完了しました。</P>';
      echo '<a href="login-input.php" class="new_text">ログイン画面へ進む</a>';
      echo '</div>';
      echo '</div>';
    }
  } else {

    echo '<div class="title">';
    echo '会員登録エラー';
    echo '</div>';


    echo '<div class="login_inner">';
    echo '<div class="outline ok_cus">';
    echo '<p class="input_name">すでに登録されているか、使用されています。</P>';
    echo '<a href="login-input.php" class="new_text">ログイン画面へ進む</a>';
    echo '</div>';
    echo '</div>';
  }

  ?>





</main>



<?php require 'includes/footer.php' ?>