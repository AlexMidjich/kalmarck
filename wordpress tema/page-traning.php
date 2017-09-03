<?php
/*

Template name: Traning

 */

get_header();

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

//Avsnitt ett
$bgimg_traning                               = get_field('bgimg_traning');
$headline_traning                            = get_field('headline_traning');
$paragraph_traning                           = get_field('paragraph_traning');
$img_column                                  = get_field('img_column');

?>

<section id='traning' style="background-image:url(<?php echo $bgimg_traning ?>)">

</section>

 <!-- Upptäck -->
<section id='tider'>
 <div id="heading">
   <h2><?php echo $headline_traning?></h2>
     <p><?php echo $paragraph_traning ?></p>
 </div>
 <div class="contentwrapper">
  <div class="columnone">
   <div class="margins">


    <?php
          //Loop som är kopplat till Custom post types(CTP). Loopen kollar igenom CPT vid namn "traningstider"
          //finns det värden så kommer dessa att skrivas ut
    ?>
    <?php $loop = new WP_Query( array( 'post_type' => 'traningstider', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
    <?php while( $loop->have_posts() ) : $loop->the_post();

    //Variablarna hämtar från Custom post types. För att ändra värden på dessa variablar
    //behöver man gå in på den CTP som är kopplad till just dessa variablar.
    //Variablar för träningstider
    $mandag                      = get_field('mandag');
    $tisdag                      = get_field('tisdag');
    $onsdag                      = get_field('onsdag');
    $torsdag                     = get_field('torsdag');
    $fredag                      = get_field('fredag');
    $lordag                      = get_field('lordag');
    $sondag                      = get_field('sondag');
    //Fartgrupper
    $fartgrupper_titel           = get_field('fartgrupper_titel');
    $grupp_ett                   = get_field('grupp_ett');
    $grupp_tva                   = get_field('grupp_tva');
    $grupp_tre                   = get_field('grupp_tre');
    //Distans
    $distans_titel               = get_field('distans_titel');
    $distans_grupp_ett           = get_field('distans_grupp_ett');
    $distans_grupp_tva           = get_field('distans_grupp_tva');
    $distans_grupp_tre           = get_field('distans_grupp_tre');
    $distans_info                = get_field('distans_info');
    //Seniorer
    $senior_info                 = get_field('senior_info');
    $mandag_senior               = get_field('mandag_senior');
    $tisdag_senior               = get_field('tisdag_senior');
    $onsdag_senior               = get_field('onsdag_senior');
    $mandag_senior               = get_field('torsdag_senior');
    $fredag_senior               = get_field('fredag_senior');
    $lordag_senior               = get_field('lordag_senior');
    $sondag_senior               = get_field('sondag_senior');
    $kontakt_info                = get_field('kontakt_info')

    ?>

    <ul>
     <?php //Träningstider ?>
     <p class="traningstxt"><?php the_title(); ?></p>
     <?php if( !empty($mandag) ): //Kollar ifall det finns någon värde i variablen, finns det så skrivs värdet ut. ?>
     <li><?php echo $mandag; ?></li>
     <?php endif; ?>
     <?php if( !empty($tisdag) ): ?>
     <li><?php echo $tisdag; ?></li>
     <?php endif; ?>
     <?php if( !empty($onsdag) ): ?>
     <li><?php echo $onsdag; ?></li>
     <?php endif; ?>
     <?php if( !empty($torsdag) ): ?>
     <li><?php echo $torsdag; ?></li>
     <?php endif; ?>
     <?php if( !empty($fredag) ): ?>
     <li><?php echo $fredag; ?></li>
     <?php endif; ?>
     <?php if( !empty($lordag) ): ?>
     <li><?php echo $lordag; ?></li>
     <?php endif; ?>
     <?php if( !empty($sondag) ): ?>
     <li><?php echo $sondag; ?></li>
     <?php endif; ?>
     <?php //Fartgrupper ?>
     <?php if( !empty($fartgrupper_titel) ): ?>
     <p class="traningstxt"><?php echo $fartgrupper_titel ?></p>
     <?php endif; ?>
     <?php if( !empty($grupp_ett) ): ?>
     <li><?php echo $grupp_ett; ?></li>
     <?php endif; ?>
     <?php if( !empty($grupp_tva) ): ?>
     <li><?php echo $grupp_tva; ?></li>
     <?php endif; ?>
     <?php if( !empty($grupp_tre) ): ?>
     <li><?php echo $grupp_tre; ?></li>
     <?php endif; ?>
     <?php //Distanser ?>
     <?php if( !empty($distans_titel) ): ?>
     <p class="traningstxt"><?php echo $distans_titel ?></p>
     <?php endif; ?>
     <?php if( !empty($distans_grupp_ett) ): ?>
     <li><?php echo $distans_grupp_ett; ?></li>
     <?php endif; ?>
     <?php if( !empty($distans_grupp_tva) ): ?>
     <li><?php echo $distans_grupp_tva; ?></li>
     <?php endif; ?>
     <?php if( !empty($distans_grupp_tre) ): ?>
     <li><?php echo $distans_grupp_tre; ?></li>
     <?php endif; ?>
     <?php if( !empty($distans_info) ): ?>
     <p class="traningstxt"><?php echo $distans_info ?></p>
     <?php endif; ?>
     <?php //Seniorer ?>
     <?php if( !empty($senior_info) ): ?>
     <p class="traningstxt"><?php echo $senior_info ?></p>
     <?php endif; ?>
     <?php if( !empty($mandag_senior) ): ?>
     <li><?php echo $mandag_senior ?></li>
     <?php endif; ?>
     <?php if( !empty($tisdag_senior) ): ?>
     <li><?php echo $tisdag_senior ?></li>
     <?php endif; ?>
     <?php if( !empty($onsdag_senior) ): ?>
     <li><?php echo $onsdag_senior ?></li>
     <?php endif; ?>
     <?php if( !empty($torsdag_senior) ): ?>
     <li><?php echo $torsdag_senior ?></li>
     <?php endif; ?>
     <?php if( !empty($fredag_senior) ): ?>
     <li><?php echo $fredag_senior ?></li>
     <?php endif; ?>
     <?php if( !empty($lordag_senior) ): ?>
     <li><?php echo $lordag_senior ?></li>
     <?php endif; ?>
     <?php if( !empty($sondag_senior) ): ?>
     <li><?php echo $sondag_senior ?></li>
     <?php endif; ?>
     <?php if( !empty($kontakt_info) ): ?>
     <p class="traningstxt"><?php echo $kontakt_info ?></p>
     <?php endif; ?>
    </ul>
   <?php endwhile; wp_reset_query(); //Stänger while loopen?>
   </div>
  </div>
  <div class="columntwo">
    <img src="<?php echo $img_column ?>"  />
  </div>
 </div>
 </section>
 <section id="traningsinfo">
   <div id="heading">
   <?php

   //Variablar som hämtas från Advanced custom fields (Egna fält)
   //Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.
   //Avsnitt två
   $headline_infor_traning         = get_field('headline_infor_traning');
   $paragraph_ett_infor_traning    = get_field('paragraph_ett_infor_traning');
   $paragraph_tva_infor_traning    = get_field('paragraph_tva_infor_traning');
   $facebookgrupp_link             = get_field('facebookgrupp_link');
   $facebookgrupp_link_txt         = get_field('facebookgrupp_link_txt');
   ?>
        <h3><?php echo $headline_infor_traning ?></h3>

        <?php
              //Loop som är kopplat till Custom post types(CTP). Loopen kollar igenom CPT vid namn "infor_traning"
              //finns det värden så kommer dessa att skrivas ut
        ?>
        <?php $loop = new WP_Query( array( 'post_type' => 'infor_traning', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
         <p><?php the_title(); ?></p>
        <?php endwhile; wp_reset_query(); //Stänger while loopen ?>

         <p class="traningstxt"><?php echo $paragraph_ett_infor_traning ?></p>
         <p class="traningstxt"><?php echo $paragraph_tva_infor_traning ?> <a href="<?php echo $facebookgrupp_link ?>" target="_blank"><?php echo $facebookgrupp_link_txt ?></a>.</p>
   </div>
 </section>
 <!--Video-->
 <section id="video">
  <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F175016142544675%2Fvideos%2F925582400821375%2F&show_text=0&width=560" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"  ></iframe>
 </section>
 <section id="grupptraning">

  <?php
  //Variablar som hämtas från Advanced custom fields (Egna fält)
  //Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.
  //Avsnitt tre - Cykla i brupp
  $headline_gruppcykling             = get_field('headline_gruppcykling');
  $paragraph_ett_gruppcykling        = get_field('paragraph_ett_gruppcykling');
  $headline_tva_gruppcykling         = get_field('headline_tva_gruppcykling');
  $paragraph_tva_gruppcykling        = get_field('paragraph_tva_gruppcykling');
  $headline_tre_gruppcykling         = get_field('headline_tre_gruppcykling');
  $paragraph_tre_gruppcykling        = get_field('paragraph_tre_gruppcykling');
  $headline_fyra_gruppcykling        = get_field('headline_fyra_gruppcykling');
  $paragraph_fyra_gruppcykling       = get_field('paragraph_fyra_gruppcykling');
  $headline_fem_gruppcykling         = get_field('headline_fem_gruppcykling');
  $paragraph_fem_gruppcykling        = get_field('paragraph_fem_gruppcykling');
  $headline_sex_gruppcykling         = get_field('headline_sex_gruppcykling');
  $paragraph_sex_gruppcykling        = get_field('paragraph_sex_gruppcykling');

   ?>

   <h3><?php echo $headline_gruppcykling  ?></h3>
     <p class="paragraftext"><?php echo $paragraph_ett_gruppcykling ?></p>
     <h4><?php echo $headline_tva_gruppcykling ?></h4>
       <p class="paragraftext"><?php echo $paragraph_tva_gruppcykling ?></p>

     <h4><?php echo $headline_tre_gruppcykling ?></h4>
       <p class="paragraftext"><?php echo $paragraph_tre_gruppcykling ?></p>
     <h4><?php echo $headline_fyra_gruppcykling ?></h4>
       <p class="paragraftext"><?php echo $paragraph_fyra_gruppcyklin ?>.</p>
     <h4><?php echo $headline_fem_gruppcykling ?></h4>
       <p class="paragraftext"><?php echo $paragraph_fem_gruppcykling ?></p>
     <h4><?php echo $headline_sex_gruppcykling ?></h4>
       <p class="paragraftext"><?php echo $paragraph_sex_gruppcykling ?></p>
       <ul>
        <?php
              //Loop som är kopplat till Custom post types(CTP). Loopen kollar igenom CPT vid namn "tecken"
              //finns det värden så kommer dessa att skrivas ut
        ?>
        <?php $loop = new WP_Query( array( 'post_type' => 'tecken', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <li><?php echo the_title(); ?></li>

       <?php endwhile; wp_reset_query(); //Stänger while loopen ?>
       </ul>
 </section>

<?php

get_footer();

 ?>
