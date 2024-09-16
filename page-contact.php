<?php

/**
 * Template Name: contact_page
 * Description: お問い合わせ
 */
?>

<?php get_header(); ?>
<main class="contact-page">
  <?php get_template_part('parts/mainvisual', null, array(
    'image-file-name' => 'contact_mainvisual_pc.jpg',
    'main-text' => 'お問い合わせ',
    'sub-text' => 'Contact'
  )); ?>


  <div class="c_main-wrapper contact-wrapper">

    <section class="form-section">

      <?php get_template_part('parts/sub-heading', null, array(
        'main-text' => '体験レッスンお申し込み・お問い合わせ',
        'sub-text' => 'Contact'
      )); ?>

      <div class="main-container">
        <div class="text-box">
          <p class="top-text">
            見学・体験レッスンをご希望の方は、下記フォームよりお申し込みください。<br>
            各種お問い合わせについてもこちらのフォームより承ります。<br>
            担当者よりメールでご連絡させていただきますので、3日以内に返信がない場合やお急ぎの場合は、LINEにてご連絡ください。
          </p>
        </div>
        <div class="form-box">
          <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>

        </div>
      </div>
    </section>
  </div>

  </section>

  </div>

  <?php get_template_part('parts/line'); ?>


  </div>
</main>
<?php get_footer(); ?>