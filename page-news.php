<?php
/*
Template Name: news
*/
get_header();
?>
<div class="main">
  <div class="container px-4 py-5" id="featured-3">
    <h1 class="header-md">Новини</h1>
    <div class="news-wrapper">
      <div class="feature col">
        <div
          class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"
          id="feature-icon"
        >
          <svg
            class="bi"
            width="8em"
            height="8em"
            viewBox="0 0 250 250"
            preserveAspectRatio="xMidYMid slice"
          >
            <image
              href="<?php echo get_template_directory_uri(); ?>//image/image.png"
              x="0"
              y="0"
              width="250"
              height="250"
              preserveAspectRatio="none"
            />
            <use xlink:href="#collection" />
          </svg>
        </div>
        <p>
          У ХДУ обговорили відпрацювання дорожньої карти <br />
          та створення Асоціації релокованих університетів
        </p>
        <a href="<?php echo site_url('/?page_id=72/'); ?>" class="icon-link">Детальніше</a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>