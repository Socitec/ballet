<?php

/**
 * Template Name: about_page
 * Description: 教室紹介
 */
?>

<?php get_header(); ?>
<main class="about-page">
  <?php get_template_part('parts/mainvisual', null, array(
    'image-file-name' => 'about_mainvisual_pc.jpg',
    'main-text' => '教室紹介',
    'sub-text' => 'About'
  )); ?>


  <div class="c_main-wrapper">
    <section class="message-section">
      <?php get_template_part('parts/sub-heading', null, array(
        'main-text' => '代表挨拶',
        'sub-text' => 'Message'
      )); ?>
      <div class="message-area">
        <p class="message-text">
          Belle Amourでは、単に踊りを学ぶだけでなく、子供たちが人としての魅力を高め、バレエを通じて、<br>
          姿勢やマナーを身につけることで、普段の生活でも自信を持って生きていける女性へと成長することを目指しています。<br>
          バレリーナとして舞台上だけでなく、日常生活でも上品な立ち居振る舞いができるようにサポートしています。<br>
        </p>
        <p class="message-text">
          近年、姿勢の悪い子供が増えていることが社会問題となっていますが、ここでは整体の免許を持つ講師が<br>
          バレエのレッスンを通じて姿勢改善に力を入れています。正しい姿勢を身につけることで、健康で美しい身体を育むことができます。<br>
          さらに、希望者には整体や個人レッスンを行い、一人ひとりの身体のケアをしています。<br>
        </p>
        <p class="message-text">
          BelleAmourでは自己表現と主体性を大切にし、自分で考え行動する力を育んでいきます。<br>
          レッスン中に自分と向き合い、どうすれば良くなるのかを考えながら練習することで、主体性を育みます。<br>
          また、自分のアイデアを発表することで自己表現の力が高まり、自信を持てるようになります。<br>
          そして、努力の中で感じる悔しさや成功の達成感は一生の財産となります。<br>
          生徒たちはバレエだけでなく、人生においても成長し、夢を実現する力を育むことができると信じています。
        </p>
        <p class="message-text">
          Belle Amourは子供たちが心から「バレエが楽しい」「ここに来て良かった」と思える場所でありたいと願っています。
        </p>
      </div>
    </section>

    <section class="profile-section">
      <?php get_template_part('parts/sub-heading', null, array(
        'main-text' => '代表挨拶',
        'sub-text' => 'Message'
      )); ?>
      <div class="main-area">
        <div class="image-box">
          <img class="teacher-img" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/about_teacher_pc.jpg" alt="teacher">
          <p class="name-text">
            鈴木 愛
          </p>
        </div>
        <div class="history-box">
          <p class="history-text">
            ３歳でバレエを始め、<br>
            ベラルーシミンスクボリショイバレエ学校へ３度短期留学<br>
            １５歳でアメリカのキーロフバレエアカデミーへ<br>
            オーディションを経て留学。<br>
            帰国後、豊田バレエ学校入学（サンクトぺテルブルクにあるエルミタージュ美術館にて公演）<br>
            越智インターナショナルバレエ入団<br>
            ソリストとして舞台に立ちながら講師を務める<br>
            2002年 全国バレエコンクール in NAGOYA 入賞<br>
            2003年 全国バレエコンクール in NAGOYA パドカトル賞受賞<br>
            2004年 全国バレエコンクール in NAGOYA 入賞<br>
            2005年 モデルの活動を始める<br>
            　　　　リラクゼーションサロンにて、<br>
            　　　　揉み解しとアロマトリートメントを学ぶ<br>
            2006年 ブライダルモデルとして有松絞り祭りのトリを務める<br>
            2014年 Ai Kaoru Ballet Academy設立<br>
            2022年 整体師免許取得<br>
            2023年 小顔矯正資格取得
          </p>
        </div>
      </div>
    </section>

    <section class="schedule-section">

      <?php get_template_part('parts/sub-heading', null, array(
        'main-text' => 'レッスンスケジュール',
        'sub-text' => 'Schedule'
      )); ?>
      <div class="schedule-table-area">
        <?php get_template_part('parts/schedule'); ?>
      </div>
    </section>

    <section class="price-section">
      <?php get_template_part('parts/sub-heading', null, array(
        'main-text' => '料金',
        'sub-text' => 'Price'
      )); ?>
      <div class="price-table-area">
        <?php get_template_part('parts/price'); ?>
      </div>
    </section>

    <section class="access-section">
      <?php get_template_part('parts/sub-heading', null, array(
        'main-text' => 'アクセス',
        'sub-text' => 'Access'
      )); ?>
      <div class="map-area">
        <div class="map-item">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3275.060789659752!2d137.22104757575013!3d34.82956407287411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004c748a5b4b73b%3A0x419053e845dd9a62!2z44CSNDQzLTAwNDIg5oSb55-l55yM6JKy6YOh5biC5b6h5bm455S677yS77yS4oiS77yU!5e0!3m2!1sja!2sjp!4v1725539177730!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="address-area">
        <p class="address-text">
          〒443-0042<br>
          愛知県蒲郡市御幸町22-4<br>
          レンタルスペースNiamag
        </p>
        <p class="mail-text">
          メールアドレス：<img class="mail-text-img" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/about-mail-text.png" alt="">
        </p>
      </div>
    </section>


  </div>

  <?php get_template_part('parts/line'); ?>


  </div>
</main>
<?php get_footer(); ?>