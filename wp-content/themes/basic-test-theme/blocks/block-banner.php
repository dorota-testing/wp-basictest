<?php
$image = basic_test_theme_get_img_source(block_value( 'image' ));
$home = get_home_url();
$button_link = block_value( 'button-link' );
$link = substr($button_link, 0, 1) == '/' ? $button_link : '/'.$button_link;
$href = $home.$link;
?>
<section class="block-banner">
  <div class="container" style="background-image: url('<?= $image ?>'); background-repeat: no-repeat">
    <div class="text-wrapper">
      <h1><?php block_field( 'title' ); ?></h1>
      <?php block_field( 'headline' ); ?>
      <a href="<?= $href ?>" class="button button-white"><?php block_field( 'button-text' ); ?></a>
    </div>
  </div>
</section>