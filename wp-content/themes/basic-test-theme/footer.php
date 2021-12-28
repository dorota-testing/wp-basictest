<footer class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="footer-column">
        <h3>Link One</h3>
        <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'footer-menu1',
                  'menu_id'        => 'footer-menu1',
                )
              );
        ?>
      </div>
      <div class="footer-column">
        <h3>Link Two</h3>
        <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'footer-menu2',
                  'menu_id'        => 'footer-menu2',
                )
              );
        ?>
      </div>
      <div class="footer-column">
        <h3>Link Three</h3>
        <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'footer-menu3',
                  'menu_id'        => 'footer-menu3',
                )
              );
        ?>
      </div>
      <div class="footer-column">
        <h3>Last Column</h3>
        <span>Today is <?=date('d M Y');?></span>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <p>Copy right and other text</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</html>