<?php
/*

Template name: Historia

 */

get_header();
//Variablar som hämtas från Advanced custom fields (Egna fält)
//Värdena för variablarna skrivs in på respektive sida som fälten är kopplade till.

$headline_historia                    = get_field('headline_historia');
$second_headline_historia             = get_field('second_headline_historia');
$first_paragraph_historia             = get_field('first_paragraph_historia');
$left_img_to_first_paragraph          = get_field('left_img_to_first_paragraph');
$left_img_text                        = get_field('left_img_text');
$rigth_img_to_first_paragraph         = get_field('rigth_img_to_first_paragraph');
$right_img_text                       = get_field('right_img_text');
$second_paragraph                     = get_field('second_paragraph');
$second_paragraph_img                 = get_field('second_paragraph_img');
$second_paragraph_img_text            = get_field('second_paragraph_img_text');
$third_paragraph                      = get_field('third_paragraph');
$third_paragraph_img                  = get_field('third_paragraph_img');
$left_bottom_img                      = get_field('left_bottom_img');
$left_bottom_img_text                 = get_field('left_bottom_img_text');
$right_bottom_img                     = get_field('right_bottom_img');
$right_bottom_img_text                = get_field('right_bottom_img_text');
$small_img_leftside                   = get_field('small_img_leftside');
$small_img_leftside_txt               = get_field('small_img_leftside_txt');
?>

<section class="history">
  <div class="history-header">
    <h1><?php echo $headline_historia ?></h1>
    <h3><?php echo $second_headline_historia ?></h3>
  </div>
</section>
<section class="historytxt">
  <div class="contentwrapper">
    <div class="textcontent">
      <p><?php echo $first_paragraph_historia ?></p>
      <div class="imgwrapper">
        <div class="smallimg">
          <img src="<?php echo $left_img_to_first_paragraph ?>" />
          <p class="imgtext"><?php echo $left_img_text ?>"</p>
        </div>
        <div class="smallimg">
          <img src="<?php echo $rigth_img_to_first_paragraph ?>" />
          <p class="imgtext"><?php echo $right_img_text ?></p>
        </div>
      </div>
    </div>
    <div class="imgcontent">
      <img src="<?php echo $small_img_leftside ?>"  />
      <p class="imgtext"><?php echo $small_img_leftside_txt ?></p>
    </div>
  </div>

  <div class="contentwrapper">
    <div class="columnone">
      <p><?php echo $second_paragraph ?></p>
    </div>
    <div class="columntwo">
      <img src="<?php echo $second_paragraph_img ?>"  />
      <p class="imgtext"><?php echo $second_paragraph_img_text ?></p>
    </div>
    <div class="columnone">
      <img src="<?php echo $third_paragraph_img ?>"  />
    </div>
    <div class="columntwo">
      <p><?php echo $third_paragraph ?></p>
    </div>
  </div>
  <div class="contentwrapper">
    <div class="columntwo">
      <img src="<?php echo $left_bottom_img ?>"  />
        <p class="imgtext"><?php echo $left_bottom_img_text ?></p>
    </div>
    <div class="columntwo">
      <img src="<?php echo $right_bottom_img ?>"  />
        <p class="imgtext"><?php echo $right_bottom_img_text ?></p>
    </div>
  </div>
</section>

<?php

get_footer();

?>
