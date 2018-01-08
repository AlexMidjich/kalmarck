<?php

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$content_explore                      = get_field('content_explore');

?>

<section class='upptack' id="upptack">
  <div class='textwrapper'>
    <?php echo $content_explore; ?>
  </div>
</section>
