<?php
$arrCards = block_value( 'cards' );
//echo('<pre>'); print_r($arrCards); echo('</pre>');
$arrPersons = $arrCards['rows'];

$arrPersons = array_map(function($k) {

  $excerpt = get_the_excerpt( $k['person']['id'] );
  // reduce length to 150 chars
  $excerpt = substr($excerpt, 0, 150);
  $result = substr($excerpt, 0, strrpos($excerpt, ' '));
 
  $img_src = get_the_post_thumbnail_url( $k['person']['id'] );
  //echo('<pre>'); print_r($person);  echo('</pre>');
 // die('<br>');
  $k['excerpt'] = $result;
  $k['img_src'] = $img_src;
  unset($k['person']);
  return $k;
}, $arrPersons);

//echo('<pre>'); print_r($arrPersons); echo('</pre>');

?>
<section class="block-person-cards">
  <div class="container">
    <?php foreach ($arrPersons as $person) { ?>
    <div class="person-card">
      <img src="<?= $person['img_src'] ?>">
      <div class="text-wrap">
        <p><?= $person['excerpt'] ?></p>
      </div>
    </div>
    <?php } ?>
  </div>
</section>