<?php

/**
 * Template Name: recital_page
 * Description: 発表会
 */
?>

<?php get_header(); ?>
<main class="recital-page">
  <?php get_template_part('parts/mainvisual', null, array(
    'image-file-name' => 'recital_mainvisual_pc.jpg',
    'main-text' => '発表会',
    'sub-text' => 'Recital'
  )); ?>


  <div class="c_main-wrapper">

    <section class="latestEvent-section">

      <?php get_template_part('parts/sub-heading', null, array(
        'main-text' => '最新の発表会',
        'sub-text' => 'Latest Event'
      )); ?>

      <div class="main-container">
        <div class="box">
          <img class="section-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/recital_festival.jpg" alt="">
          <div class="inner">
            <div class="subheading-portion">
              <h2 class="subheading-text">
                さくらフェスティバル
              </h2>
            </div>
            <div class="text-portion">
              <div class="text-item">
                <h3 class="sub2heading-text">
                  開催日
                </h3>
                <p class="main-text">
                  2024/3/17
                </p>
              </div>
              <div class="text-item">
                <h3 class="sub2heading-text">
                  会場
                </h3>
                <p class="main-text">
                  蒲郡市民会館
                </p>
              </div>
              <div class="text-item">
                <h3 class="sub2heading-text">
                  時間
                </h3>
                <p class="main-text">
                  10:30-16:00
                </p>
              </div>
            </div>
            <div class="button-area">
              <a class="button-link" href="">
                <button class="detail-button">
                  <div class="inner-frame">
                    <p class="detail-text">詳しくはこちら</p>
                    <p class="detail-english">read more</p>
                  </div>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="pastEvent-section">
      <?php get_template_part('parts/sub-heading', null, array(
        'main-text' => '過去の発表会',
        'sub-text' => 'Past Event'
      )); ?>

      <div class="main-box">
        <div class="main-area">
          <div class="event-item">
            <p class="event-date">
              2024/3/17
            </p>
            <h3 class="sub2heading-text">
              さくらフェスティバル
            </h3>
            <img class="event-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/recital_event1.jpg" alt="recital">
          </div>
          <div class="event-item">
            <p class="event-date">
              2024/3/17
            </p>
            <h3 class="sub2heading-text">
              さくらフェスティバル
            </h3>
            <img class="event-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/recital_event2.jpg" alt="recital">
          </div>
          <div class="event-item">
            <p class="event-date">
              2024/3/17
            </p>
            <h3 class="sub2heading-text">
              さくらフェスティバル
            </h3>
            <img class="event-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/recital_event3.jpg" alt="recital">
          </div>
        </div>
      </div>
    </section>

  </div>

  <?php get_template_part('parts/line'); ?>


  </div>
</main>
<?php get_footer(); ?>