<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair Display:wght@400;500&display=swap" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Noto Serif JP:wght@200;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Charmonman:wght@400&display=swap" />
  <script src="https://kit.fontawesome.com/8c26bedd20.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="logo-area">
      <a class="header-logo-link" href="<?= esc_url(home_url()); ?>">
        <img class="logo-icon" loading="lazy" alt="" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/header_logo.png" />
      </a>
    </div>
    <div class="menu-area">
      <ul class="menu-list">
        <a class="menu-link" href="<?= esc_url(home_url('/about/')); ?>">
          <li class="menu-item">
            <p class="top-text">about</p>
            <p class="bottom-text">教室紹介</p>
          </li>
        </a>
        <a class="menu-link" href="<?= esc_url(home_url('/beginner/')); ?>">
          <li class="menu-item">
            <p class="top-text">for beginner</p>
            <p class="bottom-text">初めての方</p>
          </li>
        </a>
        <a class="menu-link" href="<?= esc_url(home_url('/class/')); ?>">
          <li class="menu-item">
            <p class="top-text">class information</p>
            <p class="bottom-text">クラス紹介</p>
          </li>
        </a>
        <a class="menu-link" href="<?= esc_url(home_url('/price/')); ?>">
          <li class="menu-item">
            <p class="top-text">price</p>
            <p class="bottom-text">料金</p>
          </li>
        </a>
        <a class="menu-link" href="<?= esc_url(home_url('/recital/')); ?>">
          <li class="menu-item">
            <p class="top-text">recital</p>
            <p class="bottom-text">発表会</p>
          </li>
        </a>
        <a class="menu-link" href="<?= esc_url(home_url('/question/')); ?>">
          <li class="menu-item">
            <p class="top-text">Question</p>
            <p class="bottom-text">Q&A</p>
          </li>
        </a>
      </ul>
      <a class="contact-link" href="<?= esc_url(home_url('/contact/')); ?>">
        <div class="contact-box">
          <div class="icon-portion">
            <img class="arrow-icon" src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/arrow-icon.png" alt="arrow">
          </div>
          <div class="text-portion">
            <p class="toplink-text">
              まずは無料で
            </p>
            <p class="bottomlink-text">
              見学・体験
            </p>
          </div>
        </div>
      </a>

      <button id="js-humberger" type="button" class="humberger" aria-controls="navigation" aria-expanded="false">
        <span class="humberger__line"></span>
      </button>
    </div>
  </header>