<?php
/*

Mainsection

*/

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline                             = get_field('headline');
$second_headline                      = get_field('second_headline');

?>
<section id='mainsection'>
 <div id="mainheader">
   <h1><?php echo $headline ?></h1>
   <h3><?php echo $second_headline ?></h3>
 </div>
</section>
