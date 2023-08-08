<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>タロット館</title>
  <link rel="stylesheet" href="css/destyle.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php
    if (isset($_GET['num']) && $_GET['num'] < 7 && $_GET['num'] > 0) {
      $num = $_GET['num'];
      switch ($num) {
        case 1;
          $res = '<h2>運命の輪</h2>
              <p>意味：成功</P>
              <div class="text">
              うまく歯車が回り出して良いことが起きるかも
              </div>';
          break;
        case 2;
          $res = '<h2>魔術師</h2>
              <p>意味：成功</P>
              <div class="text">
              うまく歯車が回り出して良いことが起きるかも
              </div>';
          break;
        case 3;
          $res = '<h2>力</h2>
              <p>意味：成功</P>
              <div class="text">
              うまく歯車が回り出して良いことが起きるかも
              </div>';
          break;
        case 4;
          $res = '<h2>塔</h2>
              <p>意味：成功</P>
              <div class="text">
              うまく歯車が回り出して良いことが起きるかも
              </div>';
          break;
        case 5;
          $res = '<h2>愚者</h2>
              <p>意味：成功</P>
              <div class="text">
              うまく歯車が回り出して良いことが起きるかも
              </div>';
          break;
        case 6;
          $res = '<h2>隠者</h2>
              <p>意味：成功</P>
              <div class="text">
              うまく歯車が回り出して良いことが起きるかも
              </div>';
          break;
      }
    } else {
      echo '<p>エラーが起きました。もう一度戻って引いてください。</p>';
      echo ' <a href="index.php">';
      echo ' <button type="button">ホームに戻る</button>';
      echo '</a>';
    }

    ?>

    <h1>結果の詳細</h1>
    <h2><?= $res; ?></h2>
    <p>
      <a href="index.php">
        <button type="button">ホームへ戻る</button>
      </a>
    </p>


</body>

</html>