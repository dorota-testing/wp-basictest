<?php
$arrItems = block_value( 'accordion-items' );
//echo('<pre>'); print_r($arrItems); echo('</pre>');
$arrAccordion = $arrItems['rows'];

//echo('<pre>'); print_r($arrAccordion); echo('</pre>');

?>
<section class="block-accordion">
  <div class="container">
    <h2><?php block_field( 'title' ); ?></h2>
    <?php foreach ($arrAccordion as $item) { ?>
      <details>
        <summary><?= $item['tab-text'] ?></summary>
        <?= $item['foldable-content'] ?>
      </details>
    <?php } ?>
  </div>
</section>