<?php

$title = get_sub_field('title');
$description = get_sub_field('description');
$subtitle = get_sub_field('subtitle');
$button_text = get_sub_field('button_text');
$button_link = get_sub_field('button_link');
$image = get_sub_field('image');
$size = 'full';
$video = get_sub_field('video');
$wystia = get_sub_field('wystia');
$type = get_sub_field('type');

echo '<section class="banner">';

  echo '<div class="banner__background">';

    set_query_var('icon', 'splotches');

    get_template_part('partials/icon');

  echo '</div>';

  echo '<div class="row row--justify-center">';

    echo '<div class="column column-8-laptop intro">';

      echo '<h1 class="">' . $title . '</h1>';

      echo '<p class="p--large">' . $description . '</p>';

      if ($button_link && $button_text) :

        echo '<a onclick="return gtag_report_conversion("https://my.fondfolio.com/auth/signup");" href="' . $button_link .'" class="button button--primary button--large adwordsTracking">' . $button_text . '</a>';

      endif;

    echo '</div>';

  echo '</div>';

  if ($wystia) :

    echo '<div class="banner__videoWrapper">';

      echo '
      <script src="https://fast.wistia.com/embed/medias/'. $wystia .'.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="banner__video"><div class="wistia_responsive_wrapper"><div class="wistia_embed wistia_async_'. $wystia .' wmode=transparent videoFoam=true muted=true">&nbsp;</div></div></div>';

    echo '</div>';

  endif;

    echo '<div class="banner__image">';

      echo wp_get_attachment_image( $image, $size );

    echo '</div>';

echo '</section>';

get_template_part('partials/section-note');

?>
