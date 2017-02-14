<?php
/* Template: 404 page (Not Found) */

  get_header(); ?>

  <div class="row">
    <div class="eight columns">
      <h1>Not Found</h1>
      <h2>This is a little embarassing...</h2>
      <p>There's nothing at this location. Maybe a quick search will help?</p>

      <h2>Try searching for what you need:</h2>
      <?php get_sidebar(); ?>
    </div>

    <div class="four columns">
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php get_footer(); ?>
