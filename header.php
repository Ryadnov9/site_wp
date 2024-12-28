<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style2.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/desing.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/?page_id=7"
            ><img src="<?php the_field('logo'); ?>" height="30px" alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link active link"
                  aria-current="page"
                  href="/?page_id=7">Голова сторінка</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active link" 
                
                href="/?page_id=9">Статут</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active link" aria-current="page" href="/?page_id=16">Зворотній зв'язок</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link" href="/?page_id=18">Новини</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link" href="/?page_id=20"
                  >Про захід</a
                >
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                id="search"
                type="search"
                placeholder="Пошук"
                aria-label="Search"
                oninput="filterContent()"
              />
            </form>
          </div>
        </div>
      </nav>
</header>