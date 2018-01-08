<?php

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline_content                 = get_field('headline_content');
$bild_verksamhet                  = get_field('bild_verksamhet');
$text_content                     = get_field('text_content');


?>

<section class="verksamhet" id="verksamhet">
  <?php echo $headline_content; ?>
  <div class="verksamhet_img" style="background-image: url(<?php echo $bild_verksamhet ?>);"></div>
  <div class="margins">
    <?php echo $text_content; ?>
  </div>
</section>
