<?php
/*
Template Name: abouttheevent
*/
get_header();
?>
<main>
  <div class="container px-4 py-5" id="featured-3">
    <h1 class="header-md">Про захід</h1>
    <div class="text" id="text">
      <p class="text-1" id="tex-1"><?php the_field('gate_link'); ?></p>
    </div>
  </div>
</main>
<?php get_template_part('footer', 'statut'); ?>
