<?php require 'includes/header.php' ?>



<?php
$lots = ['運命の輪', '魔術師', '力', '塔', '愚者', '隠者'];
if (isset($_REQUEST['btn'])) {
  $lot = array_rand($lots); //array_randは値ではなくキーを取り出している
  switch ($lot) {
    case 0:
      $res = '
      <div class="card">
      <h2 class="card_title">運命の輪</h2>
      <img src="img/tarots.jpg" alt="カード表紙" class="card1">
      <img src="img/card-template-.jpg" alt="カード柄側" class="card2">
      </div>';
      $tos =
        '
        <h3 class="card_spirit">意味：成功</h3>
        <div class="text">
          今いい流れが来ている予感あり<br>
          物事がうまくいく可能性大
         </div>
      ';

      $num = 1;
      break;
    case 1:
      $res = '
      <div class="card">
      <h2 class="card_title">魔術師</h2>
      <img src="img/tarots.jpg" alt="カード表紙" class="card1">
      <img src="img/card-template-.jpg" alt="カード柄側" class="card2">
      </div>';
      $tos =
        '
        <h3 class="card_spirit">意味：始まり</h3>
        <div class="text">
        何か新しくチャレンジするとうまくいくかも<br>
        やりたいことがあったら勇気をだして始めてみよう
         </div>
      ';

      $num = 2;
      break;
    case 2:
      $res = '
      <div class="card">
      <h2 class="card_title">力</h2>
      <img src="img/tarots.jpg" alt="カード表紙" class="card1">
      <img src="img/card-template-.jpg" alt="カード柄側" class="card2">
      </div>
      ';
      $tos =
        '
        <h3 class="card_spirit">意味：制御</h3>
        <div class="text">
        自分の能力に自信が持って力を発揮できるかも<br>
        でも暴走は禁物。自分の力量以上なことはしないように
         </div>
      ';

      $num = 3;
      break;
    case 3:
      $res = '
      <div class="card">
      <h2 class="card_title">塔</h2>
      <img src="img/tarots.jpg" alt="カード表紙" class="card1">
      <img src="img/card-template-.jpg" alt="カード柄側" class="card2">
      </div>
      ';
      $tos =
        '
        <h3 class="card_spirit">意味：崩壊</h3>
        <div class="text">
        積み上げてきたモノが崩れてしまうかも<br>
        でもそれは凝り固まった考えが崩れて新しいものが見えるチャンスかも
         </div>
      ';

      $num = 4;
      break;
    case 4:
      $res = '
      <div class="card">
      <h2 class="card_title">愚者</h2>
      <img src="img/tarots.jpg" alt="カード表紙" class="card1">
      <img src="img/card-template-.jpg" alt="カード柄側" class="card2">
      </div>
      ';
      $tos =
        '
        <h3 class="card_spirit">意味：きまぐれ</h3>
        <div class="text">
        注意力散漫。いろいろ手を出してしまうときかも<br>
        1つのことに集中しなくてはならない時は注意しよう
        </div>
      ';

      $num = 5;
      break;
    case 5:
      $res = '
      <div class="card">
      <h2 class="card_title"> 隠者</h2>
      <img src="img/tarots.jpg" alt="カード表紙" class="card1">
      <img src="img/card-template-.jpg" alt="カード柄側" class="card2">
      </div>
      ';
      $tos =
        '
        <h3 class="card_spirit">意味：知識</h3>
        <div class="text">
        少し籠ってゆっくり何かを研究したり吸収するときかも<br>
        静かに読書が吉◎
         </div>
      ';

      $num = 6;
      break;
  }
} else {

  echo '<p>エラーが起きました。もう一度戻って引いてください。</p>';
  echo ' <a href="index.php">';
  echo ' <button type="button">ホームに戻る</button>';
  echo '</a>';
}

?>


  <div class="card_inner">
    <h1>結果</h1>
    <h2><?= $res; ?></h2>

    <div class="card_list">
      <p class="card_A">
        <a href="detail.php?num=<?= $num; ?>">結果の詳細</a>
      </p>
      <?= $tos; ?>
      <p class="back_btn">
        <button type="button"><a href="index.php">ホームに戻る</a></button>
      </p>
    </div>
  </div>


  <?php require 'includes/footer.php' ?>