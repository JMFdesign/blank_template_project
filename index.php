<?php get_header(); ?>

<!-- Begin Section -->
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
<!-- End Section -->

<?php get_footer(); ?>
