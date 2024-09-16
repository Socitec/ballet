<?php

/**
 * Template Name: front_page
 * Description: トップ
 */
?>

<?php get_header(); ?>
<main class="top-content">
  <section class="">
    <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/top_mainvisual_pc.jpg" alt="valletschool">
  </section>

  <div class="c_main-wrapper">
    <section class="c_section c_main-section school-section c_image-text-section">
      <div class="main-container">
        <img class="section-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/top_introduction.jpg" alt="">
        <div class="box">
          <div class="inner">
            <div class="text-portion">
              <h2 class="subheading-text">
                <span class="subheading-text--english">Belle Amour</span> 教室紹介
              </h2>
              <p class="main-text">
                Belle Amourは、<br>
                愛知県蒲郡市にあるバレエ教室です。
              </p>
            </div>
            <div class="button-area">
              <a class="button-link" href="<?= esc_url(home_url('/about/')); ?>">
                <button class="detail-button">
                  <div class="inner-frame">
                    <p class="detail-text">詳しくはこちら</p>
                    <p class="detail-english">read more</p>
                  </div>
                </button>
              </a>
            </div>
          </div>
          <p class="subtext">About</p>
        </div>
      </div>
    </section>

    <section class="c_section c_main-section beginner-section c_text-image-section">
      <div class="main-container">
        <img class="section-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/top_beginner.jpg" alt="balletstudent">
        <div class="box">
          <div class="inner">
            <div class="text-portion">
              <h2 class="subheading-text">
                初めての方へ
              </h2>
              <p class="main-text">
                バレエとはルネッサンス時代のイタリアで生まれ、<br>
                フランスで発展し、ロシアで完成された舞踊芸術で<br>
                歌詞やセ台詞がない舞台舞踊です。
              </p>
            </div>
            <div class="button-area">
              <a class="button-link" href="<?= esc_url(home_url('/beginner/')); ?>">
                <button class="detail-button">
                  <div class="inner-frame">
                    <p class="detail-text">詳しくはこちら</p>
                    <p class="detail-english">read more</p>
                  </div>
                </button>
              </a>
            </div>
          </div>
          <p class="subtext">Beginner's Guide</p>
        </div>
      </div>
    </section>

    <section class="c_section c_main-section class-section">
      <div class="main-container">
        <img class="section-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/top_class.jpg" alt="balletstudent">
        <div class="box">
          <div class="inner">
            <div class="text-portion">
              <h2 class="subheading-text">
                クラス紹介
              </h2>
              <p class="main-text">
                Question私たちの教室では、<br>
                ３クラスに分けてレッスンを受けております。<br>
                下は3歳から、大きくて小学生高学年までの生徒が<br>
                日々レッスンに励んでいます。
              </p>
            </div>
            <div class="button-area">
              <a class="button-link" href="<?= esc_url(home_url('/class/')); ?>">
                <button class="detail-button">
                  <div class="inner-frame">
                    <p class="detail-text">詳しくはこちら</p>
                    <p class="detail-english">read more</p>
                  </div>
                </button>
              </a>
            </div>
          </div>
          <p class="subtext">Class</p>
        </div>
      </div>
    </section>

    <section class="price-section">
      <div class="main-container">
        <h2 class="heading-text">Price</h2>
        <a class="button-link" href="<?= esc_url(home_url('/price/')); ?>">
          <button class="button">
            レッスン料金について
          </button>
        </a>
        <p class="bottom-text">
          各クラスごとのレッスン料金についてご紹介します。
        </p>
        <img class="price-ribon price-ribon--topright" alt="ribon" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/top_price-ribon1.svg" />
        <img class="price-ribon price-ribon--bottomleft" alt="ribon" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/top_price-ribon2.svg" />
      </div>
    </section>

    <div class="parallel-group">
      <section class="c_inner-section recital-section">
        <div class="heading-box">
          <h2 class="heading-text">過去の発表会の様子</h2>
          <p class="subheading-text">recital</p>
        </div>
        <div class="list-area">
          <ul class="list-table">
            <li class="item">
              <a class="item-link" href="">
                <div class="square">
                  <i class="fa-solid fa-square-full square-icon"></i>
                </div>
                <div class="text-portion">
                  <p class="date">
                    2024.07.01
                  </p>
                  <p class="content">
                    第4回バレエ発表会が行われました。
                  </p>
                </div>
              </a>
            </li>
            <li class="item">
              <a class="item-link" href="">
                <div class="square">
                  <i class="fa-solid fa-square-full square-icon"></i>
                </div>
                <div class="text-portion">
                  <p class="date">
                    2024.07.01
                  </p>
                  <p class="content">
                    第4回バレエ発表会が行われました。
                  </p>
                </div>
              </a>
            </li>
            <li class="item">
              <a class="item-link" href="">
                <div class="square">
                  <i class="fa-solid fa-square-full square-icon"></i>
                </div>
                <div class="text-portion">
                  <p class="date">
                    2024.07.01
                  </p>
                  <p class="content">
                    第4回バレエ発表会が行われました。
                  </p>
                </div>
              </a>
            </li>
            <li class="item">
              <a class="item-link" href="">
                <div class="square">
                  <i class="fa-solid fa-square-full square-icon"></i>
                </div>
                <div class="text-portion">
                  <p class="date">
                    2024.07.01
                  </p>
                  <p class="content">
                    第4回バレエ発表会が行われました。
                  </p>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="bottom-box">
          <a class="more-link" href="<?= esc_url(home_url('/recital/')); ?>">
            <i class="fa-solid fa-caret-right triangle-icon"></i>
            <p class="bottom-text">
              read more
            </p>
          </a>
        </div>
      </section>

      <section class="c_inner-section recital-section">
        <div class="heading-box">
          <h2 class="heading-text">よくあるご質問</h2>
          <p class="subheading-text">question</p>
        </div>
        <div class="list-area">
          <ul class="list-table">
            <li class="item">
              <a class="item-link" href="">
                <div class="square">
                  <i class="fa-solid fa-square-full square-icon"></i>
                </div>
                <div class="text-portion">
                  <p class="content">
                    落ち着きがない子どもですが大丈夫でしょうか？
                  </p>
                </div>
              </a>
            </li>
            <li class="item">
              <a class="item-link" href="">
                <div class="square">
                  <i class="fa-solid fa-square-full square-icon"></i>
                </div>
                <div class="text-portion">
                  <p class="content">
                    親と離れると泣いてしまうのですが大丈夫でしょうか？
                  </p>
                </div>
              </a>
            </li>
            <li class="item">
              <a class="item-link" href="">
                <div class="square">
                  <i class="fa-solid fa-square-full square-icon"></i>
                </div>
                <div class="text-portion">
                  <p class="content">
                    発表会に出演させたいのですが、費用が気になります
                  </p>
                </div>
              </a>
            </li>
            <li class="item">
              <a class="item-link" href="">
                <div class="square">
                  <i class="fa-solid fa-square-full square-icon"></i>
                </div>
                <div class="text-portion">
                  <p class="content">
                    身体が硬いのですが大丈夫でしょうか？
                  </p>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="bottom-box">
          <a class="more-link" href="<?= esc_url(home_url('/question/')); ?>">
            <i class="fa-solid fa-caret-right triangle-icon"></i>
            <p class="bottom-text">
              read more
            </p>
          </a>
        </div>
      </section>

    </div>

    <?php get_template_part('parts/line'); ?>
  </div>
</main>
<?php get_footer(); ?>