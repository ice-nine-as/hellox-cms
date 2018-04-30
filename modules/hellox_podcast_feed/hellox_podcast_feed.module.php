<?php
function hellox_podcast_feed_menu() {
  $items = array();
  $items['feeds/podcast-feed.xml'] = array(
    'title' => 'Callback',
    'type' => MENU_CALLBACK,
    'page callback' => 'custom_callback',
    'access arguments' => array('access content'),
  );
  return $items;
}

function custom_callback() {
  header('Content-type: application/xml; charset=UTF-8');
  die(file_get_contents('https://blubrry.com/feeds/hello_x.xml'));
}