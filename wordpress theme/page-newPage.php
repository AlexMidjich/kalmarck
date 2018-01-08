<?php
/*

Template name: Ny sida

 */

get_header();


?>

 <section class="newPage">
  <?php
  if ( has_post_thumbnail() ):
   $hero_img = get_the_post_thumbnail_url();
  else:
   $hero_img = get_field('hero_img');
  endif;
  ?>
  <?php if ($hero_img): ?>
  <div class="hero-img" style="background-image:url(<?php echo $hero_img; ?>)"></div>
<?php else: ?>
  <div class="no-hero" style="background-image:url(<?php echo $hero_img; ?>)"></div>
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

  </div>
 </section>
<?php
 get_footer();

?>
