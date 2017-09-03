<?php
/*

Template name: Ambassador

 */

get_header();

//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline_ambassador            = get_field('headline_ambassador');
$second_headline_ambassador     = get_field('second_headline_ambassador');
$ambassador_img                 = get_field('ambassador_img');
$ambassador_blog                = get_field('ambassador_blog');
$ambassador_link                = get_field('ambassador_link');
$ambassador_linktxt             = get_field('ambassador_linktxt');
$ambassador_news                = get_field('ambassador_news');
$ambassador_news_link           = get_field('ambassador_news_link');
$ambassador_news_linktxt        = get_field('ambassador_news_linktxt');

?>

<section id='ambassador'>
  <div class="contentwrapper">
    <div class="columnone">
        <img src="<?php echo $ambassador_img ?>"  />
    </div>
    <div class="columntwo">
      <h3><?php echo $headline_ambassador ?></h3>
      <h3><?php echo $second_headline_ambassador ?></h3>
      <p><?php echo $ambassador_blog ?> <a href="<?php echo $ambassador_link ?>" target="_blank"><?php echo $ambassador_linktxt ?></a></p>
      <p><?php echo $ambassador_news?> <a href="<?php echo $ambassador_news_link ?>" target="_blank"><?php echo $ambassador_news_linktxt ?></a></p>
    </div>
  </div>
</section>

<?php

get_footer();

?>
