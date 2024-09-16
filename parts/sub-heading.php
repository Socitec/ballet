<!-- template-heading -->
<div class="t_sub-heading_main-area">
  <h2 class="t_sub-heading_main-text">
    <?= $args['main-text'] ?>
    <?php
    if (isset($args['sub-text'])) {
      echo ("
    <span class='t_sub-heading_sub-text'>{$args['sub-text']} </span>
    ");
    }
    ?>

  </h2>
  <?php
  if (isset($args['bottom-text'])) {
    echo ("
    <P class='t_sub-heading_bottom-text'>{$args['bottom-text']} </p>
    ");
  }
  ?>
  <div class="t_sub-heading_border-box">
    <div class="t_sub-heading_border-item"></div>
  </div>
</div>