<?php get_header(); ?>

  <section class="row">

    <div class="eight columns">
<!-- Begin Loop -->
			<?php if ( have_posts() ) {
        while( have_posts() ) {
          the_post();
          if ( has_post_thumbnail () ) { ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail('large'); ?>
            </div>
          <?php }
          
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
