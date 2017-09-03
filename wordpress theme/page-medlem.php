<?php
/*

Template name: Medlem

 */
get_header();

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$bgimg_medlem                        = get_field('bgimg_medlem');
$headline_medlem                     = get_field('headline_medlem');
$first_paragraph_medlem              = get_field('first_paragraph_medlem');
//Avgifter
$headline_avgifter                   = get_field('headline_avgifter');
$avgift_vuxna                        = get_field('avgift_vuxna');
$avgift_familj                       = get_field('avgift_familj');
$avgift_ungdom                       = get_field('avgift_ungdom');
//Steg 1
$img_steg_ett                        = get_field('img_steg_ett');
$text_steg_ett                       = get_field('text_steg_ett');
$epost_steg_ett                      = get_field('epost_steg_ett');
$epost_steg_ett_text                 = get_field('epost_steg_ett_text');
//Steg 2
$img_steg_tva                        = get_field('img_steg_tva');
$text_steg_tva                       = get_field('text_steg_tva');
//Steg 3
$img_steg_tre                        = get_field('img_steg_tre');
$text_steg_tre                       = get_field('text_steg_tre');

?>
<section id='medlem' style="background-image:url(<?php echo $bgimg_medlem ?>)">
</section>

    <!-- Bli medlem -->
    <section id='medlemheader'>
      <h2><?php echo $headline_medlem ?></h2>
      <p><?php echo $first_paragraph_medlem ?></p>
      <h4><?php echo $headline_avgifter ?></h4>
        <p><?php echo $avgift_vuxna ?></p>
        <p><?php echo $avgift_familj ?></p>
        <p><?php echo $avgift_ungdom ?></p>
    </section>
      <div class="contentwrapper">
        <div class="threecolumns">
          <div class="medlemsimg">
            <img src="<?php echo $img_steg_ett ?>" class="smallimg">
          </div>
          <div class="medlemstxt">
            <p><?php echo $text_steg_ett  ?> <a href="mailto:<?php echo $epost_steg_ett ?>"><?php echo $epost_steg_ett_text ?></a></p>
          </div>
        </div>
        <div class="threecolumns">
          <div class="medlemsimg">
            <img src="<?php echo $img_steg_tva ?>" class="smallimg">
          </div>
          <div class="medlemstxt">
            <p><?php echo $text_steg_tva ?></p>
          </div>
        </div>
        <div class="threecolumns">
          <div class="medlemsimg">
            <img src="<?php echo $img_steg_tre ?>" class="smallimg">
          </div>
          <div class="medlemstxt">
            <p><?php echo $text_steg_tre ?></p>
          </div>
        </div>
      </div>
    </section>

<?php

get_footer();

?>
