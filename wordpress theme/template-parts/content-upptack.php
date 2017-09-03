<?php

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline_upptack                     = get_field('headline_upptack');
$second_headline_upptack              = get_field('second_headline_upptack');
$first_paragraph_upptack              = get_field('first_paragraph_upptack');
$second_paragraph_upptack             = get_field('second_paragraph_upptack');
$third_paragraph_upptack              = get_field('third_paragraph_upptack');

?>

<section id='upptack'>
  <div id='textwrapper'>
    <h2><?php echo $headline_upptack ?></h2>
    <h3><?php echo $second_headline_upptack ?></h3>
    <p><?php echo $first_paragraph_upptack ?></p>
    <p><?php echo $second_paragraph_upptack ?></p>
    <p><?php echo $third_paragraph_upptack ?></p>
  </div>
</section>
