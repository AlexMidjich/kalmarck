<?php
/*

Hero

*/

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline                             = get_field('headline');
$second_headline                      = get_field('second_headline');

if ( has_post_thumbnail() ) {
  $hero_img = get_the_post_thumbnail_url();
}
?>

<section class='herosection' id="hem" style="background-image:url(<?php echo $hero_img; ?>)">
  <?php $loop = new WP_Query( array( 'post_type' => 'kampanj', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
     <?php while( $loop->have_posts() ) : $loop->the_post();

  $first_campain               = get_field('first_campain');
  $link_campain_one            = get_field('link_campain_one');
  $second_campain              = get_field('second_campain');
  $link_campain_two            = get_field('link_campain_two');
  $campain_link                = get_field('campain_link');

  ?>

  <div class="campain">
      <a href="<?php echo $campain_link ?>"><div class="campain-round">
        <?php the_title(); ?>
      </div></a>
  </div>
       <?php endwhile; wp_reset_query(); //Stänger while loopen ?>
  <div class="heroheader">
   <h1 class="fadeRight"><?php echo $headline ?></h1>
   <h3 class="fadeLeft"><?php echo $second_headline ?></h3>
  </div>
</section>
