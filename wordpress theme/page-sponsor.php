<?php
/*

Template name: Sponsor

 */

get_header();

?>

<section class='newPage'>
  <?php
  if ( has_post_thumbnail() ):
   $hero_img = get_the_post_thumbnail_url();
  endif;
  ?>
  <?php if ($hero_img): ?>
  <div class="hero-img" style="background-image:url(<?php echo $hero_img; ?>)"></div>
<?php else: ?>
  <div class="no-hero"></div>
<?php endif; ?>
  <div class="newPageContent">

   <?php
   // TO SHOW THE PAGE CONTENTS
   while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
     <div class="pageTitle">
       <p><?php the_title(); ?></p>
     </div>
       <div class="entry-content-page">
           <?php the_content(); ?> <!-- Page Content -->
       </div><!-- .entry-content-page -->

   <?php
   endwhile; //resetting the page loop
   wp_reset_query(); //resetting the page query
   ?>
  <div class="sponsor-wrapper">

   <?php
         //Loop som är kopplat till Custom post types(CTP). Loopen kollar igenom CPT vid namn "sponsorer"
         //finns det värden så kommer dessa att skrivas ut
   ?>
   <?php $loop = new WP_Query( array( 'post_type' => 'sponsorer', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
   <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

    <a href="" target="_blank" class="sponsors">
      <div class="sponsor-profile">
        <?php
        if (has_post_thumbnail() ) {
          the_post_thumbnail( array( 150, 200 ) );
        }
        ?>
      </div>
      <div class="sponsor-title">
        <h4><?php the_title() ?></h4>
      </div>
    </a>
    <hr class="mobile-divider"  />
   <?php endwhile; wp_reset_query(); //Stänger while loopen ?>
  </div>
</div>
</section>

<?php

get_footer();

?>
