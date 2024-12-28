<?php get_header(); ?>
<main>
<div class="header">
      <div class="">
        <h3 class="main-header"><?php the_field('title'); ?></h3>
        <p class="subtext"><?php the_field('subtitle1'); ?></p>
        <p class="subtext"><?php the_field('subtitle2'); ?></p>
      </div>
    </div>
    <div class="container px-4 py-5 container-main" id="featured">
      <h2 class="pb-2 border-bottom"></h2>
      <p class="intro" id="intro" style="text-align: center;"><?php the_field('intro'); ?></p>

      <div class="row g-4 py-5 row-cols1-1 row-cols-lg-4 align-items-stretch" id="main">

      <?php
      $team_query = new WP_Query(array(
        'post_type' => 'team-members',
        'posts_per_page' => -1,
        'orderby' => 'date', 
        'order' => 'ASC', 
    ));
    
      
      if ($team_query->have_posts()) :
          while ($team_query->have_posts()) : $team_query->the_post();
              $photo = get_field('photo'); 
              $description = get_field('description'); 
              $custom_link = get_field('custom_link'); 
      ?>
              <div class="feature col" id="feature">
                  <div
                      class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3"
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
                  <h3 class="fs-2 text-body-emphasis text-center" id="name">
                    <?php 
                    $title_words = explode(' ', get_the_title()); 
                   foreach ($title_words as $word) {
                   echo $word . '<br>'; 
                    }
                   ?>
                   </h3>
                  <p class="text-center"><?php echo esc_html($description); ?></p>
                  <div class="feature-footer">
    <a href="<?php echo $custom_link ? esc_url($custom_link) : '#'; ?>" class="icon-link">
        Детальніше
    </a>
</div>
              </div>
      <?php
          endwhile;
          wp_reset_postdata();
      else :
          echo '<p>Команда поки відсутня.</p>';
      endif;
      ?>
      </div>

      <hr class="hr" />

      <div class="container px-4 py-4" id="featured-3" id="py-5">
        <h1 class="header-md">Візія</h1>
        <div class="text" id="text">
          <p class="text-1" id="text-1"><?php the_field('visia'); ?></p>
        </div>
      </div>
      <hr class="hr" />
      <div class="container px-4 py-4" id="featured-3">
        <h1 class="header-md">Мета</h1>
        <div class="text" id="text">
          <p class="text-1" id="tex-1"><?php the_field('meta'); ?></p>
        </div>
      </div>
      <hr class="hr" />
      <div
        class="container px-4 py-4"
        id="featured-3 featured-2 direction"
        style="margin-top: 53px"
      >
        <h1 class="header-md">Напрямки</h1>
        <div class="text" id="text">
          <ul class="list">
            <p class="text-2" id="text-2">Напрямки діяльності:</p>
            <li class="li"><?php the_field('nap1'); ?></li>
            <li class="li"><?php the_field('nap2'); ?></li>
            <li class="li"><?php the_field('nap3'); ?></li>
            <li class="li"><?php the_field('nap4'); ?></li>
          </ul>
        </div>
      </div>

      <hr class="hr" />
      <h3 class="fs-2 text-body-emphasis" id="news-hed">Останні новини</h3>
      



      <div id="newsSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
  <div class="carousel-inner">
    <?php
    
    $news_query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 10, 
    ]);

    if ($news_query->have_posts()) :
        $active_class = 'active'; 
        while ($news_query->have_posts()) : $news_query->the_post();
            
            $news_image = get_field('news_image'); 
            $news_description = get_field('news_description');
            $link = get_field('link'); 
            
            $post_link = $link ? $link : get_permalink(); 
    ?>
            <div class="carousel-item <?php echo $active_class; ?>">
                <img src="<?php echo esc_url($news_image); ?>" class="d-block w-100" alt="<?php the_title(); ?>" />
                <div class="carousel-caption d-block">
                    <a href="<?php echo esc_url($post_link); ?>" class="news-1">
                        <h5><?php the_title(); ?></h5>
                    </a>
                    <p class="text-news"><?php echo esc_html($news_description); ?></p>
                </div>
            </div>
    <?php
            $active_class = ''; 
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Новини поки що відсутні.</p>';
    endif;
    ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#newsSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Попередня</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#newsSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Наступна</span>
  </button>
</div>




      <div class="ratio ratio-21x9 map">
        <iframe
          class="map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2739.0487661724023!2d32.62753631195133!3d46.64555172099739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c41aabdda30403%3A0x65d34033537796fb!2z0KXQtdGA0YHQvtC90YHRjNC60LjQuSDQtNC10YDQttCw0LLQvdC40Lkg0YPQvWnQstC10YDRgdC40YLQtdGC!5e0!3m2!1sru!2sru!4v1731947233454!5m2!1sru!2sru"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>


<?php get_footer(); ?>