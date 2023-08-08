<!-- <main class="customer_inner">
  <div class="form_inner">
 -->
<div class="form_title_area" id="customer">
  <h1 class="form_title">
    予約確認
  </h1>

  <p>
    入力情報でよろしければ確定ボタンを押してください。
  </p>
</div>


<div class="form_outline">


  <form action="customer-complete.php" method="POST" class="input_form">

    <div class="input_item">
      <h3>
        お名前：
      </h3>
      <input type="hidden" name="name" class="customer_input" value="<?php echo h($_REQUEST['name']) ?>">
      <p class="input_p"><?php echo h($_REQUEST['name']) ?></p>
    </div>

    <div class="input_item">
      <h3>
        フリガナ：
      </h3>
      <input type="hidden" name="kana" class="customer_input" value="<?php echo h($_REQUEST['kana']) ?>">
      <p class="input_p"><?php echo h($_REQUEST['kana']) ?></p>
    </div>

    <div class="input_item">
      <h3>
        電話番号：
      </h3>
      <input type="hidden" name="tel" class="customer_input" value="<?php echo h($_REQUEST['tel']) ?>">
      <p class="input_p"><?php echo h($_REQUEST['tel']) ?></p>
    </div>

    <div class="input_item">
      <h3>
        メール：
      </h3>
      <input type="hidden" name="mail" class="customer_input" value="<?php echo h($_REQUEST['mail']) ?>">
      <p class="input_p"><?php echo h($_REQUEST['mail']) ?></p>

    </div>

    <div class="input_item">
      <h3>
        日付：
      </h3>
      <input type="hidden" name="day" class="customer_input" value="<?php echo h($_REQUEST['day']) ?>">
      <p class="input_p"><?php echo h($_REQUEST['day']) ?></p>

    </div>

    <div class="input_item">
      <h3>
        時間：
      </h3>
      <input type="hidden" name="time" class="customer_input" value="<?php echo h($_REQUEST['time']) ?>">
      <p class="input_p"><?php echo h($_REQUEST['time']) ?></p>

    </div>

    <div class="input_item">
      <h3>
        占い内容：
      </h3>
      <input type="hidden" name="text" class="customer_input" value="<?php echo h($_REQUEST['text']) ?>">
      <p class="input_p"><?php echo h($_REQUEST['text']) ?></p>
      </textarea>
    </div>


    <div class="submit_btn">
      <button class="form_btn" name="btn">
        <input type="submit" vlaue="">
      </button>
    </div>

  </form>

</div>

<div class="back_btn">
  <a href="index.php#customer">予約フォームへ戻る</a>
</div>



<!-- </div>
</main> -->