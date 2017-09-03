<?php

$contact_form              = get_field('contact_form');

?>

<section id="kontakt">
  <div id="layer">
   <div id="uppermsgbody">
    <<?php echo $contact_form ?>
   </div> 

<!--
    <form>
      <div id="uppermsgbody">
        <input type="text" name="name" placeholder="Namn"/ class="msginput">
        <input type="text" name="epost" placeholder="e-post" class="msginput" />
      </div>
      <div id="lowermsgbody">
        <textarea type="text" name="message" placeholder="Skriv ett meddelande..." class="msg"/></textarea>
        <input type="submit"/ class="skicka">
      </div>
    </form>
-->
  </div>
</section>
  <div id="karta">

  </div>
