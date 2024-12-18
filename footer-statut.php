<footer class="bg-white text-black" id="footer-s">
      <div class="container footer">
        <div class="row">
          <div class="col-md-4 text-center logo-2">
            <img src="<?php the_field('logo'); ?>" alt="Логотип" />
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-4 txt-1">
                <h6>Громадська організація</h6>
                <p><?php the_field('community'); ?>
                  
                </p>
              </div>
              <div class="col-md-4 txt-1">
                <h6>Контакти</h6>
                <p><?php the_field('number'); ?></p>
                <p><?php the_field('e-mail'); ?></p>
              </div>
              <div class="col-md-4 txt-1">
                <h6>ПОШТОВА АДРЕСА</h6>
                <p><?php the_field('Postal_addresses'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>


