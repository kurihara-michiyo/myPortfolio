<?php require 'includes/header.php' ?>
<!-- エラー非表示 -->
<?php
// error_reporting(0);
?>

<main class="customer_inner">

  <div class="form_inner">

    <div class="form_title_area" id="customer">

      <?php

      $customer = [
        'name' => $_REQUEST['name'],
        'kana' => $_REQUEST['kana'],
        'tel' => $_REQUEST['tel'],
        'mail' => $_REQUEST['mail'],
        'day' => $_REQUEST['day'],
        'time' => $_REQUEST['time'],
        'text' => $_REQUEST['text']
      ];



      if (isset($customer)) {
        $pdo = new PDO(
          'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yomichi0329_tarots;charset=utf8',
          'yomichi0329_tat',
          'yomichitarots'
        );
        $sql = $pdo->prepare('insert into customer values(null, ?, ?, ?, ?, ?, ?, ?)');
        $sql->execute([
          $_REQUEST['name'], $_REQUEST['kana'],
          $_REQUEST['tel'], $_REQUEST['mail'], $_REQUEST['day'],
          $_REQUEST['time'], $_REQUEST['text']
        ]);



        echo '<h1 class="form_title">予約完了</h1>';
        echo '</div>';
        echo '<div class="form_outline">';


        echo '<p class="complete_inner">';
        echo '予約が完了致しました。<br>';
        echo '指定いただいたメールアドレスに詳細を送ります。<br>';
        echo 'しばらくお待ちください。';
        echo '</p>';
      } else {


        echo '<h1 class="form_title">エラー</h1>';
        echo '</div>';
        echo '<div class="form_outline">';


        echo '<div class="complete_inner">';
        echo 'エラーが発生しました。もう一度やり直してください。';
        echo '</div>';
      }

      ?>

    </div><!--form_outline -->

    <div class="back_btn">
      <a href="index.php">ホームへ戻る</a>
    </div>


  </div><!-- form_inner -->





</main>

<?php require 'includes/footer.php' ?>