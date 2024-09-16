<?php

/**
 * Template Name: question_page
 * Description: Q & A
 */
?>

<?php get_header(); ?>
<main class="question-page">
  <?php get_template_part('parts/mainvisual', null, array(
    'image-file-name' => 'recital_mainvisual_pc.jpg',
    'main-text' => 'Q&A',
    'sub-text' => 'Question'
  )); ?>


  <div class="c_main-wrapper">

    <section class="latestEvent-section">

      <?php get_template_part('parts/sub-heading', null, array(
        'main-text' => 'よくあるご質問',
        'sub-text' => 'Question'
      )); ?>

      <div class="main-container">
        <div class="question-box">
          <div class="question-area">
            <div class="qa-portion">
              <p class="question-prime-text">
                Q.
              </p>
            </div>
            <div class="heading-portion">
              <h3 class="question-text">
                3歳で落ち着きがないのですが大丈夫そうでしょうか？
              </h3>
            </div>
          </div>
          <div class="answer-area">
            <div class="qa-portion">
              <p class="question-prime-text">
                A.
              </p>
            </div>
            <div class="heading-portion">
              <h3 class="answer-text">
                今までたくさんのお子様を見てきましたが、レッスンを通じて今は何をする時間かということを学んでいき、<br>
                他の生徒さん達と楽しく受講していくことができるようになりますのでご安心ください。
              </h3>
            </div>
          </div>
        </div>
        <div class="question-box">
          <div class="question-area">
            <div class="qa-portion">
              <p class="question-prime-text">
                Q.
              </p>
            </div>
            <div class="heading-portion">
              <h3 class="question-text">
                同伴者と離れると泣いてしまうのですが大丈夫でしょうか？
              </h3>
            </div>
          </div>
          <div class="answer-area">
            <div class="qa-portion">
              <p class="question-prime-text">
                A.
              </p>
            </div>
            <div class="heading-portion">
              <h3 class="answer-text">
                大丈夫です。講師自身２名とも３児の母です。<br>
                最初は泣いてしまうかもしれせんが、すぐに慣れていつのまにかバレエに来るのが楽しみになってくれるお子様が多いです。
              </h3>
            </div>
          </div>
        </div>
        <div class="question-box">
          <div class="question-area">
            <div class="qa-portion">
              <p class="question-prime-text">
                Q.
              </p>
            </div>
            <div class="heading-portion">
              <h3 class="question-text">
                発表会に出演させたいのですが、費用が気になります。
              </h3>
            </div>
          </div>
          <div class="answer-area">
            <div class="qa-portion">
              <p class="question-prime-text">
                A.
              </p>
            </div>
            <div class="heading-portion">
              <h3 class="answer-text">
                毎年３月に行われる発表会は衣装代含めて４万円～５万円程になります。
              </h3>
            </div>
          </div>
        </div>
        <div class="question-box">
          <div class="question-area">
            <div class="qa-portion">
              <p class="question-prime-text">
                Q.
              </p>
            </div>
            <div class="heading-portion">
              <h3 class="question-text">
                身体が硬いのですが大丈夫でしょうか？
              </h3>
            </div>
          </div>
          <div class="answer-area">
            <div class="qa-portion">
              <p class="question-prime-text">
                A.
              </p>
            </div>
            <div class="heading-portion">
              <h3 class="answer-text">
                大丈夫です。解剖学、整体の知識を持った講師が無理をすることなく、動きやすく綺麗な身体になるようサポートします。
              </h3>
            </div>
          </div>
        </div>
        <div class="question-box">
          <div class="question-area">
            <div class="qa-portion">
              <p class="question-prime-text">
                Q.
              </p>
            </div>
            <div class="heading-portion">
              <h3 class="question-text">
                お月謝の支払い方法について教えてください
              </h3>
            </div>
          </div>
          <div class="answer-area">
            <div class="qa-portion">
              <p class="question-prime-text">
                A.
              </p>
            </div>
            <div class="heading-portion">
              <h3 class="answer-text">
                銀行振込をお願いしておりますがその他ご希望がありましたらご相談ください。
              </h3>
            </div>
          </div>
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