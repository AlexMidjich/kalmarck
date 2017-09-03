<?php
/*

Template name: Sponsor

 */

get_header();

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline_sponsor                             = get_field('headline_sponsor');
$paragraph_sponsor                            = get_field('paragraph_sponsor');

?>

<section id='sponsor'>
  <h2><?php echo $headline_sponsor ?></h2>
  <p><?php echo $paragraph_sponsor ?></p>
  <div class="contentwrapper">

   <?php
         //Loop som är kopplat till Custom post types(CTP). Loopen kollar igenom CPT vid namn "sponsorer"
         //finns det värden så kommer dessa att skrivas ut
   ?>
   <?php $loop = new WP_Query( array( 'post_type' => 'sponsorer', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
   <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="rows">
      <?php $bild = get_the_post_thumbnail_url(); ?>
      <img src="<?php echo $bild ?>" class="smallimg">
      <h4><?php the_title() ?></h4>
    </div>
   <?php endwhile; wp_reset_query(); //Stänger while loopen ?>
  </div>
</section>

<?php

get_footer();

?>
