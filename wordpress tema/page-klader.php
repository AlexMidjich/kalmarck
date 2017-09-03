<?php
/*

Template name: Klader

 */

get_header();
//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline_klader                               = get_field('headline_klader');
$paragraph_klader                              = get_field('paragraph_klader');
$img_ett_klader                                = get_field('img_ett_klader');
$img_tva_klader                                = get_field('img_tva_klader');

?>

<section id='klader'>
  <h2><?php echo $headline_klader ?></h2>
  <p><?php echo $paragraph_klader ?></p>
</section>
<section>
  <div class="contentwrapper">
    <div class="bigimg">
      <img src="<?php echo $img_ett_klader ?>" alt>
    </div>
    <div class="bigimg">
      <img src="<?php echo $img_tva_klader ?>" alt>
    </div>
  </div>
</section>

<?php

get_footer();

?>
