<?php require 'includes/header.php' ?>



<!-- ---------------------修正箇所 -----------------------  -->

<div id="video-area">
  <video id="video" src="img/star_-_121634 (1080p).mp4" webkit-playsinline playsinline muted autoplay loop>
    <!--
        poster：動画ファイルが利用できない環境で代替表示される画像
        webkit-playsinline：iOS 9までのSafari用インライン再生指定
        playsinline：iOS 10以降のSafari用インライン再生指定
        muted：音声をミュートさせる
        autoplay：動画を自動再生させる
        loop：動画をループさせる
        controls：コントロールバーを表示する
        -->
  </video>
</div><!-- video-area -->
<!-- ---------------------修正箇所 ここまで----------------------- -->
<div class="mv">
    <h1 class="mv_title">
      双<span class="title_name">-moro-</span>
    </h1>

    <div class="mv_subtitle">
      <h4>渦巻く運命</h4>
      <h4>数ある星の中のひとつ</h4>
    </div>
</div>


<section class="list_section">
  <div class="tarots_list" id="list">

    <div class="list_item">
      <div class="list_flex scroll-left">
        <h1 class="list_title">
          タロットについて
        </h1>

        <div class="list_text_area">
          <ul>
            <li>
              タロットは、西洋占星術などの命術(めいじゅつ)や、手相等の相術(そうじゅつ)とは違い、卜術（ぼくじゅつ）といって、 今または少し先の未来、過去など今に近いことを占うことができる占いです。<br>
              今回数あるカードから６枚に厳選しお試し感覚でカードが引けます。<br>
              ぜひ試しに今日の運勢を見てみましょう。<br>
              もっと詳しく占い方は占い予約へ
            </li>
            <li>
              <button class="list_btn">
                <a href="index.php#customer">占い予約</a>
              </button>
            </li>
          </ul>
        </div>
      </div>

      <div class="spece">

      </div>
    </div>


    <div class="list_item">
      <div class="spece">

      </div>
      <div class="list_flex scroll-right">
        <h1 class="list_title">
          双-moro-の意味
        </h1>

        <div class="list_text_area">

          <ul>
            <li>
              「双(もろ)」とは、『ふたつ。対をなす二つが揃う』。という意味の言葉です。タロットも正位置と逆位置があったり。いい結果と受け取るか悪い結果と受け取るかという二面性を持っている面や、二つで一つ。表裏一体なところからこの漢字をサイト名にしました。<br>
              良いも悪いもあなた次第…<br>
              さぁ早速貴方の運命を覗いてみましょう。
            </li>
            <li>
              <button class="list_btn">
                <a href="index.php#tarots">カードを引く</a>
              </button>
            </li>

          </ul>
        </div>
      </div>

    </div>


  </div>

</section>




<section class="tarots_section">
  <div class="tarots_area load-fade" id="tarots">
    <h1>Tarot Cards</h1>
    <h2>タロットカードを引いて占ってみよう！</h2>

    <form action="output.php" method="POST">

      <button class="btn" name="btn">
        <img src="img/tarots.jpg" alt="">
      </button>

      <button class="btn" name="btn">
        <img src="img/tarots.jpg" alt="">
      </button>


      <button class="btn" name="btn">
        <img src="img/tarots.jpg" alt="">
      </button>
    </form>
  </div>

</section>

<section class="form_section">
  <div class="form_inner load-fade">

    <div class="form_title_area" id="customer">
      <h1 class="form_title">
        予約
      </h1>

      <p>
        大アルカナ小アルカナ合わせた枚で本格的に占いたい方は下記のフォームにて占い日程をお申込みください。<br>※お申し込みのメールアドレス宛に占いの詳細をお送りいたします。
      </p>
    </div>




    <div class="form_outline">
      <form action="customer-input.php" method="POST">

        <div class="input_item">
          <h3>
            お名前<span class="point">（必須）</span>
          </h3>
          <input type="text" name="name" class="customer_input" value="">
        </div>

        <div class="input_item">
          <h3>
            フリガナ<span class="point">（必須）</span>
          </h3>
          <input type="text" name="kana" class="customer_input" value="">
        </div>

        <div class="input_item">
          <h3>
            電話番号<span class="point">（必須）</span>
          </h3>
          <input type="text" name="tel" class="customer_input" value="">
        </div>

        <div class="input_item">
          <h3>
            メール<span class="point">（必須）</span>
          </h3>
          <input type="text" name="mail" class="customer_input" value="">
        </div>

        <div class="input_item">
          <h3>
            日付<span class="point">（必須）</span>
          </h3>
          <input type="date" name="day" class="customer_input" value="">
        </div>

        <div class="input_item">
          <h3>
            時間<span class="point">（必須）</span>
          </h3>
          <select name="time">
            <option value="選択してください">選択してください ▼</option>
            <option value="11:00 - 12:00">11:00 - 12:00</option>
            <option value="13:00 - 14:00">13:00 - 14:00</option>
            <option value="15:00 - 16:00">15:00 - 16:00</option>
          </select>
        </div>

        <div class="input_item">
          <h3>
            占い内容
          </h3>
          <textarea name="text" class="customer_input" value="">
          </textarea>
        </div>


        <div class="submit_btn">
          <button class="form_btn" name="btn">
            <input type="submit">
          </button>
        </div>

      </form>
    </div>



  </div>
</section>

<div class="page_top">
  <button class="page_top_btn" id="pageTop">
    ▲
  </button>
</div>


<?php require 'includes/footer.php' ?>