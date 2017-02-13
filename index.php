<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Jessica (JMF) Arnieri Hernandez Blank Template</title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?> " />
</head>

<body>

  <div class="container">
    <header>
      <div class="twelve columns">
        <h1>Blank Wordpress Template</h1>
        <p>This is my WordPress template.</p>
      </div>
    </header>

    <section class="row">
      <div class="twelve columns">
        <!-- Begin Loop -->
        <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post();
            }
          }
        ?>
        <!-- End Loop -->
      </div>
    </section>

    <footer class="row">
      <div class="twelve columns">
        <h2>Footer Content - yessireebob</h2>
        <p>So much content will go here.</p>
      </div>
    </footer>
  </div>

</body>

</html>
