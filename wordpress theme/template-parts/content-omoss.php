<?php

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline_om_oss                      = get_field('headline_om_oss');
$headline_styrelsen                   = get_field('headline_styrelsen');
$bild_styrelsen                       = get_field('bild_styrelsen');
$bildtext_styrelsen                   = get_field('bildtext_styrelsen');
$headline_ledarna                     = get_field('headline_ledarna');
$bild_ledarna                         = get_field('bild_ledarna');
$bildtext_ledarna                     = get_field('bildtext_ledarna');

?>

<section id="omoss">
  <h1><?php echo $headline_om_oss ?></h1>
  <div class="imgwrapper">
    <div class="smallimg">
      <h3><?php echo $headline_styrelsen ?></h3>
      <img src="<?php echo $bild_styrelsen ?>" />
      <p class="imgtext"><?php echo $bildtext_styrelsen ?></p>
    </div>
    <div class="smallimg">
      <h3><?php echo $headline_ledarna ?></h3>
      <img src="<?php echo $bild_ledarna ?>" />
      <p class="imgtext"><?php echo $bildtext_ledarna ?></p>
    </div>
  </div>
  <div id="eventwrapper">

   <?php
         //Loop som är kopplat till Custom post types(CTP). Loopen kollar igenom CPT vid namn "om_oss"
         //finns det värden så kommer dessa att skrivas ut
   ?>
   <?php $loop = new WP_Query( array( 'post_type' => 'om_oss', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
			<?php while( $loop->have_posts() ) : $loop->the_post();

   $lank_text_om_oss               = get_field('lank_text_om_oss');

   ?>

    <div class="rows">
      <a href="<?php echo $lank_text_om_oss ?>"><h3><?php the_title() ?></h3>
      <p><?php the_content() ?></p></a>
    </div>
   <?php endwhile; wp_reset_query(); //Stänger while loopen ?>
  </div>
</section>
