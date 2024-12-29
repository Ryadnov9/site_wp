<?php
/*
Template Name: news
*/
get_header();
?>
<div class="main">
  <div class="container px-4 py-5" id="featured-3">
    <h1 class="header-md">Новини</h1>
    <div class="news-wrapper" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
    <?php
      $team_query = new WP_Query(array(
        'post_type' => 'all-news',
        'posts_per_page' => -1,
        'orderby' => 'date', 
        'order' => 'DESC', 
    ));
    
      
      if ($team_query->have_posts()) :
          while ($team_query->have_posts()) : $team_query->the_post();
              $photo = get_field('photo'); 
              $description = get_field('description'); 
              $custom_link = get_field('custom_link'); 
      ?>
              <div class="feature col" id="feature">
                  <div
                      class="d-inline-flex align-items-center justify-content-center  fs-2 mb-3"
                  >
                      <svg class="bi" width="8em" height="8em" viewBox="0 0 300 300">
                          <image
                              href="<?php echo esc_url($photo); ?>"
                              x="0"
                              y="0"
                              width="300"
                              height="300"
                          />
                          <use xlink:href="#collection" />
                      </svg>
                  </div>
                 
                  <p class="text-center"><?php echo esc_html($description); ?></p>
                  <a
                      href="<?php echo $custom_link ? esc_url($custom_link) : ''; ?>"
                      class="icon-link"
                  >
                      Детальніше
                  </a>
              </div>
      <?php
          endwhile;
          wp_reset_postdata();
      else :
          echo '<p>Новини відсутні.</p>';
      endif;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>