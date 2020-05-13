<?php

$text = get_sub_field('text');
$section = 'note';

echo '<section class="' . $section . '">';

  echo '<div class="row row--justify-center row--align-center ">';

    if ($text) :

      echo '<p class="list list--small list--center"> '. $text .'</p>';

    else :

      echo '<div class="column column-5-laptop column-4-tablet ">';

        echo '<ul class="list list--small list--center list--right--tablet">';

          echo '<li><a href="' . get_bloginfo('url') . '/?s=shipping" class="link--primary">Free Shipping</a></li>';

          echo '<li>';

          echo '&nbsp;<em class="serif">&mdash;and&mdash;</em>&nbsp;';

          echo '</li>';

          echo '<li><a href="' . get_bloginfo('url') . '/help/is-giftwrapping-included-in-the-price/" class="link--primary">Free Gift Wrapping</a></li>';

        echo '</ul>';

      echo '</div>';

      echo '<div class="column-2-laptop column-3-tablet visuallyhidden clearvisuallyhidden--tablet">';

        echo '<a onclick="return gtag_report_conversion("https://my.fondfolio.com/auth/signup");" href="https://my.fondfolio.com/auth/signup" class="button button--secondary button--small adwordsTracking">Get Started Free</a>';

      echo '</div>';

      echo '<div class="column column-5-laptop column-4-tablet visuallyhidden clearvisuallyhidden--tablet">';

        echo '<p class="text--align-left secondary p--small p--hard">Don’t pay until all contributions are collected.</p>';

      echo '</div>';

    endif;

  echo '</div>';

echo '</section>';

?>
