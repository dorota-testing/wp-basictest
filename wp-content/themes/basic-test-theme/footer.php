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
        <h3>Newsletter sign up</h3>
        <input type="text" placeholder="Enter email*">
        <p>
          <a href="tel:01234567890">01234 567 890</a>
          <a href="mailto:hello@company.co.uk">hello@company.co.uk</a>
        </p>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <p>Copy right Company name | Website design and development by Clicky</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</html>