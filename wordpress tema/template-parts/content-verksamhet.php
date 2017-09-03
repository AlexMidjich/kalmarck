<?php

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline_verksamhet              = get_field('headline_verksamhet');
$second_headline_verksamhet       = get_field('second_headline_verksamhet');
$bild_verksamhet                  = get_field('bild_verksamhet');
$first_paragraph_verksamhet       = get_field('first_paragraph_verksamhet');
$second_paragraph_verksamhet      = get_field('second_paragraph_verksamhet');
$list_headline_verksamhet         = get_field('list_headline_verksamhet');

?>

<section id="verksamhet">
  <h1><?php echo $headline_verksamhet ?></h1>
  <h3 id="smallheader"><?php echo $second_headline_verksamhet ?></h3>
  <div id="verksamhet_img" style="background-image: url(<?php echo $bild_verksamhet ?>);"></div>
  <div class="margins">
    <p><?php echo $first_paragraph_verksamhet ?></p>
    <p><?php echo $second_paragraph_verksamhet ?></p>
    <h3><?php echo $list_headline_verksamhet ?></h3>
      <ul>
       <?php
             //Loop som är kopplat till Custom post types(CTP). Loopen kollar igenom CPT vid namn "sponsorer"
             //finns det värden så kommer dessa att skrivas ut
       ?>
       <?php $loop = new WP_Query( array( 'post_type' => 'verksamhet', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
    			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

       <li><?php the_title(); ?></li>

       <?php endwhile; wp_reset_query(); //Stänger while loopen ?>
      </ul>
  </div>
</section>
