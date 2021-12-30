<?php
$arrSlides = block_value( 'slide' );
//echo('<pre>'); print_r($arrSlides); echo('</pre>');
$arrPersons = $arrSlides['rows'];

$arrPersons = array_map(function($k) {
  $excerpt = $k['text'];
  //var_dump($excerpt); echo '<br>';

  if($excerpt == ''){
    $excerpt_full = get_the_excerpt( $k['person']['id'] );
    // reduce length to 300 chars
    $excerpt_full = substr($excerpt_full, 0, 300);
    $excerpt = substr($excerpt_full, 0, strrpos($excerpt_full, ' '));
  }

  $k['excerpt'] = $excerpt;
  $k['img_src'] = get_the_post_thumbnail_url( $k['person']['id'] , 'large' );
  $k['img_bg'] = basic_test_theme_get_img_source($k['image']);
  $k['name'] = $k['person']['name'];
  unset($k['person']);
  unset($k['text']);
  return $k;
}, $arrPersons);

//echo('<pre>'); print_r($arrPersons); echo('</pre>');

?>
<section class="block-person-slider">
  <div class="container">
    <div class="my-slick-carousel">
      <?php foreach ($arrPersons as $person) { ?>
      <div class="person-slide" style="background-image: url('<?= $person['img_bg'] ?>'); background-repeat: no-repeat">
        
        <div class="text-wrap">
          <img src="<?= $person['img_src'] ?>">
          <p>"<?= $person['excerpt'] ?>"</p>
          <p><?= $person['name'] ?> / ROLE / COMPANY</p>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>