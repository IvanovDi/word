<?php
 if ( function_exists('register_sidebar') )
 register_sidebar(array(
 'name' => 'Сайдбар',
 'id' => 'sidebar',
 'before_widget' => '<div class="block">',
 'after_widget' => '</div>',
 'before_title' => '<div class="title">',
 'after_title' => '</div>',
 ));
  