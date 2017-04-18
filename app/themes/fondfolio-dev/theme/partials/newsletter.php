<?php

$newsletter_text = get_field('newsletter_text', 'options');
$newsletter_button_text = get_field('newsletter_button_text', 'options');

echo '<form action="//fondfolio.us13.list-manage.com/subscribe/post?u=65e81a3fa309924ed7ff3fd68&amp;id=fb444d9189" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">';

  echo '<p class="p--hard p--large secondary ">' . $newsletter_text . '</p>';


  echo '<label for="mce-EMAIL">';

  echo $newsletter_button_text;

  echo '</label>';

  echo '<input type="email" value="" name="EMAIL" class="" id="mce-EMAIL">';

echo '</form>';
?>
<!-- <div class="mc&#45;field&#45;group"> -->
<!-- </label> -->
<!-- </div> -->
<!-- <div class="mc&#45;field&#45;group"> -->
<!--     <label for="mce&#45;FNAME">First Name </label> -->
<!--     <input type="text" value="" name="FNAME" class="" id="mce&#45;FNAME"> -->
<!-- </div> -->
<!-- <div class="mc&#45;field&#45;group"> -->
<!--     <label for="mce&#45;LNAME">Last Name </label> -->
<!--     <input type="text" value="" name="LNAME" class="" id="mce&#45;LNAME"> -->
<!-- </div> -->
<!--     <div id="mce&#45;responses" class="clear"> -->
<!--         <div class="response" id="mce&#45;error&#45;response" style="display:none"></div> -->
<!--         <div class="response" id="mce&#45;success&#45;response" style="display:none"></div> -->
<!--     </div>    <!&#45;&#45; real people should not fill this in and expect good things &#45; do not remove this or risk form bot signups&#45;&#45;> -->
<!--     <div style="position: absolute; left: &#45;5000px;" aria&#45;hidden="true"><input type="text" name="b_65e81a3fa309924ed7ff3fd68_fb444d9189" tabindex="&#45;1" value=""></div> -->
<!--     <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc&#45;embedded&#45;subscribe" class="button"></div> -->
<!--     </div> -->
<!-- </form> -->
<!-- </div> -->

<!--End mc_embed_signup-->
