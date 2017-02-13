<?php get_header(); ?>

  <section class="row">
    <div class="eight columns">

<!-- Begin Loop -->
			<?php if ( have_posts() ) {
        while( have_posts() ) {
          /* OUR DATA CONTEXT IS DEFINED 	*/
          the_post(); ?>

          <h2><?php the_title(); ?></h2>
          <?php the_content();
        }
      } ?>
<!-- End Loop -->
    </div>

    <div class="four columns">
      <?php get_sidebar(); ?>
    </div>

  </section>

<?php get_footer(); ?>
