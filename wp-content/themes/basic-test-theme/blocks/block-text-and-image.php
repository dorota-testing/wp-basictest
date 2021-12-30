<?php
$image = basic_test_theme_get_img_source(block_value( 'image' ));
?>
<section class="block-text-and-image">
  <div class="container">
    <div class="text-wrapper">
      <h2><?php block_field( 'title' ); ?></h2>
      <strong><p><?php block_field( 'headline' ); ?></p></strong>
      <?php block_field( 'text' ); ?>
    </div>
    <div class="image-wrapper">
      <img src="<?= $image ?>" alt="Image for section <?php block_field( 'title' ); ?>">
    </div>
  </div>
</section>