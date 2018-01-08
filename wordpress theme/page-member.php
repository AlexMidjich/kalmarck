<?php
/*

Template name: Medlem

 */
get_header();

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

//Steg 1
$img_step_one                        = get_field('img_step_one');
$step_one                            = get_field('step_one');
//Steg 2
$img_step_two                        = get_field('img_step_two');
$step_two                            = get_field('step_two');
//Steg 3
$img_step_three                      = get_field('img_step_three');
$step_three                          = get_field('step_three');

if ( has_post_thumbnail() ) {
  $hero_img = get_the_post_thumbnail_url();
}
?>
<section class="newPage">
  <?php if ($hero_img): ?>
  <div class='medlem-hero' style="background-image:url(<?php echo $hero_img ?>)"></div>
<?php else: ?>
  <div class="no-hero" style="background-image:url(<?php echo $hero_img; ?>)"></div>
<?php endif; ?>

  <!-- Bli medlem -->
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
      <div class="contentwrapper">
        <div class="member-columns">
          <div class="medlemsimg">
            <img src="<?php echo $img_step_one; ?>" alt="steg 1"/>
          </div>
          <div class="medlemstxt">
            <?php echo $step_one; ?>
          </div>
        </div>
        <hr class="mobile-divider"  />
        <div class="member-columns">
          <div class="medlemsimg">
            <img src="<?php echo $img_step_two; ?>" alt="steg 1"/>
          </div>
          <div class="medlemstxt">
            <?php echo $step_two; ?>
          </div>
        </div>
        <hr class="mobile-divider"  />
        <div class="member-columns">
          <div class="medlemsimg">
            <img src="<?php echo $img_step_three; ?>" alt="steg 1"/>
          </div>
          <div class="medlemstxt">
            <?php echo $step_three; ?>
          </div>
        </div>
      </div>
    </div>
</section>
<?php

get_footer();

?>
