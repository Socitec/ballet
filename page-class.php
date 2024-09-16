<?php

/**
 * Template Name: class_page
 * Description: クラス紹介
 */
?>

<?php get_header(); ?>
<main class="class-page">
  <?php get_template_part('parts/mainvisual', null, array(
    'image-file-name' => 'class_mainvisual_pc.jpg',
    'main-text' => 'クラス紹介',
    'sub-text' => 'Class'
  )); ?>


  <div class="c_main-wrapper">
    <div class="inner">
      <section class="lesson-section">
        <?php get_template_part('parts/sub-heading', null, array(
          'main-text' => '幼児科クラス',
          'bottom-text' => '年少～年長（３年生までの初心者）'
        )); ?>
        <div class="main-area">
          <div class="image-box">
            <img class="main-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/class_infant_pc.jpg" alt="balletstudent">
          </div>
          <div class="text-box">
            <p class="main-text">
              正しい姿勢、柔軟性、リズム感、身体能力の向上を促し、身体力を身につけるクラスです。<br>
              楽しい・好きという気持ちを大切に、少しずつ集中力も身に付けます。
            </p>
          </div>
          <div class="course-box">
            <p class="course-item">
              週１コース
            </p>
            <p class="course-item">
              週２コース
            </p>
          </div>
        </div>
      </section>

      <section class="lesson-section">
        <?php get_template_part('parts/sub-heading', null, array(
          'main-text' => '児童科クラス',
          'bottom-text' => '小学１年生～（バレエシューズ） ​'
        )); ?>
        <div class="main-area">
          <div class="image-box">
            <img class="main-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/class_juvenile_pc.jpg" alt="balletstudent">
          </div>
          <div class="text-box">
            <p class="main-text">
              引き続き身体能力、柔軟性の向上に加え体幹トレーニングや軽い筋トレをします。<br>
              バレエの基礎を身につけ、正しい身体の使い方を覚え、みんなと合わせて踊ることで協調性を身につけます。 </p>
          </div>
          <div class="course-box">
            <p class="course-item">
              週１コース
            </p>
            <p class="course-item">
              週２コース
            </p>
          </div>
        </div>
      </section>

      <section class="lesson-section">
        <?php get_template_part('parts/sub-heading', null, array(
          'main-text' => '児童Pクラス',
          'bottom-text' => '小学校５年生以上（トウシューズ試験合格者） ​'
        )); ?>
        <div class="main-area">
          <div class="image-box">
            <img class="main-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/class_upperJuvenile_pc.jpg" alt="balletstudent">
          </div>
          <div class="text-box">
            <p class="main-text">
              バレエの基礎を理解した上で、テクニックの強化や表現力の向上を目指します。自分と向き合い、考える。<br>
              学んだことを人に教えることにより、主体制を身につけます。<br>
              身体の準備が整った生徒はポワントでのレッスンも行います。
            </p>
          </div>
          <div class="course-box">
            <p class="course-item">
              週１コース
            </p>
            <p class="course-item">
              週２コース
            </p>
            <p class="course-item">
              週３コース
            </p>
          </div>
        </div>
      </section>

    </div>

  </div>

  <?php get_template_part('parts/line'); ?>


  </div>
</main>
<?php get_footer(); ?>