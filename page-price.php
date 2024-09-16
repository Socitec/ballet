<?php

/**
 * Template Name: price_page
 * Description: 料金
 */
?>

<?php get_header(); ?>
<main class="price-page">
  <?php get_template_part('parts/mainvisual', null, array(
    'image-file-name' => 'price_mainvisual_pc.jpg',
    'main-text' => '料金',
    'sub-text' => 'Price'
  )); ?>


  <div class="c_main-wrapper">

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

    <section class="description-section">
      <div class="inner">
        <div class="description-box">
          <h3 class="subheading3-text">
            入会金
          </h3>
          <p class="description-text">
            <span class="description-text--large"> 10,000円</span><br>
            ※前月の15日～25日に指定口座へお振込みください。
          </p>
        </div>
        <div class="description-box">
          <h3 class="subheading3-text">
            月謝について
          </h3>
          <p class="description-text">
            月に1回口座振り替えができます。<br>
            ※3カ月、6カ月まとめての振り込みも可能です。
          </p>
        </div>
        <div class="description-box">
          <h3 class="subheading3-text">
            バレエ用品について
          </h3>
          <p class="description-text">
            教室を通してご購入いただくことをお願いしております。<br>
            商品が到着後、試着していただき、1,000円以上の商品については、振り込みでのお支払いをお願いしております。
          </p>
        </div>
      </div>
    </section>

  </div>

  <?php get_template_part('parts/line'); ?>


  </div>
</main>
<?php get_footer(); ?>