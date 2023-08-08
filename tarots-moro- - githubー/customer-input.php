<?php require 'includes/header.php' ?>
<?php
function h($value)
{
  // return htmlspecialchars($value);
  return mb_convert_kana($value, "sKnr");
}
?>



<main class="customer_inner">
  <div class="form_inner">


    <!-- エラーチェック -->
    <?php
    if (empty(htmlspecialchars($_REQUEST['name']))) {
      echo '<div class="form_title_area" id="customer">';
      echo '<h1 class="form_title">エラー</h1>';
      echo '<p>
      入力エラーです。以下の事を確認してください。
      </p>';
      echo '</div>';

      echo '<div class="form_outline">';
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_error">お名前を入力してください。</P>';
      echo '</div>';
      echo '</div>';
      echo '</form>';

      echo ' <p class="back_btn">
        <button type="button"><a href="index.php#customer">入力に戻る</a></button>
      </p>';
    } elseif (!preg_match("/^[ァ-ヶー 　]*$/u", ($_REQUEST['kana']))) {
      echo '<div class="form_title_area" id="customer">';
      echo '<h1 class="form_title">エラー</h1>';
      echo '<p>
      入力エラーです。以下の事を確認してください。
      </p>';
      echo '</div>';

      echo '<div class="form_outline">';
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_error">全角フリガナで入力してください。</P>';
      echo '</div>';
      echo '</div>';
      echo '</form>';

      echo ' <p class="back_btn">
        <button type="button"><a href="index.php#customer">入力に戻る</a></button>
      </p>';
    } elseif (!preg_match("/^0[0-9]{9,10}\z/", $_REQUEST['tel'])) {
      echo '<div class="form_title_area" id="customer">';
      echo '<h1 class="form_title">エラー</h1>';
      echo '<p>
      入力エラーです。以下の事を確認してください。
      </p>';
      echo '</div>';

      echo '<div class="form_outline">';
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_error">電話番号を入力してください。</P>';
      echo '<p class="input_error">ハイフンなしの半角数字で入力してください。</P>';

      echo '</div>';
      echo '</div>';
      echo '</form>';

      echo ' <p class="back_btn">
        <button type="button"><a href="index.php#customer">入力に戻る</a></button>
      </p>';
    } elseif (!preg_match('/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', ($_REQUEST['mail']))) {
      echo '<div class="form_title_area" id="customer">';
      echo '<h1 class="form_title">エラー</h1>';
      echo '<p>
      入力エラーです。以下の事を確認してください。
      </p>';
      echo '</div>';

      echo '<div class="form_outline">';
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_error">メールアドレスは半角英数字で入力してください。</P>';
      echo '</div>';
      echo '</div>';
      echo '</form>';

      echo ' <p class="back_btn">
        <button type="button"><a href="index.php#customer">入力に戻る</a></button>
      </p>';
    } elseif (empty(htmlspecialchars($_REQUEST['day']))) {
      echo '<div class="form_title_area" id="customer">';
      echo '<h1 class="form_title">エラー</h1>';
      echo '<p>
      入力エラーです。以下の事を確認してください。
      </p>';
      echo '</div>';

      echo '<div class="form_outline">';
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_error">日付を選択してください。</P>';
      echo '</div>';
      echo '</div>';
      echo '</form>';

      echo ' <p class="back_btn">
        <button type="button"><a href="index.php#customer">入力に戻る</a></button>
      </p>';
    } elseif ($_REQUEST['time'] === '選択してください') {
      echo '<div class="form_title_area" id="customer">';
      echo '<h1 class="form_title">エラー</h1>';
      echo '<p>
      入力エラーです。以下の事を確認してください。
      </p>';
      echo '</div>';

      echo '<div class="form_outline">';
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_error">時間を選択してください。</P>';
      echo '</div>';
      echo '</div>';
      echo '</form>';

      echo ' <p class="back_btn">
        <button type="button"><a href="index.php#customer">入力に戻る</a></button>
      </p>';
    }elseif(!str_replace([' ', ' '], '', $_REQUEST['text'])){
      echo '<div class="form_title_area" id="customer">';
      echo '<h1 class="form_title">エラー</h1>';
      echo '<p>
      入力エラーです。以下の事を確認してください。
      </p>';
      echo '</div>';

      echo '<div class="form_outline">';
      echo '<div class="customer_inner error_customer">';
      echo '<p class="input_error">占い内容を入力してください。</P>';
      echo '</div>';
      echo '</div>';
      echo '</form>';

      echo ' <p class="back_btn">
        <button type="button"><a href="index.php#customer">入力に戻る</a></button>
      </p>';
    }
    //すべて入力OKの場合 
    else {
      echo '<input type="hidden" name="name" class="customer_input" value="' . h($_REQUEST['name']) . '">';
      echo '<input type="hidden" name="kana" class="customer_input" value="' . h($_REQUEST['kana']) . '">';
      echo '<input type="hidden" name="tel" class="customer_input" value="' . h($_REQUEST['tel']) . '">';
      echo '<input type="hidden" name="mail" class="customer_input" value="' . h($_REQUEST['mail']) . '">';
      echo '<input type="hidden" name="day" class="customer_input" value="' . h($_REQUEST['day']) . '">';
      echo '<input type="hidden" name="time" class="customer_input" value="' . h($_REQUEST['time']) . '">';
      echo '<input type="hidden" name="text" class="customer_input" value="' . h($_REQUEST['text']) . '">';

      require 'customer-confirm.php';
    }
















    ?>


  </div>
  </div>




</main>

<?php require 'includes/footer.php' ?>