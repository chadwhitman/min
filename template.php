<?php
/**
 * @file
 * Override a theme's functions here
 */

function min_preprocess_html(&$variables) {
  drupal_add_css(
  'http://fonts.googleapis.com/css?family=Lato',
  array('type' => 'external')
  );
  drupal_add_css(
  'http://fonts.googleapis.com/css?family=Crimson+Text',
  array('type' => 'external')
  );
}
