<?php

/**
 * Template Name: beginner_page
 * Description: 初めての方
 */
?>

<?php get_header(); ?>
<main class="beginner-page">
  <?php get_template_part('parts/mainvisual', null, array(
    'image-file-name' => 'beginner_mainvisual_pc.jpg',
    'main-text' => '初めての方',
    'sub-text' => 'For Beginner'
  )); ?>


  <div class="c_main-wrapper">
    <section class="top-text-section">
      <p class="top-text">
        バレエに興味があるけれど、どんなレッスンをするのかな？<br>
        教室はどんな雰囲気なのかな？と迷っている方は、是非体験レッスンにお越しください。<br>
        体験レッスンや入会までの実際の流れをご案内します。
      </p>
    </section>


    <section class="c_section c_main-section beginner-section c_image-text-section">
      <div class="main-container">
        <img class="section-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/beginner_room_pc.jpg" alt="room">
        <div class="box">
          <div class="inner">
            <div class="text-portion">
              <h2 class="subheading-text">
                初めてでも安心。
              </h2>
              <p class="main-text">
                初めてでも安心<br>
                私は今まで３００名程の子供達を見てきました。<br>
                初めて親御さんから離れて泣いてしまう子や走り回ってしまう子、<br>
                いろんなお子様を見てきましたので、先生たちも慣れています。<br>
                だから安心して来てください。<br>
                幼児クラスでは、身体能力の向上、踊ることを楽しむ、姿勢矯正、<br>
                バレエの基礎を行っています。<br>
                子供達が「楽しかった」と笑顔でお家に帰れることを目標としています。
              </p>
              <p class="main-text">
                体験をしてみたけど、緊張してしまったり、親御さんから離れられなくて<br>
                思うように体験レッスンができなかったなど、<br>
                不安に思うことがあればいつでもご相談ください。<br>
                また、見学は何度でもしていただけますので、<br>
                クラスに馴染めるまで１カ月見学にお越しいただき、<br>
                その後不安を解消してからご入会していただくこともできます。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="c_section c_main-section merit-section c_text-image-section">
      <div class="main-container">
        <img class="section-image" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/beginner_girl_pc.jpg" alt="balletstudent">
        <div class="box">
          <div class="inner">
            <div class="text-portion">
              <h2 class="subheading-text">
                バレエを習うメリットとは
              </h2>
              <p class="main-text">
                バレエを習うことには、多くのメリットがあります。<br>
                まず、身体の柔軟性が高まり、身体能力が向上するため、<br>
                健康的で強い体を作ることができます。
              </p>
              <p class="main-text">
                また、バレエを通じて自信がつき、自己肯定感が高まることで、<br>
                自己表現の幅が広がります。<br>
                さらに、感性や美意識が磨かれ、美しい姿勢や所作を習得することで、<br>
                外見だけでなく内面の魅力も向上します。<br>
              </p>
              <p class="main-text">
                バレエは集中力や吸収力を高め、精神面を強くする効果もあり、<br>
                学ぶ過程で礼儀やマナーを身に付けることができます。<br>
                そして、協調性や自立心、主体性が育まれるため、<br>
                個人としても成長することができます。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="lesson-section">
      <?php get_template_part('parts/sub-heading', null, array(
        'main-text' => '体験レッスン',
        'sub-text' => 'Trial lesson'
      )); ?>
      <div class="main-area">
        <div class="inner">
          <div class="step-item">
            <div class="number-portion">
              <p class="number-text">
                01
              </p>
            </div>
            <div class="text-portion">
              <p class="innder-text">
                ストレッチから体験していただけます。<br>
                お子様の状態を見ながら、これ以上は難しそうだなと判断した場合、<br>
                無理に体験させるのではなく、<br>
                『これは見学していてね』とお声がけをさせていただきます。
              </p>
            </div>
          </div>
          <div class="icon-box">
            <div class="triangle-down"></div>
          </div>
          <div class="step-item">
            <div class="number-portion">
              <p class="number-text">
                02
              </p>
            </div>
            <div class="text-portion">
              <p class="innder-text">
                レッスン終了後、保護者様、お子様と<br>
                料金や教室について説明をさせていただきます。
              </p>
            </div>
          </div>
          <div class="icon-box">
            <div class="triangle-down"></div>
          </div>
          <div class="step-item">
            <div class="number-portion">
              <p class="number-text">
                03
              </p>
            </div>
            <div class="text-portion">
              <p class="innder-text">
                ご入会の場合は、身長、足のサイズをお聞きし、<br>
                バレエ用品の注文をさせていただきます。<br>
                月の途中からのご入会も可能です。
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-area">
        <p class="bottom-text">
          <span class="bottom-text--bold">持ち物：</span>動きやすい服装（Tシャツ、スパッツなど。スカート、ジーンズ不可）<br>
          お飲み物・タオル・靴下・あればヨガマット
        </p>
      </div>
    </section>

  </div>

  <?php get_template_part('parts/line'); ?>


  </div>
</main>
<?php get_footer(); ?>