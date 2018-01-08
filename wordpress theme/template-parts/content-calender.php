<?php

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline_pa_gang                    = get_field('headline_pa_gang');
$bild_pa_gang                        = get_field('bild_pa_gang');

?>

<section class="pagang" id="pagang">
  <h1><?php echo $headline_pa_gang ?></h1>
  <div class="kalender">
   <iframe src="https://calendar.google.com/calendar/embed?src=bm8njmblkc2n29v8i4dn9dqip8%40group.calendar.google.com&ctz=Europe%2FStockholm" style="border: 0" width="600" height="400" frameborder="0" scrolling="no"></iframe>
  </div>
  <div class="eventwrapper">

   <?php
         //Loop som är kopplat till Custom post types(CTP). Loopen kollar igenom CPT vid namn "pa_gang"
         //finns det värden så kommer dessa att skrivas ut
   ?>
   <?php $loop = new WP_Query( array( 'post_type' => 'pa_gang', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
			<?php while( $loop->have_posts() ) : $loop->the_post();

   $lank_text_pa_gang               = get_field('lank_text_pa_gang');

   ?>

    <div class="rows">
      <a href="<?php echo $lank_text_pa_gang ?>"><h3><?php the_title(); ?></h3>
      <p><?php the_content(); ?></p></a>
    </div>

   <?php endwhile; wp_reset_query(); //Stänger while loopen ?>
  </div>
</section>
<section class="bgmiddle" style="background-image: url(<?php echo $bild_pa_gang; ?>); width: 100%; height: 300px;">
</section>
